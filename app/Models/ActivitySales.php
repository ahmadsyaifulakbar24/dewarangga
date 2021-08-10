<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivitySales extends Model
{
    use HasFactory;

    protected $table = 'activity_sales';
    protected $fillable = [
        'customer_id',
        'sales_id',
        'visit_date',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'sales_id');
    }
}
