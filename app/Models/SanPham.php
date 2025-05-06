<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = 'san_phams';
    protected $primaryKey = 'id_san_pham';
    public $incrementing = false; // vì id_san_pham không phải auto increment
    protected $keyType = 'string'; // vì kiểu là varchar(11)

    protected $fillable = [
        'id_san_pham',
        'Ten_SP',
        'MoTa_SP',
        'Gia',
        'SoLuong',
        'MauSac',
        'KichThuoc',
        'Loai_SP',
        'Hinh_SP',
    ];
}