<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
    protected $table = 'danh_muc';
    protected $primaryKey = 'id_DM';
    public $incrementing = true; // vì id_san_pham không phải auto increment
    protected $keyType = 'string'; // vì kiểu là varchar(11)

    protected $fillable = [
        'id_dm',
        'ten_DM',
    ];
}
