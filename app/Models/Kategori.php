<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kategori',
    ];

    /**
     * Get the destinasi that owns the image.
     */
    public function destinasis()
    {
        return $this->hasMany(Destinasi::class, 'id_kategori');
    }
}
