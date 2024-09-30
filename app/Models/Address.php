<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\{MorphModelTriggerTrait, SearchTrait, ModelDateTextTrait};

class Address extends Model
{
    use MorphModelTriggerTrait, SearchTrait,
    ModelDateTextTrait;

        protected $table = "addresses";
        protected $fillable = [
            'client_id',
            'name',
            'type',
            'full_address',
            'phone_number',
        ];


        protected $appends = [
            'created_at_text', 'updated_at_text', 'deleted_at_text'
        ];

    // Define relationships or additional methods as needed
}
