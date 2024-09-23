<?php

namespace App\Filament\Resources\TestimonialVideoResource\Pages;

use App\Filament\Resources\TestimonialVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimonialVideo extends EditRecord
{
    protected static string $resource = TestimonialVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
