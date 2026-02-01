<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Partnera nosaukums')
                    ->required(),
                FileUpload::make('logo')
                    ->image()
                    ->directory('partners')
                    ->disk('public')
                    ->visibility('public')
                    ->helperText('Pieņemtie formāti: .jpg, .jpeg, .png, .webp. Maksimālais izmērs: 10MB.')
                    ->maxSize(10240)
                    ->required(),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
