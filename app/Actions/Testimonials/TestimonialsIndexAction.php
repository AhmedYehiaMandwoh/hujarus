<?php

namespace App\Actions\Testimonials;


use App\Classes\{Abilities, BaseAction};
use App\Enums\{IsActiveEnum, ModuleNameEnum, IconsEnum};
use App\Models\Testimonial;
use Inertia\Inertia;

class TestimonialsIndexAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_TESTIMONIALS_INDEX;

    public function handle(): \Inertia\Response|\Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        $this->allowSearch();
        $this->useBreadcrumb();
        $query = Testimonial::query()->latest('id')->search(['title']);
        if ($this->requestIsExport(Abilities::M_TESTIMONIALS_INDEX_EXPORT)) {
            return $this->exportExcel($query->get(), ['id','title', 'description', 'is_active', 'created_at_text'], 'testimonials');
        }
        $data = $query->paginate($this->getPaginateLength());
        return Inertia::render('Testimonials/Index', ['data' => $data, ...$this->getCreateUpdateData()]);
    }

    public function getCreateUpdateData(): array
    {

        return [
            'form_data' => [
                'is_active' => IsActiveEnum::getOptionsData(),
            ]
        ];
    }

    public function useBreadcrumb($append_breadcrumb = []): void
    {
        $this->breadcrumb([
            ['label' => ModuleNameEnum::getTrans(ModuleNameEnum::TESTIMONIALS), 'url' => route('testimonials.index')],
            ...$append_breadcrumb
        ]);
    }


}
