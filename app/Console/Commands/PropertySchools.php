<?php

namespace App\Console\Commands;

use App\Models\Properties;
use App\Models\Schools;
use App\Models\SchoolSubrating;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class PropertySchools extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mls:schools';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
    //     $schools = Properties::where('PublishStatus', '!=', 'Closed')
    //                 ->where('school_added', 0)->skip(0)->take(20)->get();

    //         if (!empty($schools)) {
    //             foreach ($schools as $value) {
    //                 // Check if the property ID already exists in the schools table
    //                 $existingSchoolsCount = Schools::where('property_id', $value->id)->count();

    //                 // If the property ID already exists in the schools table, skip this property
    //                 if ($existingSchoolsCount > 0) {
    //                 // echo 'already there'.$value->id;
    //                     continue;
    //                 }

    //                 $greatSchool = greatSchool($value->PropertyLatitude, $value->PropertyLongitude, $value->id);

    //                 if (isset($greatSchool['schools']) && count($greatSchool['schools']) > 0) {
    //                     foreach ($greatSchool['schools'] as $school) {
    //                         if (isset($school)) {
    //                         $schooldata['property_id'] = $value->id;
    //                         $schooldata['universal-id'] = isset($school['universal-id']) ? $school['universal-id'] :  '';
    //                         $schooldata['nces-id'] = isset($school['nces-id']) ? $school['nces-id'] :  '';
    //                         $schooldata['state-id'] = isset($school['state-id']) ? $school['state-id'] :  '';
    //                         $schooldata['name'] = isset($school['name']) ? $school['name'] :  '';
    //                         $schooldata['school-summary'] = isset($school['school-summary']) ? $school['school-summary'] :  '';
    //                         $schooldata['type'] = isset($school['type']) ? $school['type'] :  '';
    //                         $schooldata['level_codes'] = isset($school['level-codes']) ? $school['level-codes'] :  '';
    //                         $schooldata['level'] = isset($school['level']) ? $school['level'] :  '';
    //                         $schooldata['street'] = isset($school['street']) ? $school['street'] :  '';
    //                         $schooldata['fipscounty'] = isset($school['fipscounty']) ? $school['fipscounty'] :  '';
    //                         $schooldata['city'] = isset($school['city']) ? $school['city'] :  '';
    //                         $schooldata['state'] = isset($school['state']) ? $school['state'] :  '';
    //                         $schooldata['phone'] = isset($school['phone']) ? $school['phone'] :  '';
    //                         $schooldata['fax'] = isset($school['fax']) ? $school['fax'] :  '';
    //                         $schooldata['zip'] = isset($school['zip']) ? $school['zip'] :  '';
    //                         $schooldata['county'] = isset($school['county']) ? $school['county'] :  '';
    //                         $schooldata['lat'] = isset($school['lat']) ? $school['lat'] :  '';
    //                         $schooldata['lon'] = isset($school['lon']) ? $school['lon'] :  '';
    //                         $schooldata['district-name'] = isset($school['district-name']) ? $school['district-name'] :  '';                        
    //                         $schooldata['district-id'] = isset($school['district-id']) ? $school['district-id'] :  '';
    //                         $schooldata['website'] = isset($school['web-site']) ? $school['web-site'] :  '';
    //                         $schooldata['distance'] = isset($school['distance']) ? $school['distance'] :  '';
    //                         $schooldata['overview-url'] = isset($school['overview-url']) ? $school['overview-url'] :  '';
    //                         $schooldata['rating'] = isset($school['rating']) ? $school['rating'] :  '';
    //                         $schooldata['year'] = isset($school['year']) ? $school['year'] :  '';
    //                         $schooldata['rating-description'] = isset($school['rating-description']) ? $school['rating-description'] :  '';                    
                    
    //                         $schoolID =  Schools::updateOrCreate(
    //                             [
    //                                 'universal-id' => $school['universal-id'],
    //                             ],
    //                             $schooldata,
    //                         );
                            
    //                         $schoolSubrating = greatSchoolSubrating($schoolID['universal-id']);

    //                         $subratingData['school_id'] = $schoolID->id;
    //                         $subratingData['universal_id'] = isset($school['universal-id']) ? $school['universal-id'] :  '';
    //                         $subratingData['college-readiness-rating'] = isset($schoolSubrating['college-readiness-rating']) ? json_encode($schoolSubrating['college-readiness-rating']) : '' ;
    //                         $subratingData['academic-progress-rating'] = isset($schoolSubrating['academic-progress-rating']) ? json_encode($schoolSubrating['academic-progress-rating']) : '';
    //                         $subratingData['equity-rating'] = isset($schoolSubrating['equity-rating']) ? json_encode($schoolSubrating['equity-rating']) : '';
    //                         $subratingData['student-growth-rating'] = isset($schoolSubrating['student-growth-rating']) ? json_encode($schoolSubrating['student-growth-rating']) : '';
    //                         $subratingData['attendance-flag'] = isset($schoolSubrating['attendance-flag']) ? json_encode($schoolSubrating['attendance-flag']) : '';
    //                         $subratingData['discipline-flag'] = isset($schoolSubrating['discipline-flag']) ? json_encode($schoolSubrating['discipline-flag']) : '';
    //                         $subratingData['test-scores-rating'] = isset($schoolSubrating['test-scores-rating']) ? json_encode($schoolSubrating['test-scores-rating']) : '' ;
    //                         $subratingData['created_at'] = Carbon::now();
    //                         SchoolSubrating::where('school_id',$schoolID->id)->delete();
    //                         DB::table('school_subratings')->insert($subratingData);
    //                         }
    //                     }
    //                 }

    //                 // Rest of your existing code...
    //                 // ... (the rest of the code you provided) ...

    //                 // Update the property 'school_added' status after processing
    //                 $updateprop = ['school_added' => 1];
    //                 Properties::where('id', $value->id)->update($updateprop);
    //             }
    //         }
    // }
}
}