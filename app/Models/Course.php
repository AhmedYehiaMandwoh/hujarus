<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Services\StorageService;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Traits\{MorphModelTriggerTrait, SearchTrait, ModelDateTextTrait};

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property float $price
 * @property string $instructor
 * @property string $duration
 * @property int $student_count
 * @property bool $is_active
 * @property string|null $avatar
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
        'avatar',
        'category_id', // Added category_id for foreign key relation
    ];

    protected $appends = [
        'avatar_url', 
        'created_at_text', 
        'updated_at_text', 
        'deleted_at_text'
    ];

    /**
     * Accessor for avatar URL.
     */
    protected function avatarUrl(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->avatar ? StorageService::publicUrl($this->avatar) : asset('images/no-image.png'),
        );
    }

    /**
     * Relation to Category model.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Scope for active courses.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
