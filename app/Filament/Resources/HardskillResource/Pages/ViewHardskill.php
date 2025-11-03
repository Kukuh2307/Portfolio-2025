<?php

namespace App\Filament\Resources\HardskillResource\Pages;

use App\Filament\Resources\HardskillResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewHardskill extends ViewRecord
{
    protected static string $resource = HardskillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
