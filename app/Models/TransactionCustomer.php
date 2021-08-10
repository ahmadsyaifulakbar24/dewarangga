<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionCustomer extends Model
{
    use HasFactory;

    protected $table = 'transaction_customers';
    protected $fillable = [
        'transaction_date',
        'customer_id',
        'nominal_transaction'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
