<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Traits\MorphModelTriggerTrait;

/**
 * Class EnrollOrder
 *
 * @property int $id
 * @property int $created_by_id
 * @property int|null $updated_by_id
 * @property int|null $deleted_by_id
 * @property string $parents_name
 * @property string $students_name
 * @property int $students_age
 * @property string $course_needed
 * @property string $phone_number
 * @property string $email
 * @property string $country
 * @property array $days
 * @property string $time_from
 * @property string $time_to
 * @property string $time_zone
 * @property string $class_duration
 * @property string $preferred_teacher
 * @property string|null $goals
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class EnrollOrder extends BaseModel
{
    use MorphModelTriggerTrait;

    protected $fillable = [
        'created_by_id', 
        'updated_by_id', 
        'deleted_by_id',
        'parent_name',
        'student_name',
        'student_age',
        'course_needed',
        'phone_number',
        'email',
        'country',
        'days',
        'time_from',
        'time_to',
        'time_zone',
        'class_duration',
        'preferred_teacher',
        'goals',
    ];

    protected $casts = [
        'days' => 'array', // Assuming days will be stored as a JSON array
        'created_at' => 'datetime:Y-m-d H:i:s', // Formats created_at when accessed
        'updated_at' => 'datetime:Y-m-d H:i:s', // Formats updated_at when accessed
    ];
}
