<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'price',
        'booking_transaction_id',
        'home_service_id',
    ];

    public function bookingTransaction()
    {
        return $this->belongsTo(BookingTransaction::class, 'booking_transaction_id');
    }

    public function homeService()
    {
        return $this->belongsTo(HomeService::class, 'home_service_id');
    }
}
