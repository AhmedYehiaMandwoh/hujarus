<?php

namespace App\Actions\Vistor;

use App\Classes\BaseAction;
use App\Models\Branch;
use Inertia\Inertia;

class OpenQrForBranchAction extends BaseAction
{
    public function handle(Branch $branch)
    {
        return Inertia::render('Soon');
    }
}
