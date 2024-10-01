<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Services\StorageService;
use App\Traits\MorphModelTriggerTrait;
use App\Traits\SearchTrait;
use App\Traits\ModelDateTextTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Category extends BaseModel
{
    use MorphModelTriggerTrait, SearchTrait, ModelDateTextTrait;

    protected $fillable = [
        'title',
        'description',
        'avatar',
        'is_active', // Added to allow toggling of category status
        'created_by_id',
        'updated_by_id',
        'deleted_by_id',
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
