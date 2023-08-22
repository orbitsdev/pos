<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemTransaction extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function product(){
        return $this->belongsTo(Product::class);

    }

    public function transaction(){
        return $this->belongsTo(Transaction::class);

    }

}
