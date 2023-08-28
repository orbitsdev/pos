<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ProductImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {   

        $productExists = Product::where('id_number', $row['id_number'])->exists();
        
        // save only if product does not exist
        if(!$productExists){
            return new Product([
                'name'  => $row['name'],
                'id_number' => $row['id_number'],
                'bar_code'    => $row['bar_code'],
                'price'    => $row['price'],
            ]);
        }

    }
}
