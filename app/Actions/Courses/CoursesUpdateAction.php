<?php

namespace App\Actions\Courses;

use App\Classes\{Abilities, BaseAction};
use App\Enums\StoragePathEnum;
use App\Http\Requests\CourseRequest;
use App\Models\course;
use App\Services\StorageService;

class CoursesUpdateAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_COURSES_UPDATE;

    public function handle(course $course, CourseRequest $request)
    {
        $validated_data = $request->validated();
        if (data_get($validated_data, 'avatar')) {
            $validated_data['avatar'] = StorageService::publicUpload(StoragePathEnum::COURSES, $request->file('avatar'), oldFileToDeletePath: $course->avatar);
        } else {
            unset($validated_data['avatar']);
        }

        $course->update($validated_data);
        $this->makeSuccessSessionMessage();
        return back();
    }
}
