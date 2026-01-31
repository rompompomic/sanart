<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class ProjectForm
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
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', \Illuminate\Support\Str::slug($state)))
                                    ->required(),
                                TextInput::make('category_lv')
                                    ->label('Kategorija (piem. Buvnieciba, Inzeniertikli)'),
                                TextInput::make('size_lv')
                                    ->label('Platiba/Apjoms'),
                                Textarea::make('description_lv')
                                    ->label('Apraksts')
                                    ->rows(3)
                                    ->columnSpanFull(),
                                TextInput::make('location_lv')
                                    ->label('Atrasanas vieta'),
                                TextInput::make('client_lv')
                                    ->label('Pasutitajs (Client)'),
                                Textarea::make('scope_lv')
                                    ->label('Darbu apjoms (Scope of Work)')
                                    ->rows(2),
                            ]),
                        Tabs\Tab::make('English')
                            ->schema([
                                TextInput::make('title_en')
                                    ->label('Title (English)'),
                                TextInput::make('category_en')
                                    ->label('Category (English)'),
                                TextInput::make('size_en')
                                    ->label('Size (English)'),
                                Textarea::make('description_en')
                                    ->label('Description (English)')
                                    ->rows(3)
                                    ->columnSpanFull(),
                                TextInput::make('location_en')
                                    ->label('Location (English)'),
                                TextInput::make('client_en')
                                    ->label('Client (English)'),
                                Textarea::make('scope_en')
                                    ->label('Scope of Work (English)')
                                    ->rows(2),
                            ]),
                    ])
                    ->columnSpanFull(),

                TextInput::make('year')
                    ->label('Gads (Year)')
                    ->numeric(),
                
                TextInput::make('slug')
                    ->label('URL Slug (Genereti automatiski)')
                    ->required()
                    ->unique(ignoreRecord: true),
                
                Select::make('status')
                    ->label('Statuss')
                    ->options([
                        'completed' => 'Pabeigts (Completed)',
                        'in_process' => 'Procesa (In Process)',
                        'planned' => 'Planots (Planned)',
                    ])
                    ->default('completed')
                    ->required(),
                
                FileUpload::make('main_image')
                    ->label('Galvenais attels')
                    ->image()
                    ->directory('projects/main')
                    ->disk('public')
                    ->helperText('Pienemtie formati: .jpg, .jpeg, .png, .webp. Maksimalais izmers: 10MB.')
                    ->maxSize(10240)
                    ->columnSpanFull(),
                
                FileUpload::make('gallery_images')
                    ->label('Galerijas atteli')
                    ->image()
                    ->multiple()
                    ->directory('projects/gallery')
                    ->disk('public')
                    ->helperText('Pienemtie formati: .jpg, .jpeg, .png, .webp. Maksimalais izmers: 10MB.')
                    ->maxSize(10240)
                    ->columnSpanFull(),

                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
