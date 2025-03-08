<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentHistory extends Model
{
    use HasFactory,SoftDeletes;

    public function receivable(){
        return $this->belongsTo(Receivable::class, 'receivable_id', 'id');
    }
    public function payable(){
        return $this->belongsTo(Payable::class, 'payable_id', 'id');
    }
}
