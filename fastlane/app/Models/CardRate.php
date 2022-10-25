<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardRate extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
          'card',
          'amount',
      ];
  
      public function card_rate_category(){
          return $this->belongsTo(CardRateCategory::class,'category_id', 'id');
      }

  
}