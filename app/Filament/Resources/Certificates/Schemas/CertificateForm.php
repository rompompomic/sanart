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
                    ->label('Priekšskatījuma Attēls (Preview)')
                    ->image()
                    ->directory('certificates/previews')
                    ->disk('public')
                    ->visibility('public')
                    ->helperText('Pieņemtie formāti: .jpg, .jpeg, .png, .webp. Maksimālais izmērs: 10MB.')
                    ->maxSize(10240)
                    ->required(),

                FileUpload::make('file_path')
                    ->label('Sertifikāta fails (PDF)')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('certificates/files')
                    ->disk('public')
                    ->visibility('public')
                    ->helperText('Formāts: .pdf. Ja nav pievienots, tiks atvērts attēls.')
                    ->maxSize(10240),

                TextInput::make('sort_order')
                    ->label('Kārtošanas secība')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
