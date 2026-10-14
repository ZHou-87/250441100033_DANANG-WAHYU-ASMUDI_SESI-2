<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'pesanans';
    protected $fillable = ['id', 'menu_id', 'nama_pelanggan', 'nomor_meja', 'jumlah', 'jumlah_harga', 'status', 'created_at, updated_at'];

    public function pesanans()
    {
        return $this->hasMany(Menu::class, 'id');
    }
    public function menus()
    {
        return $this->hasMany(Menu::class, 'id');
    }
}