<?php

namespace App\Console\Commands;

use App\Jobs\UpdateMediaJob;
use App\Models\Media;
use Illuminate\Console\Command;

class RefreshS3BucketUrl3 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 's3bucketimage:refreshlink3';

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
        $currentTime = now();
        $chunkSize = 0;
        for ($i = 0; $i < 100; $i++) {
            $media = Media::select('MediaURL','id','s3buckettempurl')
                ->where('status', 1)
                ->where('updated_at', '<', $currentTime->subHours(10))
                ->skip(1000000 +  $chunkSize)
                ->take(5000)
                ->get();
            $chunkSize = $chunkSize + 5000;
            if ($media->isNotEmpty()) {
                foreach ($media as $value) {
                    UpdateMediaJob::dispatch($value);
                }
            } else {
                // No more data, break the loop
                break;
            }
        }

        // $media = Media::select('MediaURL','id','s3buckettempurl')
        // ->where('status',1)
        // //->whereNull('s3buckettempurl')
        // //->skip(400000)
        // //->take(5000)
        // ->get();
        // //dd($media);
        //     foreach ($media as $value)
        //     {
        //         $tempGeneratedUrl = generateS3BucketUrl(basename($value['MediaURL']));
        //         $updateMedia = ['s3buckettempurl'=>$tempGeneratedUrl];
        //         Media::where('id',$value['id'])->update($updateMedia);
        //     }
    }
}
