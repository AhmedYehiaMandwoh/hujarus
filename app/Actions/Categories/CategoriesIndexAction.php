<?php

namespace App\Actions\Categories;


use App\Classes\{Abilities, BaseAction};
use App\Enums\{IsActiveEnum, ModuleNameEnum, IconsEnum};
use App\Models\Category;
use Inertia\Inertia;

class CategoriesIndexAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_CATEGORIES_INDEX;

    public function handle(): \Inertia\Response|\Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        $this->allowSearch();
        $this->useBreadcrumb();
        $query = Category::query()->latest('id')->search(['title']);
        if ($this->requestIsExport(Abilities::M_CATEGORIES_INDEX_EXPORT)) {
            return $this->exportExcel($query->get(), ['id','title', 'description', 'is_active', 'created_at_text'], 'categories');
        }
        $data = $query->paginate($this->getPaginateLength());
        return Inertia::render('Categories/Index', ['data' => $data, ...$this->getCreateUpdateData()]);
    }

    public function getCreateUpdateData(): array
    {

        return [
            'form_data' => [
                'is_active' => IsActiveEnum::getOptionsData(),
                'icons' => IconsEnum::getOptionsData(),
            ]
        ];
    }

    public function useBreadcrumb($append_breadcrumb = []): void
    {
        $this->breadcrumb([
            ['label' => ModuleNameEnum::getTrans(ModuleNameEnum::CATEGORIES), 'url' => route('categories.index')],
            ...$append_breadcrumb
        ]);
    }


}
