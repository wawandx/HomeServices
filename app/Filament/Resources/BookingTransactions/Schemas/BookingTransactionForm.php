<?php

namespace App\Filament\Resources\BookingTransactions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BookingTransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('booking_trx_id')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('started_time')
                    ->required(),
                DatePicker::make('schedule_at')
                    ->required(),
                TextInput::make('proof')
                    ->required(),
                TextInput::make('post_code')
                    ->required(),
                TextInput::make('city')
                    ->required(),
                TextInput::make('address')
                    ->required(),
                TextInput::make('subtotal')
                    ->required()
                    ->numeric(),
                TextInput::make('total_amount')
                    ->required()
                    ->numeric(),
                TextInput::make('total_tax_amount')
                    ->required()
                    ->numeric(),
                Toggle::make('is_paid')
                    ->required(),
            ]);
    }
}
