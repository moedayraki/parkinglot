<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlySubscriber extends Model
{
    protected $table="Monthly_Subscribers";
    public $timestamps = false;

    protected $fillable = [
        'name',
        'date',
        'amount',
        'paid',
    ];

}
