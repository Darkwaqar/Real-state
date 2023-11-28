<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;



class ScheduleTour extends Model

{

    use HasFactory;

    use SoftDeletes;
    protected $primaryKey = 'id';
    protected $table = 'schedule_a_tour';

    protected $fillable = [

        'date',

        'time',

        'name',

        'email',

        'phone',

        'property_id',

        'buyer_id',

        'admin_id'



    ];



    public function propertyTour()

    {

        return $this->hasMany(Properties::class, 'id', 'property_id');

    }



    public static function tourSchedule(){
        $tours = ScheduleTour::with('propertyTour')->get();
        return $tours;

    }

    public function lead_purchased(){
        return $this->belongsTo(WalletDebit::class, 'id', 'lead_id')->where('agent_id' , getUserId());
    }

}

