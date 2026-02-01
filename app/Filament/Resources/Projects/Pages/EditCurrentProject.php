<?php

namespace App\Filament\Resources\Projects\Pages;

use App\Filament\Resources\Projects\CurrentProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCurrentProject extends EditRecord
{
    protected static string $resource = CurrentProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['status'] = 'in_process';
        return $data;
    }
}
