<?php

namespace App\Filament\Resources\DeskprestasiResource\Pages;

use App\Filament\Resources\DeskprestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDeskprestasis extends ListRecords
{
    protected static string $resource = DeskprestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
