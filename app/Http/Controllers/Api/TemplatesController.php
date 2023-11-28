<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Templates;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Aws\S3\S3Client;


class TemplatesController extends Controller
{
    public function agentTemplatePost(Request $request)
    {
       
        $data = $request->validate([
            'name' => 'required',
            'template' => 'required',
            'type' => 'required',
            'user_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rules as needed
        ]);

        $fileName = null;

        if ($request->hasFile('image')) {
            $uploadedFile = $request->file('image');
            $uniqueName = str::uuid() . '.' . $uploadedFile->getClientOriginalExtension();
            Storage::disk('s3')->put('agenttemplates/' . $uniqueName, file_get_contents($uploadedFile), 'public');
            // Set the visibility of the uploaded file to public by    setting ACL
        }

        try {
            $templates = Templates::create([
                'name' => $data['name'],
                'template' => $data['template'],
                'type' => $data['type'],
                'user_id' => $data['user_id'],
                'image' => "https://aris360.s3.us-west-1.amazonaws.com/agenttemplates/". $uniqueName,
            ]);

            return response()->json([
                'Agent Templates' => $templates,
                'message' => 'Your request has been submitted.'
            ]);
        } catch (\Exception $e) {
            // Handle any exceptions that occur during database operations or file uploads
            return response()->json(['error' => 'Failed to upload image or create template. ' . $e->getMessage()], 500);
        }
    }


    public function agentTemplate(Request $request)
    {
        $userId = $request->user_id;
        $templateId = $request->template_id;

        $userTemplates = Templates::agentTemplates($templateId, $userId);


        return response()->json($userTemplates);
    }

    public function destroy(Request $request)
    {
        //dd($request->all());
        
        try {
            $id = $request->templateId;
            $template = Templates::findOrFail($id);

            // Delete the template from the database
            $template->delete();

            // Extract the filename from the URL
            $urlParts = explode('/', $template->image);
            $fileName = end($urlParts);
            // Delete the associated image from S3
            Storage::disk('s3')->delete('agenttemplates/' . ''.$fileName);

            return response()->json(['message' => 'Template and associated image deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete template or image. ' . $e->getMessage()], 500);
        }
    }
}
