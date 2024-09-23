<?php

namespace App\Filament\Resources\TestimonialCommentResource\Pages;

use App\Filament\Resources\TestimonialCommentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestimonialComments extends ListRecords
{
    protected static string $resource = TestimonialCommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
