<?php

namespace App\Filament\Resources\ProductResource\Pages;

use Filament\Pages\Actions;
use App\Exports\ProductExport;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ProductResource;

class ListProducts extends ListRecords
{
    protected static string $resource = ProductResource::class;

    protected function getActions(): array
    {
        return [
            Actions\Action::make('import')->button()->outlined()->label('Import From Excel')->icon('heroicon-o-cloud-upload')
            ->action(function (array $data): void {

                $file  = Storage::disk('public')->path($data['file']);
           
                Excel::import(new ProductImport, $file);
    
                if (Storage::disk('public')->exists($data['file'])) {
    
                    Storage::disk('public')->delete($data['file']);
    
                }
        })->form([
            FileUpload::make('file')->acceptedFileTypes(['application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/csv', 'text/csv', 'text/plain'])->disk('public')->directory('imports')->label('Excel File'),
        ])->modalHeading('Import Item Details From excel')
        ->modalSubheading('Follow the template structure is neccesary. Importing different format will cause error in the system')  
          ,
            Actions\Action::make('Export')->button()->outlined()->label('Export To Excel')->icon('heroicon-o-cloud-download')
            ->action(function(){
                return Excel::download(new ProductExport, 'products.xlsx');

            })
            ->requiresConfirmation()
            ->modalHeading('Import Products ')
            ->modalButton('Export Now'),
           
        
            Actions\CreateAction::make(),
        ];
    }
}
