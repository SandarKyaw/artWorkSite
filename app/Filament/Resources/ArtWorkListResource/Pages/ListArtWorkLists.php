<?php

namespace App\Filament\Resources\ArtWorkListResource\Pages;

use App\Filament\Resources\ArtWorkListResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArtWorkLists extends ListRecords
{
    protected static string $resource = ArtWorkListResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

}
