<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReceiptProductResource\Pages;
use App\Filament\Resources\ReceiptProductResource\RelationManagers;
use App\Filament\Resources\ReceiptProductResource\Widgets\AddReceiptProduct;
use App\Models\ReceiptProduct;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReceiptProductResource extends Resource
{
    protected static ?string $model = ReceiptProduct::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("name"),
                Tables\Columns\TextColumn::make("sell_price"),
                Tables\Columns\TextColumn::make("amount"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReceiptProducts::route('/'),
            'create' => Pages\CreateReceiptProduct::route('/create'),
            'edit' => Pages\EditReceiptProduct::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            AddReceiptProduct::class,
        ];
    }
}
