<?php

namespace App\Actions\HomePage;

use App\Classes\BaseAction;
use App\Models\Category; // Change from Service to Category
use Inertia\Inertia;

class HomePageAction extends BaseAction
{
    public function handle()
    {
        // Fetch categories from the database
        $categories = Category::all();

        // Return categories to home.vue as props
        return Inertia::render('Frontend/Home', [
            'categories' => $categories
        ]);
    }
}
