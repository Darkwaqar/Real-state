<?php

namespace App\Jobs;

use App\Models\HouseCanaryPropertyData;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class HouseCanaryDataStoreJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $data;
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = $this->data;

    if (!empty($data['apiData'][0]['property/value'])) {
        $propertyData = [
            'property_id' =>  $data['propertyId'], // Assuming you have a property ID available
            'property_block_crime' => json_encode($data['apiData'][0]['property/block_crime']),
            'property_details' => json_encode($data['apiData'][0]['property/details']),
            'property_fema_disaster_area' => json_encode($data['apiData'][0]['property/fema_disaster_area']),
            'property_flood' => json_encode($data['apiData'][0]['property/flood']),
            'property_geo_features' => json_encode($data['apiData'][0]['property/geo_features']),
            'property_rental_value' => json_encode($data['apiData'][0]['property/rental_value']),
            'property_sales_history' => json_encode($data['apiData'][0]['property/sales_history']),
            //'property_school' => json_encode($data['apiData'][0]['property/school']),
            'property_tax_history' => json_encode($data['apiData'][0]['property/tax_history']),
            'property_value' => json_encode($data['apiData'][0]['property/value']),
            'property_address_info' => json_encode($data['apiData'][0]['address_info'])
        ];

        HouseCanaryPropertyData::create($propertyData);
    }
    }
}
