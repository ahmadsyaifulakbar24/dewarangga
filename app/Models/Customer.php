<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'username',
        'fullname',
        'registered_date',
        'company_name',
        'code_product',
        'product_value',
        'address',
        'phone_number'
    ];

    public function product ()
    {
        return $this->belongsTo(Product::class, 'code_product');
    }
}
