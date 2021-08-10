<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'code_product',
        'product_name',
        'created_by',
        'updated_by'
    ];
    protected $primaryKey = 'code_product';
    protected $keyType = 'string';

    public function created_by_data ()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updated_by_data ()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
