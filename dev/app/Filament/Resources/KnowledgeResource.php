<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KnowledgeResource\Pages;
use App\Models\Knowledge;
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

class KnowledgeResource extends Resource
{
    protected static ?string $model = Knowledge::class;

    protected static ?string $slug = 'knowledge';

    protected static ?string $navigationGroup = 'Section';
    protected static ?int $navigationSort = 5;
    protected static ?string $navigationIcon = 'heroicon-o-cpu-chip';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                    TextInput::make('know')
                        ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('know'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKnowledges::route('/'),
            'create' => Pages\CreateKnowledge::route('/create'),
            'edit' => Pages\EditKnowledge::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [];
    }
}
