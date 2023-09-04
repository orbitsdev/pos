<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class DailySalesExport implements FromView
{

    public $day;
    public $collections;
    
    public function __construct($day, $collections)
    {   

     
   
        $this->day = $day;
        $this->collections= $collections;
    }
    public function view(): View
    {
        return view('exports.daily-sales', [
            'day' => $this->day,
            'collections' => $this->collections,
        ]);
    }
}
