<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'id',
        'title',
        'thumbnail',
        
    ];
}
