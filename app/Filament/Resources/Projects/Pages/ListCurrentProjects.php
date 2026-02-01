<?php

namespace App\Filament\Resources\Projects\Pages;

use App\Filament\Resources\Projects\CurrentProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCurrentProjects extends ListRecords
{
    protected static string $resource = CurrentProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
