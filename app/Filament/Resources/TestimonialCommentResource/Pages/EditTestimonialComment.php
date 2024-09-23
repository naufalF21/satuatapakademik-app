<?php

namespace App\Filament\Resources\TestimonialCommentResource\Pages;

use App\Filament\Resources\TestimonialCommentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimonialComment extends EditRecord
{
    protected static string $resource = TestimonialCommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
