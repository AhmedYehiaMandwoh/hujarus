<?php

namespace App\Actions\COURSES;

use App\Classes\{Abilities, BaseAction};
use App\Enums\StoragePathEnum;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Services\StorageService;

class CoursesStoreAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_COURSES_CREATE;

    public function handle(CourseRequest $request)
    {

        $validated_data = $request->validated();
        if (data_get($validated_data, 'avatar')) {
            $validated_data['avatar'] = StorageService::publicUpload(StoragePathEnum::COURSES, $request->file('avatar'));
        }
        Course::query()->create($validated_data);
        $this->makeSuccessSessionMessage();
        return back();
    }
}


