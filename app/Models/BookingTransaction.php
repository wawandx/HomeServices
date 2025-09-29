<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingTransaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'booking_trx_id',
        'name',
        'phone',
        'email',
        'started_time',
        'schedule_at',
        'proof',
        'post_code',
        'city',
        'address',
        'subtotal',
        'total_amount',
        'total_tax_amount',
        'is_paid',
    ];

    public static function generateUniqueTrxId ()
    {
        $prefix = 'TRX';
        do {
            $randomString = $prefix . mt_rand(100000, 999999);
        } while (self::where('booking_trx_id', $randomString)->exists());

        return $randomString;
    }

    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }
}
