<?php

namespace App\Actions\Testimonials;

use App\Classes\{Abilities, BaseAction};
use App\Enums\ModuleNameEnum;
use Inertia\Inertia;

class TestimonialsCreateAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_TESTIMONIALS_CREATE;

    public function handle()
    {

        $this->breadcrumb([
            ['label' => ModuleNameEnum::getTrans(ModuleNameEnum::TESTIMONIALS), 'url' => route('testimonials.index')],
            ['label' => __('base.create'), 'url' => route('testimonials.create')],
        ]);
        return Inertia::render('Testimonials/TestimonialsFormCreateUpdate');
    }

}
