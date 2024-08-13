<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'cover',
        'id_kategori',
        'content',
        'longitude',
        'latitude',
    ];

    /**
     * Get the kategori that owns the destinasi.
     */
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function imgdes()
    {
        return $this->hasMany(Imgdes::class, 'id_destinasi');
    }

    // Accessor to get base64 encoded cover image
    public function getCoverBase64Attribute()
    {
        return 'data:image/jpeg;base64,' . base64_encode($this->cover);
    }
}
