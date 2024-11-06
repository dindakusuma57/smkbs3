<?php

namespace App\Filament\Resources\DeskeskulResource\Pages;

use App\Filament\Resources\DeskeskulResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDeskeskuls extends ListRecords
{
    protected static string $resource = DeskeskulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
