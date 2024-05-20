<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMeResource\Pages;
use App\Models\ContactMe;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;

class ContactMeResource extends Resource
{
    protected static ?string $model = ContactMe::class;

    protected static ?string $modelLabel = 'My Contact';
    protected static ?string $slug = 'contact-me';

    protected static ?string $navigationIcon = 'heroicon-o-phone';
    protected static ?string $navigationLabel = 'Contact Me';
    protected static ?string $navigationGroup = 'Information';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                    PhoneInput::make('phone')
                    ->countryStatePath('phone_country'),

                    TextInput::make('email')
                    ->email()
                    ->required(),

                    TextInput::make('Address')
                    ->required(),
                ])->columns(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('phone'),

                TextColumn::make('email'),

                TextColumn::make('Address'),

            ])
            ->actions([
                EditAction::make(),
            ]);
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactMes::route('/'),
            'edit' => Pages\EditContactMe::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['email'];
    }
}
