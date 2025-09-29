<?php

namespace App\Filament\Resources\HomeServices\Schemas;

use Dom\Text;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Fieldset;

class HomeServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                FieldSet::make('Details')
                    ->schema([
                        TextInput::make('name')
                            ->maxLength(255)
                            ->required(),
                        FileUpload::make('thumbnail')
                            ->required()
                            ->image(),
                        TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('IDR'),
                        TextInput::make('duration')
                            ->required()
                            ->numeric()
                            ->suffix('Hours'),
                    ]),
                FieldSet::make('Additional')
                    ->schema([
                       Repeater::make('benefits')
                            ->relationship('benefits')
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                            ]),
                            Textarea::make('about')
                                ->rows(3)
                                ->required(),
                            Select::make('is_popular')
                                ->options([
                                    true => 'Popular',
                                    false => 'Not Popular',
                                ])
                                ->required(),
                            Select::make('category_id')
                                ->relationship('category', 'name')
                                ->searchable()
                                ->preload()
                                ->required(),
                    ]),
            ]);
    }
}
