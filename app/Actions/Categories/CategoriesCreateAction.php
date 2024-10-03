<?php

namespace App\Actions\Categories;

use App\Classes\{Abilities, BaseAction};
use App\Enums\ModuleNameEnum;
use Inertia\Inertia;

class CategoriesCreateAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_CATEGORIES_CREATE;

    public function handle()
    {

        $this->breadcrumb([
            ['label' => ModuleNameEnum::getTrans(ModuleNameEnum::CATEGORIES), 'url' => route('categories.index')],
            ['label' => __('base.create'), 'url' => route('categories.create')],
        ]);
        $icons = CategoriesIndexAction::make()->getCreateUpdateData()['form_data']['icons'];
        return Inertia::render('Categories/CategoriesFormCreateUpdate', compact('icons'));
    }

}
