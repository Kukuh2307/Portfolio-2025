<?php

namespace App\Filament\Resources\HardskillResource\Pages;

use App\Filament\Resources\HardskillResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHardskills extends ListRecords
{
    protected static string $resource = HardskillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
