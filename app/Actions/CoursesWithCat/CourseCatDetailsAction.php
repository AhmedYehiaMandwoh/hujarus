<?php

namespace App\Actions\CoursesWithCat;

use App\Classes\BaseAction;
use App\Models\{Course, Category}; // Change from Service to Category
use Inertia\Inertia;

class CourseCatDetailsAction extends BaseAction
{
    public function handle($slug,$id)
    {
        // Fetch categories from the database
        $category = Category::where('slug', $slug)->where('is_active', true)->first();
        $course = Course::where('category_id', $category->id)
        ->where('id', $id)
        ->where('is_active', true)
        ->first();
        // Return categories to home.vue as props
        return Inertia::render('Frontend/Courses/Details', [
            'category' => $category,
            'course' => $course
        ]);
    }
}
