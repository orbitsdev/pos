<?php

namespace App\Filament\Resources\SaleResource\Pages;

use App\Exports\DailySalesExport;
use App\Models\Transaction;
use Illuminate\Support\Carbon;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Filament\Resources\SaleResource;

class Sales extends Page
{
    protected static string $resource = SaleResource::class;

    protected static string $view = 'filament.resources.sale-resource.pages.sales';

    public $samples = [1,23,4,1,41,2,12,214,124,124,124,12,412,4, 1,23,4,1,41,2,12,214,124,124,124,12,412,4,1,23,4,1,41,2,12,214,124,124,124,12,412,4,];

    public $date = [];

    public $daily_sales_search;
    

    public $daily_sales =[];
    public $daily_sales_result_download =[];
    public $not_valid;
    public $parsedDate;
    
    

    public function mount()

    
    {
        
$this->loadDailySales();
    }
    
    public function loadDailySales()
    {
        
        $this->daily_sales = Transaction::select(
            
            DB::raw('DATE(created_at) as sale_date'),
            DB::raw('SUM(total_amount) as total_sales')
        )
        ->where('status','completed')
        ->groupBy('sale_date')
        ->orderBy('sale_date', 'desc')
        ->get()
        ->map(function ($item) {
            $item->sale_date = Carbon::parse($item->sale_date); // Convert to Carbon instance
            return $item;
        });
    }

    public function downloadDailySales($item)
    {
        $selectedDate = Carbon::parse($item['sale_date'])->setTimezone('Asia/Manila')->format('Y-m-d');
        $transactions = Transaction::where('status','completed')
        ->whereDate('created_at', $selectedDate)
        ->with(['user', 'itemTransactions.product'])->get();
      
        $this->loadDailySales();
        $readableDate = Carbon::parse($item['sale_date'])->setTimezone('Asia/Manila')->format('F d Y');
        return Excel::download(new DailySalesExport($readableDate, $transactions), $selectedDate.'.xlsx');
    }
    
    public function updatedDailySalesSearch()
    {
        

        try {
            $this->parsedDate = Carbon::parse($this->daily_sales_search);


            if ($this->parsedDate->isValid()) {
                // $this->daily_sales = Transaction::when($this->daily_sales_search, function($query){
                //     $query->whereDate('created_at', $this->parsedDate->format('Y-m-d'));
                // })->latest()->whereStatus('completed')->get();
                $this->daily_sales = Transaction::where('status','completed')->when($this->daily_sales_search, function($query){
                        $query->whereDate('created_at', $this->parsedDate->format('Y-m-d'));
                     })->latest()->select(
                    DB::raw('DATE(created_at) as sale_date'),
                    DB::raw('SUM(total_amount) as total_sales')
                )
                ->groupBy('sale_date')
                ->orderBy('sale_date', 'desc')
                ->get()
                ->map(function ($item) {
                    $item->sale_date = Carbon::parse($item->sale_date); // Convert to Carbon instance
                    return $item;
                });

            } else {
                $this->not_valid = 'Not Valid';
            }
        } catch (\Exception $e) {
            $this->not_valid = $e->getMessage();
            
            // Handle the exception, perhaps set a default result or show an error message
            // $this->results = null;
        }
       
    }

}
