<?php

namespace App\Filament\Resources\SoftskillResource\Pages;

use App\Filament\Resources\SoftskillResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSoftskill extends EditRecord
{
    protected static string $resource = SoftskillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
