<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GreetingResource\Pages;
use App\Models\Greeting;
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

class GreetingResource extends Resource
{
    protected static ?string $model = Greeting::class;

    protected static ?string $modelLabel = 'Greating';
    protected static ?string $navigationLabel = 'Greating';
    protected static ?string $navigationIcon = 'heroicon-o-hand-raised';
    protected static ?string $navigationGroup = 'Section';
    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                    TextInput::make('name')
                        ->required(),

                    TextInput::make('firstSlogan')
                        ->required(),

                    TextInput::make('secondSlogan')
                        ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('firstSlogan'),

                TextColumn::make('secondSlogan'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListGreetings::route('/'),
            'edit' => Pages\EditGreeting::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}
