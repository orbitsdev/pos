<?php

namespace App\Filament\Resources;

use Closure;
use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Fieldset;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Placeholder;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-list';
    protected static ?string $activeNavigationIcon = 'heroicon-s-clipboard-list';
    protected static ?string $navigationGroup = 'Service';
    protected static ?int $navigationSort = 3;

    public $image;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Card::make()->schema([
                    Fieldset::make('Product Information')
                        ->schema([
                            Grid::make(3)
                                ->schema([
                                    // ...
                                    TextInput::make('name')->required()->columnSpan(2),
                                    TextInput::make('price')->mask(fn (TextInput\Mask $mask) => $mask
                                        ->numeric()
                                        ->decimalPlaces(2))->required()->columnSpan(1),
                                    TextInput::make('id_number')->numeric()->mask(fn (TextInput\Mask $mask) => $mask
                                        ->numeric()->integer())->required()->columnSpan(3),
                                    TextInput::make('bar_code')->required()->columnSpan(3),
                                ]),
                        ]),

                ])->columnSpan(8),


                Card::make()->schema([
                    Grid::make(1)->schema([
                       
                      
                        FileUpload::make('image')->disk('public')->directory('products')->image()->required()->placeholder(''),

                    ])
                ])->columnSpan(4),


            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            ImageColumn::make('image') ->url(fn ($record): string => $record->image ?  Storage::disk('public')->url($record->image) : asset('/assets/images/placeholder.jpg') )
                ->openUrlInNewTab()->defaultImageUrl(url('/assets/images/placeholder.jpg')),
                TextColumn::make('name')->searchable(),
                TextColumn::make('price')->sortable(),
                TextColumn::make('id_number')->searchable(),
                TextColumn::make('bar_code')->searchable(),
                TextColumn::make('created_at')->date('d-m-Y D h:i A')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->button()->outlined()->label('Update'),
                Tables\Actions\DeleteAction::make()->button()->outlined() ,
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
