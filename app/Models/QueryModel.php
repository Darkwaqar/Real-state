<?php

namespace App\Models;

use AWS\CRT\HTTP\Request;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class QueryModel extends Model

{

    use HasFactory;

    //featured Properties filters

    public static function FeaturedProperties($request)

    {

        $data = Properties::with('propertyDetail', 'StructureType', 'userProperties')->where('IsMlsProperty', '=', '0')->orderBy('created_at', 'desc');
        if (!empty($request->search)) {
            $data->where('ListAgentFullName', 'like', '%' . $request->search . '%')->orWhere('PropertyAddress', 'like', '%' . $request->search . '%');
        }
        if (isset($request->city) && !empty($request->city)) {
            $data->where('CityName', '=', $request->city);
        }
        if (!empty($request->type)) {
            $data->whereHas('StructureType', function ($query) use ($request) {
                $query->where('StructureTypeName', $request->type);
            });
        }
        if (isset($request->year) && !empty($request->year)) {
            $data->whereYear('OriginatingSystemModificationTimestamp', 'like', '%' . $request->year . '%');
        }
        $properties = $data->simplePaginate(1000)->appends(request()->query());
        return $properties;
    }

    // buying inquiries filter

    public static function buyingInquiriesfilters($request)

    {

        $data  = AgentLeads::where('lead_type', '=', 'buy')->with('user')->orWhere('lead_type', '=', 'both')->orderBy('created_at', 'desc');
        if (!empty($request->search)) {
            $data->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%');
        }
        if (isset($request->city) && !empty($request->city)) {
            $data->where('city', '=', $request->city);
        }
        if (isset($request->month) && !empty($request->month)) {
            $data->where('created_at', 'like', '%' . $request->month . '%');
        }
        if (isset($request->year) && !empty($request->year)) {
            $data->where('created_at', 'like', '%' . $request->year . '%');
        }
        $leads = $data->simplePaginate(50)->appends(request()->query());
        return $leads;
    }

    // selling inquiries filter

    public static function sellingInquiriesfilters($request)
    {
        $data  = AgentLeads::where('lead_type', '=', 'sell')->with('user')->orWhere('lead_type', '=', 'both')->orderBy('created_at', 'desc');
        if (!empty($request->search)) {
            $data->where('name', 'like', '%' . $request->search . '%');
            //->orWhere('email','like','%'.$request->search.'%');
        }
        if (!empty($request->city)) {
            $data->where('city', '=', $request->city);
        }
        if (!empty($request->month)) {
            $data->where('created_at', 'like', '%' . $request->month . '%');
        }
        if (!empty($request->year)) {
            $data->where('created_at', 'like', '%' . $request->year . '%');
        }
        $leads = $data->simplePaginate(50)->appends(request()->query());
        return $leads;
    }

    //selling leads

    public static function sellingLeadsfilters($request)
    {
        $data  = PropertyLeads::where('lead_type', '=', 'seller')->orWhere('lead_type', '=', 'both')->orderBy('created_at', 'desc');
        if (!empty($request->search)) {
            $data->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%');
        }

        if (!empty($request->sell_plan)) {
            $data->where('plan_to_sell_home', '=', $request->sell_plan);
            //->orWhere('email','like','%'.$request->search.'%');
        }
        if (!empty($request->city)) {
            $data->where('city', '=', $request->city);
        }

        if (!empty($request->month)) {
            $data->where('created_at', 'like', '%' . $request->month . '%');
        }
        if (!empty($request->year)) {
            $data->where('created_at', 'like', '%' . $request->year . '%');
        }
        $leads = $data->simplePaginate(50)->appends(request()->query());
        return $leads;
    }

    public static function agentQueries()
    {
        $PropertySchedule = PropertySchedule::with('user')->with('property','property.StructureType')->where('agent_id', getUserId())->orderBy('created_at', 'desc')->get()->toArray();
        $PropertyMessageBox = PropertyMessageBox::with('user')->with('property','property.StructureType')->where('agent_id', getUserId())->orderBy('created_at', 'desc')->get()->toArray();

        $mergedArray = [];

        foreach ($PropertySchedule as $schedule) {
            $schedule['type'] = 'Schedule';
            $mergedArray[] = $schedule;
        }
        foreach ($PropertyMessageBox as $messageBox) {
            $messageBox['type'] = 'ContactForm';
            $mergedArray[] = $messageBox;
        }

        usort($mergedArray, function ($a, $b) {
            return strtotime($b['created_at']) - strtotime($a['created_at']);
        });

        return $mergedArray;
    }
    public static function agentLeads()
    {
        $PropertyLeads = PropertyLeads::with('user')->where('created_at', '>=', Carbon::now()->subDays(7))->orderBy('created_at', 'desc')->get()->toArray();
        $PropertySchedule = PropertySchedule::with('user')->where('created_at', '>=', Carbon::now()->subDays(7))->with('property','property.StructureType')->orderBy('created_at', 'desc')->get()->toArray();
        $PropertyMessageBox = PropertyMessageBox::with('user')->where('created_at', '>=', Carbon::now()->subDays(7))->with('property','property.StructureType')->orderBy('created_at', 'desc')->get()->toArray();

        $mergedArray = [];
        foreach ($PropertyLeads as $lead) {
            $lead['type'] = 'Leads';
            $mergedArray[] = $lead;
        }
        foreach ($PropertySchedule as $schedule) {
            $schedule['type'] = 'Schedule';
            $mergedArray[] = $schedule;
        }
        foreach ($PropertyMessageBox as $messageBox) {
            $messageBox['type'] = 'ContactForm';
            $mergedArray[] = $messageBox;
        }

        usort($mergedArray, function ($a, $b) {
            return strtotime($b['created_at']) - strtotime($a['created_at']);
        });

        return $mergedArray;
    }

    public static function leadsWithFilter($request)
    {
        $PropertyLeads = PropertyLeads::orderBy('created_at', 'desc')->get()->toArray();
        $PropertySchedule = PropertySchedule::with('user')->with('property')->orderBy('created_at', 'desc')->get()->toArray();
        $PropertyMessageBox = PropertyMessageBox::with('user')->with('property')->orderBy('created_at', 'desc')->get()->toArray();

        $mergedArray = [];
        foreach ($PropertyLeads as $lead) {
            $lead['type'] = 'Leads';
            $mergedArray[] = $lead;
        }
        foreach ($PropertySchedule as $schedule) {
            $schedule['type'] = 'Schedule';
            $mergedArray[] = $schedule;
        }
        foreach ($PropertyMessageBox as $messageBox) {
            $messageBox['type'] = 'ContactForm';
            $mergedArray[] = $messageBox;
        }

        // Apply filters if they are present in the request
        // Apply filters if they are present in the request
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $filteredArray = array_filter($mergedArray, function ($item) use ($searchTerm) {
                return (
                    (isset($item['address']) && stripos($item['address'], $searchTerm) !== false) ||
                    (isset($item['name']) && stripos($item['name'], $searchTerm) !== false) ||
                    (isset($item['scheduled_date']) && stripos($item['scheduled_date'], $searchTerm) !== false) ||
                    (isset($item['message']) && stripos($item['message'], $searchTerm) !== false)
                );
            });

            // Convert the filtered array back to an indexed array
            $filteredArray = array_values($filteredArray);
        } else {
            // If no search term is provided, use the merged array
            $filteredArray = $mergedArray;
        }

        // Filter by city if the "city" parameter is present in the request
        if ($request->has('city')) {
            $city = $request->input('city');
            $filteredArray = array_filter($filteredArray, function ($item) use ($city) {
                return ($item['type'] === 'Leads' && isset($item['city']) && $item['city'] === $city) ||
                    ($item['type'] === 'Schedule' && isset($item['property']['CityName']) && $item['property']['CityName'] === $city) ||
                    ($item['type'] === 'ContactForm' && isset($item['property']['CityName']) && $item['property']['CityName'] === $city);
            });
        }

        // Filter by year if the "year" parameter is present in the request
        if ($request->has('year')) {
            $selectedYear = $request->input('year');
            $date = Carbon::createFromDate($selectedYear);
            $filteredArray = array_filter($filteredArray, function ($item) use ($date) {
                return Carbon::parse($item['created_at'])->year === $date->year ||
                    (isset($item['scheduled_date']) && Carbon::parse($item['scheduled_date'])->year === $date->year);
            });
        }

        // Filter by month if the "month" parameter is present in the request
        if ($request->has('month')) {
            $selectedMonth = $request->input('month');
            $date = Carbon::createFromDate(null, $selectedMonth, null);
            $filteredArray = array_filter($filteredArray, function ($item) use ($date) {
                return Carbon::parse($item['created_at'])->month === $date->month ||
                    (isset($item['scheduled_date']) && Carbon::parse($item['scheduled_date'])->month === $date->month);
            });
        }

        // Fetch the lead type from the request
        $leadType = $request->input('leadType');

        // Filter the records based on the selected lead type
        if ($leadType && in_array($leadType, ['Leads', 'Schedule', 'ContactForm'])) {
            $filteredArray = array_filter($mergedArray, function ($item) use ($leadType) {
                return $item['type'] === $leadType;
            });
        } else {
            // If no lead type is selected, show all records
            $filteredArray = $mergedArray;
        }

        // Fetch the filtered data
        // $PropertyLeads = $PropertyLeads->get()->toArray();
        // $PropertySchedule = $PropertySchedule->get()->toArray();
        // $PropertyMessageBox = $PropertyMessageBox->get()->toArray();
        //     // Merge the arrays into a single array and add an attribute for each element
        //     $mergedArray = [];
        //     foreach ($PropertyLeads as $lead) {
        //         $lead['type'] = 'Leads';
        //         $mergedArray[] = $lead;
        //     }
        //     foreach ($PropertySchedule as $schedule) {
        //         $schedule['type'] = 'Schedule';
        //         $mergedArray[] = $schedule;
        //     }
        //     foreach ($PropertyMessageBox as $messageBox) {
        //         $messageBox['type'] = 'ContactForm';
        //         $mergedArray[] = $messageBox;
        //     }
        //     if ($request->has('leadType')) {
        //         $leadType = $request->input('leadType');
        //         if (in_array($leadType, ['Leads', 'Schedule', 'ContactForm'])) {
        //             $mergedArray = array_filter($mergedArray, function ($item) use ($leadType) {
        //                 dd($item);
        //                 return $item['type'] === $leadType;
        //             });
        //         }
        //     }

        // Sort the merged array by 'created_at' in descending order
        usort($filteredArray, function ($a, $b) {
            return strtotime($b['created_at']) - strtotime($a['created_at']);
        });


        $perPage = 200; // Set the number of items per page
        $page = Paginator::resolveCurrentPage('page'); // Get the current page number from the request

        $currentPageItems = array_slice($filteredArray, ($page - 1) * $perPage, $perPage);
        $totalItems = count($filteredArray);

        $leadsPaginated = new LengthAwarePaginator($currentPageItems, $totalItems, $perPage, $page, [
            'path' => Paginator::resolveCurrentPath(),
        ]);

        $leads = [
            'allLeads' => $filteredArray,
            'leads' => $leadsPaginated,
            'totalPages' => $leadsPaginated->lastPage(),
            'page' => $page,
        ];
        return $leads;
    }

    public static function buyingLeadsfilters($request)
    {
        $data  = PropertyLeads::where('lead_type', '=', 'buyer')->orWhere('lead_type', '=', 'both')->orderBy('created_at', 'desc');
        if (!empty($request->search)) {
            $data->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%');
        }
        if (!empty($request->sell_plan)) {
            $data->where('plan_to_sell_home', '=', $request->sell_plan);
            //->orWhere('email','like','%'.$request->search.'%');

        }
        if (!empty($request->city)) {
            $data->where('city', '=', $request->city);
        }
        if (!empty($request->month)) {
            $data->where('created_at', 'like', '%' . $request->month . '%');
        }
        if (!empty($request->year)) {
            $data->where('created_at', 'like', '%' . $request->year . '%');
        }
        $leads = $data->simplePaginate(50)->appends(request()->query());
        return $leads;
    }

    public static function finance($request)
    {

        $finance = WalletCredit::simplePaginate(50);

        if (!empty($request->search)) {

            $finance = WalletCredit::where('card_holder_name', 'like', '%' . $request->search . '%')
                ->orWhere('amount', 'like', '=' . $request->search);
        }

        $leads = $finance->appends(request()->query());

        return $leads;
    }

    // agent signed up
    public static function agents($request)
    {

        $data = User::withTrashed()->with('role', 'questions', 'reviewByUser', 'agentLeads')
            ->where('type', 'aris')
            ->whereHas('role', function ($q) {
                $q->where('name', '=', 'Agent');
            });
        if (!empty($request->search)) {
            $data->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%');
        }
        if (isset($request->city) && !empty($request->city)) {
            $data->where('city', '=', $request->city);
        }
        if (isset($request->month) && !empty($request->month)) {
            $data->where('created_at', 'like', '%' . $request->month . '%');
        }
        if (isset($request->year) && !empty($request->year)) {
            $data->where('created_at', 'like', '%' . $request->year . '%');
        }
        $leads = $data->orderBy('id', 'DESC')->simplePaginate(50)->appends(request()->query());
        return $leads;
    }

    public static function loanOfficer($request)
    {
        $data = User::withTrashed()->with('role')
            ->whereHas('role', function ($q) {
                $q->where('name', '=', 'Loan Officer');
            });
        if (!empty($request->search)) {
            $data->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%');
        }
        if (isset($request->city) && !empty($request->city)) {
            $data->where('city', '=', $request->city);
        }
        if (isset($request->month) && !empty($request->month)) {
            $data->whereMonth('created_at', 'like', '%' . $request->month . '%');
        }
        if (isset($request->year) && !empty($request->year)) {
            $data->whereYear('created_at', '=', $request->year);
        }
        $loanofficer = $data->simplePaginate(50)->appends(request()->query());
        return $loanofficer;
    }

    public static function userTickets($request)
    {

        $data = Complaint::with('userComplaints', 'complaintStatus')->orderBy('created_at', 'desc');

        if ($request->has('month') && $request->input('month') != null) {
            $data->whereMonth('created_at', (int)$request->input('month'));
        }

        if ($request->has('ticketStatus') && $request->input('ticketStatus') != null) {
            $data->where('status', $request->input('ticketStatus'));
        }

        $leads = $data->paginate(100)->appends(request()->query());
        return $leads;
    }

    public static function notifications($request)
    {

        $data = Notifications::with('user', 'properties')->orderBy('created_at', 'desc');

        if ($request->has('month')) {
            $selectedMonth = $request->input('month');
            $data->whereMonth('created_at', $selectedMonth);
        }

        if ($request->has('ticketStatus')) {
            $selectedStatus = $request->input('ticketStatus');
            $data->where('status', $selectedStatus);
        }
        // $sqlQuery = $data->toSql();
        // dd($sqlQuery);

        $notifications = $data->paginate(10)->appends(request()->query());
        return $notifications;
    }
}
