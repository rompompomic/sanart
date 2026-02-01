<?php

namespace App\Filament\Resources\Vacancies\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Schemas\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class VacancyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Translations')
                    ->tabs([
                        Tabs\Tab::make('Latviski')
                            ->schema([
                                TextInput::make('position_lv')
                                    ->label('Amats (Nosaukums)')
                                    ->required(),
                                
                                Textarea::make('description_lv')
                                    ->label('Apraksts')
                                    ->rows(3)
                                    ->columnSpanFull(),

                                Repeater::make('requirements_lv')
                                    ->label('Prasības (Bulletrs)')
                                    ->simple(
                                        TextInput::make('text')->label('Prasība')
                                    )
                                    ->columnSpanFull(),

                                Repeater::make('benefits_lv')
                                    ->label('Mēs piedāvājam (Bulletrs)')
                                    ->simple(
                                        TextInput::make('text')->label('Piedāvājums')
                                    )
                                    ->columnSpanFull(),

                                TextInput::make('profession_lv')->label('Profesija'),
                                TextInput::make('education_lv')->label('Izglītība'),
                                TextInput::make('languages_lv')->label('Valodas'),
                                TextInput::make('working_days_lv')->label('Darba dienas'),
                                TextInput::make('working_time_lv')->label('Darba laiks'),
                                TextInput::make('address_lv')->label('Adrese'),
                            ]),
                        Tabs\Tab::make('English')
                            ->schema([
                                TextInput::make('position_en')
                                    ->label('Position (Title)'),
                                
                                Textarea::make('description_en')
                                    ->label('Description')
                                    ->rows(3)
                                    ->columnSpanFull(),

                                Repeater::make('requirements_en')
                                    ->label('Requirements (Bullets)')
                                    ->simple(
                                        TextInput::make('text')->label('Requirement')
                                    )
                                    ->columnSpanFull(),

                                Repeater::make('benefits_en')
                                    ->label('We Offer (Bullets)')
                                    ->simple(
                                        TextInput::make('text')->label('Benefit')
                                    )
                                    ->columnSpanFull(),

                                TextInput::make('profession_en')->label('Profession'),
                                TextInput::make('education_en')->label('Education'),
                                TextInput::make('languages_en')->label('Languages'),
                                TextInput::make('working_days_en')->label('Working Days'),
                                TextInput::make('working_time_en')->label('Working Hours'),
                                TextInput::make('address_en')->label('Address'),
                            ]),
                    ])
                    ->columnSpanFull(),
                
                Toggle::make('is_active')
                    ->label('Aktīvs')
                    ->default(true),
                    
                TextInput::make('sort_order')
                    ->label('Kārtošanas secība')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
