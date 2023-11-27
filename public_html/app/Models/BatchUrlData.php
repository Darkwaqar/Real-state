<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class BatchUrlData extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'nwmls_batch_insert';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','currentLink','type',
    'statusMessage','random','nextLink','urlData','sizeOfurlData','propertyAdded',
    'created_at','updated_at','deleted_at'
];

    public static function getUrlData(){
        return  BatchUrlData::select(DB::raw('type'))
        ->groupBy('type')
        // ->whereIn('type',['Active','Closed','ActiveUnderContract','ComingSoon','Pending'])
        ->whereIn('type',['Closed','Active','ActiveUnderContract','ComingSoon','Pending'])
        ->take(1)->get()->toArray();
    //    return  BatchUrlData::select(DB::raw('type,sum(propertyAdded) as propertyCount'))
    //     ->groupBy('type')
    //     ->having('propertyCount', '>', 0)
    //     ->orderBy('propertyCount')->take(1)->get()->toArray();
        // return BatchUrlData::raw("select type,sum(propertyAdded) as propertyCount from
        // nwmls_batch_insert group by type having(propertyCount > 0 ) order by propertyCount")->get()->toArray();
    }
}//calss here
