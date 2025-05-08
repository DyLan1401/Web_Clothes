<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $table = 'discounts';
    protected $primaryKey = 'ma_giam_gia';
    public $incrementing = false;
    protected $keyType = 'string'; // nếu mã là string

    public const CREATED_AT = 'ngay_tao';
    public const UPDATED_AT = null;

    protected $fillable = [
        'ma_giam_gia',
        'phan_tram_giam_gia',
        'loai_giam_gia',
        'gia_tri_don_hang_toi_thieu',
        'so_lan_su_dung_toi_da',
        'so_lan_da_su_dung',
        'ngay_het_han_giam_gia',
        'ngay_tao',
    ];

    protected $casts = [
        'ngay_het_han_giam_gia' => 'datetime',
        'ngay_tao' => 'datetime',
    ];
}
