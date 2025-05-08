<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhMucSanPham extends Model
{
    protected $table = 'danh_muc';
    protected $primaryKey = 'id_DM';
    public $incrementing = false; 
    protected $keyType = 'string'; // vì kiểu là varchar(11)

    protected $fillable = [
        'id_DM',
        'ten_DM',
    ];
}
