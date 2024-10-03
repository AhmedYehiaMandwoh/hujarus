<?php

namespace App\Actions\Testimonials;

use App\Classes\{Abilities, BaseAction};
use App\Enums\StoragePathEnum;
use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use App\Services\StorageService;

class TestimonialsStoreAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_TESTIMONIALS_CREATE;

    public function handle(TestimonialRequest $request)
    {

        $validated_data = $request->validated();
        if (data_get($validated_data, 'avatar')) {
            $validated_data['avatar'] = StorageService::publicUpload(StoragePathEnum::TESTIMONIALS, $request->file('avatar'));
        }
        Testimonial::query()->create($validated_data);
        $this->makeSuccessSessionMessage();
        return back();
    }
}


