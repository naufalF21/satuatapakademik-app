<?php

namespace App\Filament\Resources\SiteInformationResource\Pages;

use App\Filament\Resources\SiteInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiteInformation extends ListRecords
{
    protected static string $resource = SiteInformationResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }
}
