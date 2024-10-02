<?php

namespace App\Actions\EnrollClients;

use App\Classes\{Abilities, BaseAction};
use App\Enums\{IsActiveEnum, ModuleNameEnum, IconsEnum};
use App\Models\EnrollOrder;
use Inertia\Inertia;

class EnrollClientsIndexAction extends BaseAction
{
    protected Abilities $ability = Abilities::M_ENROLCLIENTS_INDEX;

    public function handle(): \Inertia\Response|\Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        $this->allowSearch();
        $this->useBreadcrumb();

        // Perform the query with search functionality
        $query = EnrollOrder::query()->latest('id')->search(['phone_number']);
        
        // Handle export functionality
        if ($this->requestIsExport(Abilities::M_ENROLCLIENTS_INDEX_EXPORT)) {
            return $this->exportExcel($query->get(), ['id', 'phone_number', 'created_at_text'], 'EnrollClients');
        }
        
        // Paginate the results
        $data = $query->paginate($this->getPaginateLength());

        // Render the Inertia response with the data
        return Inertia::render('EnrollClients/Index', ['data' => $data]);
    }

    public function useBreadcrumb($append_breadcrumb = []): void
    {
        $this->breadcrumb([
            ['label' => ModuleNameEnum::getTrans(ModuleNameEnum::ENROLCLIENTS), 'url' => route('enrollClients.index')],
            ...$append_breadcrumb
        ]);
    }
}
