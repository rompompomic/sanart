<?php

namespace App\Filament\Resources\Certificates\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CertificateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Translations')
                    ->tabs([
                        Tabs\Tab::make('Latviski')
                            ->schema([
                                TextInput::make('title_lv')
                                    ->label('Nosaukums')
                                    ->required(),
                            ]),
                        Tabs\Tab::make('English')
                            ->schema([
                                TextInput::make('title_en')
                                    ->label('Title (English)'),
                            ]),
                    ])
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->label('Prieksskatijuma Attels (Preview)')
                    ->image()
                    ->directory('certificates/previews')
                    ->disk('public')
                    ->helperText('Pienemtie formati: .jpg, .jpeg, .png, .webp. Maksimalais izmers: 10MB.')
                    ->maxSize(10240)
                    ->required(),

                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
