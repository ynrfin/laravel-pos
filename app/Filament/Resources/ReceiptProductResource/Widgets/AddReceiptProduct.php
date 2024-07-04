<?php

namespace App\Filament\Resources\ReceiptProductResource\Widgets;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Widgets\Widget;

class AddReceiptProduct extends Widget implements HasForms
{
     use InteractsWithForms;

    protected static string $view = 'filament.resources.receipt-product-resource.widgets.add-receipt-product';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form) : Form
    {
        return $form
            ->schema([
                TextInput::make("name"),
            ])
            ->statePath("data");
    }
}
