<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyIncome extends Model
{
   protected $table ="Daily_Income";
   public $timestamps = false;

   protected $fillable = [
    'date',
    'amount',
    'user',
    'month',
    'year',
];

   public function findIncome($date){
    
   }

   public function insertIncome(){

   }

   public function updateIncome(){

   }
}
