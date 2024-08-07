<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'products', // Store products as JSON
        'status',
        'total_price',
    ];

    protected $casts = [
        'products' => 'array',
    ];

    // In Order.php model
    public function products()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
}
