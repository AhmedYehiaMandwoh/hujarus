<?php

namespace App\Actions\Categories;

use App\Classes\{Abilities, BaseAction};
use App\Models\Category;

class CategoriesDeleteAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_CATEGORIES_DELETE;

    public function handle(Category $category): \Illuminate\Http\RedirectResponse
    {
        if ($category) {

            $this->tryDelete($category);
            return back();
        }
    }
}
