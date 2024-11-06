<?php

namespace App\Filament\Resources\DeskeskulResource\Pages;

use App\Filament\Resources\DeskeskulResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDeskeskul extends EditRecord
{
    protected static string $resource = DeskeskulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
