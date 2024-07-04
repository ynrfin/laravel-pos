<?php

namespace App\Filament\Resources\ReceiptProductResource\Pages;

use App\Filament\Resources\ReceiptProductResource;
use App\Filament\Resources\ReceiptProductResource\Widgets\AddReceiptProduct;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReceiptProducts extends ListRecords
{
    protected static string $resource = ReceiptProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets():array
    {
        return [
            AddReceiptProduct::class,
        ];
    }
}
