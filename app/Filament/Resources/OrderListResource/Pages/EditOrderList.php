<?php

namespace App\Filament\Resources\OrderListResource\Pages;

use App\Filament\Resources\OrderListResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrderList extends EditRecord
{
    protected static string $resource = OrderListResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
