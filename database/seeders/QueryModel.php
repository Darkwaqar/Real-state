<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class QueryModel extends Model

{

    use HasFactory;



    //featured Properties filters

    public static function FeaturedProperties($request)

    {

        $data = Properties::with('propertyDetail','StructureType','userProperties')->where('IsMlsProperty','=','0')->orderBy('created_at', 'desc');
            if (!empty($request->search)) {
                $data->where('ListAgentFullName','like','%'.$request->search.'%')->orWhere('PropertyAddress','like','%'.$request->search.'%');
            }
            if (isset($request->city) && !empty($request->city)) {
                $data->where('CityName','=',$request->city);
            }
            if(!empty($request->type)){
                $data->whereHas('StructureType', function($query) use ($request) {
                    $query->where('StructureTypeName', $request->type);
                });
            }
            if (isset($request->year) && !empty($request->year)) {
                $data->whereYear('OriginatingSystemModificationTimestamp','like','%'.$request->year.'%');
            }
            $properties = $data->simplePaginate(10)->appends(request()->query());
            return $properties;
    }



    // buying inquiries filter

    public static function buyingInquiriesfilters($request)

    {

        $data  = AgentLeads::where('lead_type','=','buy')->with('user')->orWhere('lead_type','=','both')->orderBy('created_at', 'desc');
            if (!empty($request->search)) {
                $data->where('name','like','%'.$request->search.'%')
                ->orWhere('email','like','%'.$request->search.'%');
            }
            if (isset($request->city) && !empty($request->city)) {
                $data->where('city','=',$request->city);
            }
            if(isset($request->month) && !empty($request->month)){
                $data->where('created_at','like','%'.$request->month.'%');
            }
            if (isset($request->year) && !empty($request->year)) {
                $data->where('created_at','like','%'.$request->year.'%');
            }
            $leads = $data->simplePaginate(50)->appends(request()->query());
            return $leads;

    }



    // selling inquiries filter

    public static function sellingInquiriesfilters($request)
    {
        $data  = AgentLeads::where('lead_type','=','sell')->with('user')->orWhere('lead_type','=','both')->orderBy('created_at', 'desc');
            if (!empty($request->search)) {
                $data->where('name','like','%'.$request->search.'%');
                //->orWhere('email','like','%'.$request->search.'%');
            }
            if ( !empty($request->city)) {
                $data->where('city','=',$request->city);
            }
            if(!empty($request->month)){
                $data->where('created_at','like','%'.$request->month.'%');
            }
            if (!empty($request->year)) {
                $data->where('created_at','like','%'.$request->year.'%');
            }
            $leads = $data->simplePaginate(50)->appends(request()->query());
            return $leads;

    }



    //selling leads

    public static function sellingLeadsfilters($request)
    {
        $data  = PropertyLeads::where('lead_type','=','seller')->orWhere('lead_type','=','both')->orderBy('created_at', 'desc');
            if (!empty($request->search)) {
                $data->where('name','like','%'.$request->search.'%')
                    ->orWhere('email','like','%'.$request->search.'%');
            }

            if (!empty($request->sell_plan)) {
                $data->where('plan_to_sell_home','=',$request->sell_plan);
                //->orWhere('email','like','%'.$request->search.'%');
            }
            if ( !empty($request->city)) {
                $data->where('city','=',$request->city);
            }

            if(!empty($request->month)){
                $data->where('created_at','like','%'.$request->month.'%');
            }
            if (!empty($request->year)) {
                $data->where('created_at','like','%'.$request->year.'%');
            }
            $leads = $data->simplePaginate(50)->appends(request()->query());
            return $leads;
    }



     //buying leads

     public static function buyingLeadsfilters($request)

     {
         $data  = PropertyLeads::where('lead_type','=','buyer')->orWhere('lead_type','=','both')->orderBy('created_at', 'desc');
             if (!empty($request->search)) {
                 $data->where('name','like','%'.$request->search.'%')
                     ->orWhere('email','like','%'.$request->search.'%');
             }
             if (!empty($request->sell_plan)) {
                 $data->where('plan_to_sell_home','=',$request->sell_plan);
                 //->orWhere('email','like','%'.$request->search.'%');

             }
             if ( !empty($request->city)) {
                 $data->where('city','=',$request->city);
             }
             if(!empty($request->month)){
                 $data->where('created_at','like','%'.$request->month.'%');
             }
             if (!empty($request->year)) {
                 $data->where('created_at','like','%'.$request->year.'%');
             }
             $leads = $data->simplePaginate(50)->appends(request()->query());
             return $leads;

     }


     public static function finance($request){

        $finance = WalletCredit::simplePaginate(50);



            if (!empty($request->search)) {

                $finance = WalletCredit::where('card_holder_name','like','%'.$request->search.'%')
                    ->orWhere('amount','like', '='.$request->search);

            }

          

            $leads = $finance->simplePaginate(50)->appends(request()->query());



            return $leads;
     } 

}

