<?php

namespace App\Filament\Resources\OrderListResource\Pages;

use App\Filament\Resources\OrderListResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrderLists extends ListRecords
{
    protected static string $resource = OrderListResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
