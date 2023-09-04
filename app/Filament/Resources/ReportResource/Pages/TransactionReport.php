<?php

namespace App\Filament\Resources\ReportResource\Pages;

use Filament\Forms;
use Illuminate\Support\Carbon;
use Filament\Resources\Pages\Page;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use App\Filament\Resources\ReportResource;

class TransactionReport extends Page  implements Forms\Contracts\HasForms 
{

    use Forms\Concerns\InteractsWithForms; 

    protected static string $resource = ReportResource::class;

    protected static string $view = 'filament.resources.report-resource.pages.transaction-report';
    
    public $selectedDate;

    public $daily_sale_date;
    public $report_type;
    public $samples = [1,23,4,1,41,2,12,214,124,124,124,12,412,4, 1,23,4,1,41,2,12,214,124,124,124,12,412,4,1,23,4,1,41,2,12,214,124,124,124,12,412,4,];
    public function mount()
    {
        // Set the default value for selectedDate to the current date
        $this->selectedDate = Carbon::now()->format('M d, Y');
    }
    protected function getFormSchema(): array 
    {

        return [
            Grid::make(6)->schema([
               Select::make('report_type')->options([
                'Sales Report'=> 'Sales Report',
                'Inventory Report'=> 'Inventory Report',
                'Cashier Report'=> 'Cashier Report',

               ])
               ->label('Report Tyoe')
               ->columnSpan(3)
               ->searchable()
               ->reactive(),
                // DatePicker::make('daily_sale_date')->columnSpan(2)->label('Select Date')->timezone('Asia/Manila')->reactive()->default(now()),
            ]),
            // Forms\Components\TextInput::make('title')->required(),
            // Forms\Components\MarkdownEditor::make('content'),
        ];
    } 

    
}
