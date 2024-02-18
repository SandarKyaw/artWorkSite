<?php

namespace App\Filament\Resources\ArtWorkListResource\Pages;

use App\Filament\Resources\ArtWorkListResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArtWorkList extends CreateRecord
{
    protected static string $resource = ArtWorkListResource::class;

   protected function getRedirectUrl():string{
     return route(name: 'filament.resources.art-work-lists.index');
   }
}
