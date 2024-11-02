<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'number', // Добавьте 'number'
        'description',
        'status_id',
        'user_id',
    ];
      // Связь "один ко многим" с Statuses
      public function status()
      {
          return $this->belongsTo(Statyses::class); 
      }
  
      // Связь "один ко многим" с Users
      public function user()
      {
          return $this->belongsTo(User::class);
      }
}
