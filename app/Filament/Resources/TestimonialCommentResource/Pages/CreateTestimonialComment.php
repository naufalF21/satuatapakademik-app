<?php

namespace App\Filament\Resources\TestimonialCommentResource\Pages;

use App\Filament\Resources\TestimonialCommentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTestimonialComment extends CreateRecord
{
    protected static string $resource = TestimonialCommentResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
