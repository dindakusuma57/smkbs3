<?php

namespace App\Filament\Resources\KepsekResource\Pages;

use App\Filament\Resources\KepsekResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKepseks extends ListRecords
{
    protected static string $resource = KepsekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
