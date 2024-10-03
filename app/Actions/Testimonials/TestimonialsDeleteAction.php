<?php

namespace App\Actions\Testimonials;

use App\Classes\{Abilities, BaseAction};
use App\Models\Testimonial;

class TestimonialsDeleteAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_TESTIMONIALS_DELETE;

    public function handle(Testimonial $testimonial): \Illuminate\Http\RedirectResponse
    {
        if ($testimonial) {

            $this->tryDelete($testimonial);
            return back();
        }
    }
}
