<?php

namespace App\Actions\Enroll;

use App\Classes\BaseAction;
use Inertia\Inertia;

class EnrollIndexAction extends BaseAction
{
    public function handle()
    {

        // Return categories to home.vue as props
        return Inertia::render('Frontend/Enroll');
    }
}
