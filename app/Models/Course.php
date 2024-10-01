<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Services\StorageService;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Traits\{MorphModelTriggerTrait, SearchTrait, ModelDateTextTrait};

/**
 * @property int $id
 */
class Course extends BaseModel
{
    use MorphModelTriggerTrait, SearchTrait, ModelDateTextTrait;

    protected $fillable = [
        'title', 
        'description', 
        'price', 
        'instructor', 
        'duration', 
        'student_count', 
        'is_active', 
        'avatar' // If you want to include an image for the course
    ];

    protected $appends = [
        'avatar_url', 
        'created_at_text', 
        'updated_at_text', 
        'deleted_at_text'
    ];

    protected function avatarUrl(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->avatar ? StorageService::publicUrl($this->avatar) : asset('images/no-image.png');
            },
        );
    }
}
