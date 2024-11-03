<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use HasFactory;
      // Tentukan tabel yang digunakan oleh model ini
      protected $table = 'tutorial';

      // Tentukan kolom yang dapat diisi secara massal
      protected $fillable = [
          'id',
          'title',
          'thumbnail',
          'link',
          'cretated_at',
          'updated_at'
      ];
      
}
