<?php



namespace App\Http\Controllers;

use App\Mail\AgentPerchaseLead;
use Illuminate\Http\Request;

use App\Models\WalletCredit;

use App\Models\WalletDebit;

use App\Models\PropertyLeads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class WalletController extends Controller

{

    public function total_balance()

    {

        $credit = DB::table('wallet_credit')
            ->select(DB::raw('SUM(amount) as total'))
            ->where('agent_id', getUserId())
            ->get()->toArray();
        $totalCredit = $credit[0]->total;
        $totalCredit = ($totalCredit === null) ? 0.00 : $totalCredit;
        $debit = DB::table('wallet_debit')
            ->select(DB::raw('SUM(amount) as total'))
            ->where('agent_id', getUserId())
            ->get()->toArray();
        $totalDebit = $debit[0]->total;
        $totalDebit = ($totalDebit === null) ? 0.00 : $totalDebit;
        $totalBalance = (float)$totalCredit - (float)$totalDebit;
        $totalBalance = ($totalBalance < 0) ? 0 : $totalBalance;
        $totalBalance = number_format((float)$totalBalance, 2, '.', '');
        return $totalBalance;
    }

    public function store_credit($data = [])
    {
        $walletCredit = new WalletCredit;
        $walletCredit->card_holder_name = $data['card_holder_name'];
        $walletCredit->card_number = $data['card_number'];
        $walletCredit->agent_id = getUserId();
        $walletCredit->transaction_id = $data['transaction_id'];
        $walletCredit->amount = $data['amount'];
        $walletCredit->save();
    }


    public function store_debit(Request $request)

    {

        $totalBalance = $this->total_balance();
        if ($totalBalance >= 150) {
            $wallet = WalletDebit::updateOrCreate(
                ['lead_id' => $request->lead_id, 'agent_id' => getUserId()],
                ['amount' => 150.00]
            );

            // $walletDebit = new WalletDebit;

            // $walletDebit->lead_id = $request->lead_id;

            // $walletDebit->agent_id = getUserId();

            // $walletDebit->amount = 150.00;

            // $save = $walletDebit->save();

            if ($wallet) {
                Mail::to(Auth::user()->email)->send(new AgentPerchaseLead($wallet));
                return redirect()->route('userDashboard')->withSuccess('Lead purchase succesfull and added to your leads!');
            }
        } else {

            return redirect()->route('userDashboard')->withSuccess('Insufficient aris credit, please purchase credit and try again!');
        }
    }
}
