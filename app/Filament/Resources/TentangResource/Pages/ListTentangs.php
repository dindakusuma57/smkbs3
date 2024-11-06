<?php

namespace App\Filament\Resources\TentangResource\Pages;

use App\Filament\Resources\TentangResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTentangs extends ListRecords
{
    protected static string $resource = TentangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
