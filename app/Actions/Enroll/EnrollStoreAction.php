<?php

namespace App\Actions\Enroll;

use App\Classes\BaseAction;
use Inertia\Inertia;
use App\Http\Requests\EnrollRequest;
use App\Models\EnrollOrder;

class EnrollStoreAction extends BaseAction
{
    public function handle(EnrollRequest $request)
    {
        $validated_data = $request->validated();
        EnrollOrder::query()->create($validated_data);
        $this->makeSuccessSessionMessage();
        return back();
    }
}
