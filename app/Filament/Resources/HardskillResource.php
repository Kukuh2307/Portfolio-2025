<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HardskillResource\Pages;
use App\Filament\Resources\HardskillResource\RelationManagers;
use App\Models\Hardskill;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HardskillResource extends Resource
{
    protected static ?string $model = Hardskill::class;

    protected static ?string $navigationIcon = 'heroicon-s-sparkles';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('skill_name')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Select::make('category')
                    ->options([
                        'back-end' => 'Back-End',
                        'front-end' => 'Front-End',
                        'design' => 'Design',
                        'network' => 'Network',
                        'cybersecurity' => 'Cybersecurity',
                        'framework' => 'Framework',
                        'library' => 'Library',
                        'operating-system' => 'Operating System',
                        'programming-language' => 'Programming Language',
                        'other' => 'Other',
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('skill_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListHardskills::route('/'),
            'create' => Pages\CreateHardskill::route('/create'),
            'view' => Pages\ViewHardskill::route('/{record}'),
            'edit' => Pages\EditHardskill::route('/{record}/edit'),
        ];
    }
}
