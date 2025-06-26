<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'wa_number',
        'booking_date',
        'booking_type',
    ];

    protected $casts = [
        'booking_date' => 'date',
    ];

    // Define booking types as constants
    const BOOKING_TYPES = [
        'pajak_kendaraan' => 'Pajak Kendaraan',
        'balik_nama' => 'Balik Nama',
        'mutasi' => 'Mutasi Kendaraan',
        'ganti_plat' => 'Ganti Plat Nomor',
        'perpanjangan_sim' => 'Perpanjangan SIM',
    ];

    // Accessor for booking type label
    public function getBookingTypeLabelAttribute()
    {
        return self::BOOKING_TYPES[$this->booking_type] ?? $this->booking_type;
    }
}
