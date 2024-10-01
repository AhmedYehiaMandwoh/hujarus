<?php

namespace App\Actions\Categories;

use App\Classes\{Abilities, BaseAction};
use App\Enums\StoragePathEnum;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\StorageService;

class CategoriesUpdateAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_CATEGORIES_UPDATE;

    public function handle(Category $category, CategoryRequest $request)
    {
        $validated_data = $request->validated();
        if (data_get($validated_data, 'avatar')) {
            $validated_data['avatar'] = StorageService::publicUpload(StoragePathEnum::CATEGORIES, $request->file('avatar'), oldFileToDeletePath: $category->avatar);
        } else {
            unset($validated_data['avatar']);
        }

        $category->update($validated_data);
        $this->makeSuccessSessionMessage();
        return back();
    }
}
