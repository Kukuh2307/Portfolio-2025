<?php

namespace App\Filament\Resources\SoftskillResource\Pages;

use App\Filament\Resources\SoftskillResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSoftskill extends ViewRecord
{
    protected static string $resource = SoftskillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
