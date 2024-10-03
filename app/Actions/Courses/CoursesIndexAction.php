<?php

namespace App\Actions\Courses;


use App\Classes\{Abilities, BaseAction};
use App\Enums\{IsActiveEnum, ModuleNameEnum, IconsEnum};
use App\Models\{Course, Category};
use Inertia\Inertia;

class CoursesIndexAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_COURSES_INDEX;

    public function handle(): \Inertia\Response|\Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        $this->allowSearch();
        $this->useBreadcrumb();
        $query = Course::query()->latest('id')->search(['title']);
        if ($this->requestIsExport(Abilities::M_COURSES_INDEX_EXPORT)) {
            return $this->exportExcel($query->get(), ['id','title', 'description', 'is_active', 'created_at_text'], 'courses');
        }
        $data = $query->paginate($this->getPaginateLength());
        return Inertia::render('Courses/Index', ['data' => $data, ...$this->getCreateUpdateData()]);
    }

    public function getCreateUpdateData(): array
    {

        return [
            'form_data' => [
                'is_active' => IsActiveEnum::getOptionsData(),
                'categories' => Category::where('is_active', true)->get(),
            ]
        ];
    }

    public function useBreadcrumb($append_breadcrumb = []): void
    {
        $this->breadcrumb([
            ['label' => ModuleNameEnum::getTrans(ModuleNameEnum::COURSES), 'url' => route('courses.index')],
            ...$append_breadcrumb
        ]);
    }


}
