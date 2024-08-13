<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_user',
        'title',
        'cover',
        'content',
    ];

    /**
     * Get the user that owns the berita.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Accessor to get base64 encoded cover image
    public function getCoverBase64Attribute()
    {
        return 'data:image/jpeg;base64,' . base64_encode($this->cover);
    }
}
