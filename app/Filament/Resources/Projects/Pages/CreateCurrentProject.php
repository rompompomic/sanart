<?php

namespace App\Filament\Resources\Projects\Pages;

use App\Filament\Resources\Projects\CurrentProjectResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCurrentProject extends CreateRecord
{
    protected static string $resource = CurrentProjectResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['status'] = 'in_process';
        return $data;
    }
}
