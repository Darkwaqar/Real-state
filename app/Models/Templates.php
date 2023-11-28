<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Templates extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'templates';
    protected $fillable = [
        'name',
        'template',
        'type',
        'deleted',
        'deleted_at',
        'user_id',
        'created_at',
        'updated_at',
        'image'
    ];

    public static function agentTemplates($templateId,$userId){
        if (!empty($templateId) && !empty($userId)) {
            $userTemplates = Templates::where('id', $templateId)->where('user_id', $userId)
            ->get()
            ->toArray();
            
        } elseif (!empty($templateId)) {
            // If only template_id is provided
            $userTemplates = Templates::where('id', $templateId)
                ->get()
                ->toArray();
        } elseif (!empty($userId)) {
            // If only user_id is provided
            $userTemplates = User::getUserTemplates($userId);
        } else {
            // If neither template_id nor user_id is provided
            $userTemplates =  response()->json(['message' => 'No user or template defined']);
        }
       

                return $userTemplates;
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
