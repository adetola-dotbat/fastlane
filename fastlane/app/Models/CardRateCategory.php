<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardRateCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
      ];
      public function card_rate(){
        return $this->hasMany(CardRate::class, 'category_id', 'id');
    }
}