<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Transaction;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TransactionResource\Pages;
use App\Filament\Resources\TransactionResource\RelationManagers;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $activeNavigationIcon = 'heroicon-s-document-text';
    protected static ?string $navigationGroup = 'Service';
    protected static ?int $navigationSort = 4;

    
    public static function getEloquentQuery(): Builder
{
    return parent::getEloquentQuery()->latest();
}
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
                TextColumn::make('user.name')->searchable()->formatStateUsing(function ($state) {
                    return ucfirst($state);
                })->label('Cashier'),
                TextColumn::make('name')->searchable()->formatStateUsing(function ($state) {
                    return ucfirst($state);
                })->label('Transaction'),
                TextColumn::make('total_amount')->searchable(),
                TextColumn::make('amount_paid')->searchable(),
                TextColumn::make('change')->searchable(),
                BadgeColumn::make('status')->searchable()->color(static function ($state): string {
                    return  match ($state) {
                        'active' => 'primary',
                        'hold' => 'warning',
                        'voided' => 'danger',
                        'completed' => 'success',
                        'canceled' => 'danger',
                        default => 'primary',
                    };
                })->formatStateUsing(function ($state) {
                    return ucfirst($state);
                }),
                TextColumn::make('created_at')->date('M-d-Y H:i A'),
            ])
            ->filters([

                SelectFilter::make('status')
                    ->multiple()
                    ->options([
                        'active' => 'Active',
                        'hold' => 'Hold',
                        'voided' => 'Voided',
                        'completed' => 'Completed',
                        'canceled' => 'Canceled',
                    ]),

                Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from'),
                        Forms\Components\DatePicker::make('created_until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    })
                
            ])
            ->actions([
                // Tables\Actions\ActionGroup::make([]),
                Tables\Actions\EditAction::make()->button()->outlined(),
                Tables\Actions\DeleteAction::make()->button()->outlined(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTransactions::route('/'),
        ];
    }
}
