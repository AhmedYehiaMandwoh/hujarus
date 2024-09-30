<?php

namespace App\Actions\HomePage;

use App\Classes\BaseAction;
use App\Models\Branch;
use Inertia\Inertia;

class HomePageAction extends BaseAction
{
    public function handle(Branch $branch)
    {
        return Inertia::render('Frontend/Home');
    }
}
