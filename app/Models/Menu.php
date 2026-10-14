<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'menus';
    protected $fillable = ['id', 'nama_menu', 'jenis', 'harga', 'created_at, updated_at'];

    public function menus()
    {
        return $this->hasMany(Menu::class, 'id');
    }
}