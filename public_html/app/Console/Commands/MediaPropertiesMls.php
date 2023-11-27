<?php

namespace App\Console\Commands;

use App\Models\Media;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use GuzzleHttp\Client;
class MediaPropertiesMls extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mls:media';

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
        //return Command::SUCCESS;
        $media = Media::select('MediaURL','status','wherfrom','id')
        ->where('status',0)
        //->skip(50)
        ->take(100)
        ->get();
        //dd($media);
            foreach ($media as $value)
            {
                $name = basename($value['MediaURL']);
                $client = new Client();
                $response = $client->get($value['MediaURL']);
                $contents = $response->getBody()->getContents();

                // Compress the image using Intervention Image
                $compressedImage = Image::make($contents)->encode('jpg', 50); // You can adjust the quality (0-100) as per your preference.

                // Get the compressed image contents as a string
                $compressedContents = $compressedImage->getEncoded();

                // Upload the compressed media to S3
                $path = Storage::disk('s3')->put('properties/' . $name, $compressedContents);
                // $path =  Storage::disk('s3')->put('properties/'.$name, file_get_contents('https://s3.amazonaws.com/mlsgrid/images/'.$name));
                // $ch = curl_init($value['MediaURL']);
                // $fp = fopen($path, 'wb');
                // curl_setopt($ch, CURLOPT_FILE, $fp);
                // curl_setopt($ch, CURLOPT_HEADER, 0);
                // curl_exec($ch);
                // curl_close($ch);
                // fclose($fp);
                // $array['status'] = 1;
                // $array['wherfrom'] = 1;
                $updateMedia = ['status'=>1,'wherfrom'=>1];
                Media::where('id',$value['id'])->update($updateMedia);
                // Media::updateOrCreate(
                //     ['MediaKey'=>$value['MediaKey'],'mlsproperties_id'=>$value['mlsproperties_id']],
                //     ['status'=>1,'wherfrom'=>1,'mlsproperties_id'=>$value['mlsproperties_id']]
                // );
            }
    }
}
