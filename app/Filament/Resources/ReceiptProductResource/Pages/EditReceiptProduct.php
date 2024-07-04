<?php

namespace App\Filament\Resources\ReceiptProductResource\Pages;

use App\Filament\Resources\ReceiptProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReceiptProduct extends EditRecord
{
    protected static string $resource = ReceiptProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
