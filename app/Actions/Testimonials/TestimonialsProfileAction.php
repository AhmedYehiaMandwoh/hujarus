<?php

namespace App\Actions\Testimonials;

use App\Classes\{Abilities, BaseAction};
use App\Models\Testimonial;
use Inertia\Inertia;

class TestimonialsProfileAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_TESTIMONIALS_MAIN_DATA;

    public function viewMainData(Testimonial $testimonial): \Inertia\Response
    {
        $this->setProfileTab('MainDataTab', $testimonial);
        $data['row'] = $testimonial;
        return Inertia::render('Testimonials/Profile/Index', compact('data'));
    }

    public function viewEdit(Testimonial $testimonial): \Inertia\Response
    {
        $this->setProfileTab('EditTab', $testimonial, __('base.edit'));
        $data = TestimonialsIndexAction::make()->getCreateUpdateData();
        $data['row'] = $testimonial;
        return Inertia::render('Testimonials/Profile/Index', compact('data'));
    }

    public function setProfileTab($tap_component, Testimonial  &$row, $title = null): void
    {
        $main_data_url = ['label' => $row->name, 'url' => route('testimonials.profile.main-data', $row)];

        if ($title) {
            TestimonialsIndexAction::make()->useBreadcrumb([
                $main_data_url,
                ['label' => $title, 'url' => url()->current()]
            ]);
        } else {
            TestimonialsIndexAction::make()->useBreadcrumb([$main_data_url]);
        }

        Inertia::share([
            'profile_row' => $row,
            'tap_component' => $tap_component,
        ]);
    }
}
