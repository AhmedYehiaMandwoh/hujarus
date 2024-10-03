<?php

namespace App\Actions\HomePage;

use App\Classes\BaseAction;
use App\Models\{Category, Testimonial}; // Change from Service to Category
use Inertia\Inertia;

class HomePageAction extends BaseAction
{
    public function handle()
    {
        // Fetch categories from the database
        $categories = Category::where('is_active', true)->get();
        $testimonialsData = Testimonial::where('is_active', true)->get();

        // Return categories to home.vue as props
        return Inertia::render('Frontend/Home', [
            'categories' => $categories,
            'testimonialsData' => $testimonialsData
        ]);
    }
}
