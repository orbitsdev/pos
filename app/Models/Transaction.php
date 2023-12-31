<?php

namespace App\Models;

use App\Models\User;
use App\Models\ItemTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function itemTransactions(){
        return $this->hasMany(ItemTransaction::class);
    }
    public function itemTransaction(){
        return $this->hasOne(ItemTransaction::class);
    }

    
}
