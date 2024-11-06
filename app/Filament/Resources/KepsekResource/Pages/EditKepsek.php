<?php

namespace App\Filament\Resources\KepsekResource\Pages;

use App\Filament\Resources\KepsekResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKepsek extends EditRecord
{
    protected static string $resource = KepsekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
