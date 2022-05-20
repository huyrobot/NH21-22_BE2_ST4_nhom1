<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    protected $fillable=[
        'user_id',
        'listOfCart',
        'total_payments',
        'dateOfPayment',
        'address',
    ];
    protected $table = 'transaction_history';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
