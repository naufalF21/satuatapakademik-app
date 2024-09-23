<?php

namespace App\Filament\Resources\SiteInformationResource\Pages;

use App\Filament\Resources\SiteInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSiteInformation extends EditRecord
{
    protected static string $resource = SiteInformationResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\DeleteAction::make(),
    //         Actions\ForceDeleteAction::make(),
    //         Actions\RestoreAction::make(),
    //     ];
    // }
}
