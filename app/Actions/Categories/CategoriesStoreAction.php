<?php

namespace App\Actions\Categories;

use App\Classes\{Abilities, BaseAction};
use App\Enums\StoragePathEnum;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\StorageService;

class CategoriesStoreAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_CATEGORIES_CREATE;

    public function handle(CategoryRequest $request)
    {

        $validated_data = $request->validated();
        if (data_get($validated_data, 'avatar')) {
            $validated_data['avatar'] = StorageService::publicUpload(StoragePathEnum::CATEGORIES, $request->file('avatar'));
        }
        Category::query()->create($validated_data);
        $this->makeSuccessSessionMessage();
        return back();
    }
}


