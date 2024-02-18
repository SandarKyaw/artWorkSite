<?php

namespace App\Filament\Resources\ArtWorkListResource\Pages;

use App\Filament\Resources\ArtWorkListResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArtWorkList extends EditRecord
{
    protected static string $resource = ArtWorkListResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
