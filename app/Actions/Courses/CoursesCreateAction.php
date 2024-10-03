<?php

namespace App\Actions\Courses;

use App\Classes\{Abilities, BaseAction};
use App\Enums\ModuleNameEnum;
use Inertia\Inertia;

class CoursesCreateAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_COURSES_CREATE;

    public function handle()
    {

        $this->breadcrumb([
            ['label' => ModuleNameEnum::getTrans(ModuleNameEnum::COURSES), 'url' => route('courses.index')],
            ['label' => __('base.create_sponsor'), 'url' => route('courses.create')],
        ]);
        $categories = CoursesIndexAction::make()->getCreateUpdateData()['form_data']['categories'];
        return Inertia::render('Courses/CoursesFormCreateUpdate', compact('categories'));
    }

}
