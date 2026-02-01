<?php

namespace App\Filament\Resources\Projects;

use App\Filament\Resources\Projects\Pages\CreateCurrentProject;
use App\Filament\Resources\Projects\Pages\EditCurrentProject;
use App\Filament\Resources\Projects\Pages\ListCurrentProjects;
// Removed ProjectForm usage
// Removed ProjectsTable usage
use App\Models\Project;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class CurrentProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Aktuālie objekti';

    protected static ?int $navigationSort = 2;

    protected static ?string $modelLabel = 'aktuālais objekts';

    protected static ?string $pluralModelLabel = 'aktuālie objekti';

    protected static ?string $recordTitleAttribute = 'title_lv';

    protected static ?string $slug = 'current-projects';

    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return parent::getEloquentQuery()->where('status', 'in_process');
    }

    public static function form(Schema $schema): Schema
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
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state)))
                                    ->required(),
                                TextInput::make('category_lv')
                                    ->label('Kategorija'),
                                Textarea::make('description_lv')
                                    ->label('Apraksts')
                                    ->rows(3)
                                    ->columnSpanFull(),
                            ]),
                        Tabs\Tab::make('English')
                            ->schema([
                                TextInput::make('title_en')
                                    ->label('Title (English)'),
                                TextInput::make('category_en')
                                    ->label('Category (English)'),
                                Textarea::make('description_en')
                                    ->label('Description (English)')
                                    ->rows(3)
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpanFull(),

                Hidden::make('slug'),

                FileUpload::make('main_image')
                    ->label('Galvenais attēls')
                    ->image()
                    ->directory('projects/main')
                    ->disk('public')
                    ->visibility('public')
                    ->helperText('Pieņemtie formāti: .jpg, .jpeg, .png, .webp. Maksimālais izmērs: 10MB.')
                    ->maxSize(10240)
                    ->required()
                    ->columnSpanFull(),
                
                FileUpload::make('gallery_images')
                    ->label('Galerijas attēli')
                    ->image()
                    ->multiple()
                    ->directory('projects/gallery')
                    ->disk('public')
                    ->visibility('public')
                    ->helperText('Pieņemtie formāti: .jpg, .jpeg, .png, .webp. Maksimālais izmērs: 10MB.')
                    ->maxSize(10240)
                    ->columnSpanFull(),

                 Hidden::make('status')
                    ->default('in_process'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('main_image')
                    ->label('Attēls')
                    ->disk('public'),
                TextColumn::make('title_lv')
                    ->label('Nosaukums')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('category_lv')
                    ->label('Kategorija')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Izveidots')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCurrentProjects::route('/'),
            'create' => CreateCurrentProject::route('/create'),
            'edit' => EditCurrentProject::route('/{record}/edit'),
        ];
    }
}
