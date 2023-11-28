<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QueryModelx extends Model
{
    use HasFactory;

    //featured Properties filters
    public static function FeaturedProperties($request)
    {
        $data = Properties::with('propertyDetail','StructureType','userProperties')->where('IsMlsProperty','=','0');

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
        $data  = AgentLeads::where('lead_type','=','buy')->orWhere('lead_type','=','both');

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
        $data  = AgentLeads::where('lead_type','=','sell')->orWhere('lead_type','=','both');

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
        $data  = PropertyLeads::where('lead_type','=','seller')->orWhere('lead_type','=','both');

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
         $data  = PropertyLeads::where('lead_type','=','buyer')->orWhere('lead_type','=','both');

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
}
