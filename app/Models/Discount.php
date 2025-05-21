<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $primaryKey = 'discount_id';
    protected $fillable = [
        'discount_percent', 'discount_type', 'min_order_value',
        'usage_limit', 'usage_count', 'discount_expiry_date'
    ];
}