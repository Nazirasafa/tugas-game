<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tips extends Model
{
    use HasFactory;
    protected $table = 'tips';

      // Tentukan kolom yang dapat diisi secara massal
      protected $fillable = [
          'id',
          'title',
          'text',
          
      ];
      
}
