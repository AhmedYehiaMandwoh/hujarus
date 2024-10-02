<?php

namespace App\Actions\Courses;

use App\Classes\{Abilities, BaseAction};
use App\Models\Course;

class CoursesDeleteAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_COURSES_DELETE;

    public function handle(Course $course): \Illuminate\Http\RedirectResponse
    {
        if ($course) {

            $this->tryDelete($course);
            return back();
        }
    }
}
