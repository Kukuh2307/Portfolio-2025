<?php

namespace App\Filament\Resources\HardskillResource\Pages;

use App\Filament\Resources\HardskillResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHardskill extends EditRecord
{
    protected static string $resource = HardskillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
    // redirect
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
