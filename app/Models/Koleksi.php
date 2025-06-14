<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koleksi extends Model
{
    use HasFactory;

    protected $table = 'koleksi'; // pastikan ini sesuai dengan nama tabel di database

    protected $fillable = [
        'id_user',
        'id_resep',
    ];

    public $timestamps = false; // tabel koleksi tidak punya created_at/updated_at

    public function user()
    {
        // Foreign key di koleksi: id_user, primary key di users: id
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function resep()
    {
        return $this->belongsTo(Resep::class, 'id_resep', 'id_resep');
    }
}
