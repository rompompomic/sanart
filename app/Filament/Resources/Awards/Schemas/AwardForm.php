<?php

namespace App\Filament\Resources\Awards\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AwardForm
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
                    ])->columnSpanFull(),

                FileUpload::make('image')
                    ->image()
                    ->directory('awards')
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
