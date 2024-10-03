<?php

namespace App\Actions\Courses;

use App\Classes\{Abilities, BaseAction};
use App\Models\Course;
use Inertia\Inertia;

class CoursesProfileAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_COURSES_MAIN_DATA;

    public function viewMainData(Course $course): \Inertia\Response
    {
        $this->setProfileTab('MainDataTab', $course);
        $data['row'] = $course;
        return Inertia::render('Courses/Profile/Index', compact('data'));
    }

    public function viewEdit(Course $course): \Inertia\Response
    {
        $this->setProfileTab('EditTab', $course, __('base.edit'));
        $data = CoursesIndexAction::make()->getCreateUpdateData();
        $data['row'] = $course;

        return Inertia::render('Courses/Profile/Index', compact('data'));
    }

    public function setProfileTab($tap_component, Course &$row, $title = null): void
    {
        $main_data_url = ['label' => $row->name, 'url' => route('courses.profile.main-data', $row)];

        if ($title) {
            CoursesIndexAction::make()->useBreadcrumb([
                $main_data_url,
                ['label' => $title, 'url' => url()->current()]
            ]);
        } else {
            CoursesIndexAction::make()->useBreadcrumb([$main_data_url]);
        }

        Inertia::share([
            'profile_row' => $row,
            'tap_component' => $tap_component,
        ]);
    }
}
