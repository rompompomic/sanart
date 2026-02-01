<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;



class ServiceForm
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
                                TextInput::make('subtitle_lv')
                                    ->label('Apakšvirsraksts'),
                                Textarea::make('description_lv')
                                    ->label('Apraksts')
                                    ->rows(3)
                                    ->columnSpanFull(),
                                Repeater::make('features_lv')
                                    ->label('Iezīmes (Bullets)')
                                    ->simple(
                                        TextInput::make('text')->label('Teksts')
                                    ),
                            ]),
                        Tabs\Tab::make('English')
                            ->schema([
                                TextInput::make('title_en')
                                    ->label('Title (English)'),
                                TextInput::make('subtitle_en')
                                    ->label('Subtitle (English)'),
                                Textarea::make('description_en')
                                    ->label('Description (English)')
                                    ->rows(3)
                                    ->columnSpanFull(),
                                Repeater::make('features_en')
                                    ->label('Features (Bullets)')
                                    ->simple(
                                        TextInput::make('text')->label('Text')
                                    ),
                            ]),
                    ])
                    ->columnSpanFull(),

                FileUpload::make('image_path')
                    ->label('Attēls')
                    ->image()
                    ->directory('services')
                    ->disk('public')
                    ->helperText('Formāti: .jpg, .jpeg, .png, .webp. Maksimālais izmērs: 10MB.')
                    ->maxSize(10240)
                    ->columnSpanFull(),
                
                FileUpload::make('icon')
                    ->label('Ikona (SVG)')
                    ->acceptedFileTypes(['image/svg+xml'])
                    ->directory('services/icons')
                    ->disk('public')
                    ->helperText('Formāti: .svg. Maksimālais izmērs: 10MB.')
                    ->maxSize(10240)
                    ->columnSpanFull(),

                TextInput::make('sort_order')
                    ->label('Secība')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
