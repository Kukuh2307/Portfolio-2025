<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                ->image()
                ->required()
                ->maxSize(2048)
                ->directory('projects')
                ->imagePreviewHeight('200px')
                ->placeholder('Upload Project Image')
                ->hint('Maximum file size: 2MB.')
                ->default(null)
                ->dehydrated(fn ($state) => filled($state))
                ->columnSpanFull(),
                Forms\Components\TextInput::make('project_name')
                    ->maxLength(255)
                    ->default(null),
                                Forms\Components\TagsInput::make('technology')
                ->placeholder('Add a technology')
                ->separator(',')
                ->splitKeys(['Tab', ' '])
                ->default([])
                ->afterStateUpdated(function ($state, $set) {
                    // Pastikan state selalu array
                    if (is_string($state)) {
                        $state = array_map('trim', explode(',', $state));
                    }
                    $set('technology', $state);
                })
                ->dehydrateStateUsing(fn ($state) => 
                    is_array($state) ? $state : array_map('trim', explode(',', $state))
                ),
                    Forms\Components\TextInput::make('link')
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->default(null),
                    Forms\Components\RichEditor::make('description')
                        ->columnSpanFull()
                        ->default(null)
                        ->toolbarButtons([
                            'bold',
                            'italic',
                            'underline',
                            'strike',
                            'bulletList',
                            'orderedList',
                            'link',
                            'redo',
                            'undo'
                        ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('project_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('technology')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link')
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
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'view' => Pages\ViewProject::route('/{record}'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
