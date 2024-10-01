<?php

namespace App\Actions\Categories;

use App\Classes\{Abilities, BaseAction};
use App\Models\Category;
use Inertia\Inertia;

class CategoriesProfileAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_CATEGORIES_MAIN_DATA;

    public function viewMainData(Category $Category): \Inertia\Response
    {
        $this->setProfileTab('MainDataTab', $Category);
        $data['row'] = $Category;
        return Inertia::render('Categories/Profile/Index', compact('data'));
    }

    public function viewEdit(Category $Category): \Inertia\Response
    {
        $this->setProfileTab('EditTab', $Category, __('base.edit'));
        $data = CategoriesIndexAction::make()->getCreateUpdateData();
        $data['row'] = $Category;
        return Inertia::render('Categories/Profile/Index', compact('data'));
    }

    public function setProfileTab($tap_component, Category &$row, $title = null): void
    {
        $main_data_url = ['label' => $row->name, 'url' => route('categories.profile.main-data', $row)];

        if ($title) {
            CategoriesIndexAction::make()->useBreadcrumb([
                $main_data_url,
                ['label' => $title, 'url' => url()->current()]
            ]);
        } else {
            CategoriesIndexAction::make()->useBreadcrumb([$main_data_url]);
        }

        Inertia::share([
            'profile_row' => $row,
            'tap_component' => $tap_component,
        ]);
    }
}
