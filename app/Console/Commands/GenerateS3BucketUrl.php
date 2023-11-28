<?php

namespace App\Console\Commands;

use App\Models\Media;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class GenerateS3BucketUrl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 's3bucketimage:generator';

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
        $media = Media::select('MediaURL','id','s3buckettempurl')
        ->where('status',1)
        ->whereNull('s3buckettempurl')
        ->orderBy('id', 'DESC')
        ->skip(500000)
        ->take(5000)
        ->get();
        //dd($media);
            foreach ($media as $value)
            {
                $tempGeneratedUrl = generateS3BucketUrl(basename($value['MediaURL']));
                $updateMedia = ['s3buckettempurl'=>$tempGeneratedUrl];
                Media::where('id',$value['id'])->update($updateMedia);
            }
    }
}
