<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imgdes extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_destinasi',
        'image',
    ];

    /**
     * Get the destinasi that owns the image.
     */
    public function destinasi()
    {
        return $this->belongsTo(Destinasi::class, 'id_destinasi');
    }
}
