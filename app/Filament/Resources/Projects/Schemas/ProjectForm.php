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
                                    ->label('Kategorija (piem. Būvniecība, Inženiertīkli)'),
                                TextInput::make('size_lv')
                                    ->label('Platība/Apjoms'),
                                Textarea::make('description_lv')
                                    ->label('Apraksts')
                                    ->rows(3)
                                    ->columnSpanFull(),
                                TextInput::make('location_lv')
                                    ->label('Atrašanās vieta'),
                                TextInput::make('client_lv')
                                    ->label('Pasūtītājs'),
                                Textarea::make('scope_lv')
                                    ->label('Darbu apjoms')
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
                    ->label('URL Slug (Ģenerēti automātiski)')
                    ->required()
                    ->unique(ignoreRecord: true),
                
                FileUpload::make('main_image')
                    ->label('Galvenais attēls')
                    ->image()
                    ->directory('projects/main')
                    ->disk('public') // Explicitly use public disk
                    ->visibility('public')
                    ->helperText('Pieņemtie formāti: .jpg, .jpeg, .png, .webp. Maksimālais izmērs: 10MB.')
                    ->maxSize(10240)
                    ->columnSpanFull(),
                
                FileUpload::make('gallery_images')
                    ->label('Galerijas attēli')
                    ->image()
                    ->multiple()
                    ->directory('projects/gallery')
                    ->disk('public') // Explicitly use public disk
                    ->visibility('public')
                    ->helperText('Pieņemtie formāti: .jpg, .jpeg, .png, .webp. Maksimālais izmērs: 10MB.')
                    ->maxSize(10240)
                    ->columnSpanFull(),

                TextInput::make('sort_order')
                    ->label('Kārtošanas secība')
                    ->numeric()
                    ->default(0),

                \Filament\Forms\Components\Hidden::make('status')
                    ->default('completed'),
            ]);
    }
}
