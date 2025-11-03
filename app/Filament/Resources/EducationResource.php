<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducationResource\Pages;
use App\Filament\Resources\EducationResource\RelationManagers;
use App\Models\Education;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static ?string $navigationIcon = 'heroicon-m-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('degree')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('institution')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('major')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\DatePicker::make('year')
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('degree')
                    ->searchable(),
                Tables\Columns\TextColumn::make('institution')
                    ->searchable(),
                Tables\Columns\TextColumn::make('major')
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->searchable(),
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
            'index' => Pages\ListEducation::route('/'),
            'create' => Pages\CreateEducation::route('/create'),
            'view' => Pages\ViewEducation::route('/{record}'),
            'edit' => Pages\EditEducation::route('/{record}/edit'),
        ];
    }
}
