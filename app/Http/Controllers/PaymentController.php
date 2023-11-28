<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Http\Controllers\WalletController;
use App\Mail\AgentPerchaseCredit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Stripe;



class PaymentController extends Controller

{

    public function stripePayment(Request $request)

    {

        // $customer = Stripe\Customer::create(array(

            //     "name" => $request->card_holder_name,

            //     "email" => Auth::user()->email,

            //     "source" => $request->stripeToken

            //  ));



            $name = Auth::user()->first_name;



        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $stripe = Stripe\Charge::create ([

                "amount" => $request->amount * 100,

                "currency" => "usd",

                "source" => $request->stripeToken,

                "description" => "Aris Credit Purchased by ".$name,

        ]);



        if($stripe->status == "succeeded")

        {

            $data = [

                'card_holder_name' =>$request->name,

                'amount' => $request->amount,

                'transaction_id' => $stripe->id,

                'card_number' => $request->card_number,

            ];



            $debit = new WalletController;

            $debit->store_credit($data);
            Mail::to(Auth::user()->email)->send(new AgentPerchaseCredit($data));
            return redirect()->route('userDashboard')->withSuccess('Aris Credit added to your wallet');

        }



        // $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));



        // $stripe->paymentIntents->create(

        //     [

        //         'amount' => 1099,

        //         'currency' => 'usd',

        //         // 'payment_method_types' => ['card'],

        //         'automatic_payment_methods' => ['enabled' => true],

        //     ]

        // );



        // dd($stripe);







        // return redirect()->route('userDashboard')->withSuccess('Aris Credit added to your wallet');

    }

}

