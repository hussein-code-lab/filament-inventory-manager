<?php

namespace App\Filament\Resources\Stores\Schemas;

use App\Models\Product;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StoreForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Main info')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('location'),
                    ]),

                Section::make('products')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        Repeater::make('productStores')
                            ->relationship()
                            ->columns(2)
                            ->columnSpanFull()
                            ->schema([
                                Select::make('product_id')
                                    ->label('product')
                                    ->options(Product::pluck('name', 'id'))
                                    ->required()
                                    ->searchable()
                                    ->preload()
                                    ->distinct()
                                    ->disableOptionsWhenSelectedInSiblingRepeaterItems(),
                                TextInput::make('quantity')
                                    ->label('quantity')
                                    ->numeric()
                                    ->minValue(0)
                                    ->default(0)
                                    ->required(),
                            ])
                            ->cloneable()
                    ])
            ]);
    }
}
