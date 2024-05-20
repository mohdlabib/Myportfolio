<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutMeResource\Pages;
use App\Models\AboutMe;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AboutMeResource extends Resource
{
    protected static ?string $model = AboutMe::class;

    protected static ?string $modelLabel = 'About';
    protected static ?string $navigationLabel = 'About Me';
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $slug = 'about-me';
    protected static ?string $navigationGroup = 'Section';
    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('photo')
                        ->required(),

                        TextInput::make('name')
                            ->required(),

                        DatePicker::make('age')
                            ->required(),

                        TextInput::make('job')
                            ->required(),

                        TextInput::make('citizenship')
                            ->required(),

                        TextInput::make('residence')
                            ->required(),

                        TextInput::make('url')
                            ->required(),

                        TextArea::make('desc')
                            ->rows(10)
                            ->cols(20)
                            ->required(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')
                    ->circular(),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('age')
                    ->date(),

                TextColumn::make('job'),

            ])
            ->actions([
                EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutMes::route('/'),
            'edit' => Pages\EditAboutMe::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}
