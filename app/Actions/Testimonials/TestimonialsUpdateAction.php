<?php

namespace App\Actions\Testimonials;

use App\Classes\{Abilities, BaseAction};
use App\Enums\StoragePathEnum;
use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use App\Services\StorageService;

class TestimonialsUpdateAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_TESTIMONIALS_UPDATE;

    public function handle(Testimonial $testimonial, TestimonialRequest $request)
    {
        $validated_data = $request->validated();
        if (data_get($validated_data, 'avatar')) {
            $validated_data['avatar'] = StorageService::publicUpload(StoragePathEnum::TESTIMONIALS, $request->file('avatar'), oldFileToDeletePath: $testimonial->avatar);
        } else {
            unset($validated_data['avatar']);
        }

        $testimonial->update($validated_data);
        $this->makeSuccessSessionMessage();
        return back();
    }
}
