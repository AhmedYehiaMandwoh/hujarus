<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Traits\MorphModelTriggerTrait;

/**
 * @property int $id
 */
class HomePage extends BaseModel
{
    use MorphModelTriggerTrait;

    protected $fillable = [
        'created_by_id', 'updated_by_id', 'deleted_by_id'
    ];
}
