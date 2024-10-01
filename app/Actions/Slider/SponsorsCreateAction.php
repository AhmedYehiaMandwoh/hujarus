<?php

namespace App\Actions\Slider;

use App\Classes\{Abilities, BaseAction};
use App\Enums\ModuleNameEnum;
use Inertia\Inertia;

class SliderCreateAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_Slider_CREATE;

    public function handle()
    {

        $this->breadcrumb([
            ['label' => ModuleNameEnum::getTrans(ModuleNameEnum::Slider), 'url' => route('Slider.index')],
            ['label' => __('base.create_sponsor'), 'url' => route('Slider.create')],
        ]);
        return Inertia::render('Slider/SliderFormCreateUpdate');
    }

}
