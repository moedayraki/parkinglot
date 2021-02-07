<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyPayments extends Model
{
    protected $table="Monthly_Payments";

    protected $fillable = [
        'subscriber-id',
        'date',
    ];

    public function setPayment($id,$date)
    {
        $this->attributes['subscriber-id'] = $id;
        $this->attributes['date'] = $date;
        $this->save();
    }
}
