<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Role;
use App\Models\User;
use Filament\Tables;
use Filament\Pages\Page;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $activeNavigationIcon = 'heroicon-s-users';
    protected static ?string $navigationGroup = 'System';
    protected static ?int $navigationSort = 2;

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
    // protected static bool $shouldRegisterNavigation = false;

     
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('profile_photo_path')->disk('public')->directory('users-profile')->image()->avatar()->required()->columnSpan(4),
                Card::make()->schema([
                    Grid::make(3)
                        ->schema([
                            TextInput::make('name')
                                ->required()
                                ->columnSpan(3),

                            TextInput::make('email')
                                ->required()
                                ->email()
                                ->columnSpan(3),

                                Select::make('role_id')
                                ->label('Role')
                                ->options(Role::all()->pluck('name', 'id')->map(function ($name) {
                                    return ucfirst($name);
                                }))
                                ->searchable()
                                ->columnSpan(3),
                            

                            TextInput::make('password')
                                ->password()
                                ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                                ->dehydrated(fn ($state) => filled($state))
                                ->label(fn (Page $livewire) => ($livewire instanceof CreateRecord) ? 'Password' : 'New Password')
                                ->required(fn (Page $livewire) => ($livewire instanceof CreateRecord))
                                ->columnSpan(3),



                        ]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->formatStateUsing(function($state){
                    return ucfirst($state);
                }),
                TextColumn::make('email')->searchable(),
                
                BadgeColumn::make('role.name')->searchable()->color(static function ($state): string {
                    return  match ($state) {
                        'admin' => 'success',
                        'cashier' => 'primary',
                        default => 'primary',
                    };
                })->formatStateUsing(function ($state) {
                    return ucfirst($state);
                })
                ->label('Role')
                ->searchable(),

                TextColumn::make('created_at')->date('M-d-Y H:i A'),

            ])
            ->filters([
                SelectFilter::make('role_id')
                ->multiple()
                ->options(Role::all()->pluck('name', 'id')->map(function ($name) {
                    return ucfirst($name);
                }))
                ->searchable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->button()->outlined()->label('Update')->hidden(function($record){
                    return $record->id == Auth::user()->id;
                }),
                Tables\Actions\DeleteAction::make()->button()->outlined()->hidden(function($record){
                    return $record->id == Auth::user()->id;
                }),

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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
