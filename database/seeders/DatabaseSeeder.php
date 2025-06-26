<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Booking;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
            ]
        );

        // Create sample bookings
        Booking::firstOrCreate([
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'wa_number' => '081234567890',
            'booking_date' => now()->addDays(1),
            'booking_type' => 'pajak_kendaraan',
        ]);

        Booking::firstOrCreate([
            'name' => 'Siti Aminah',
            'wa_number' => '081987654321',
            'booking_date' => now()->addDays(2),
            'booking_type' => 'balik_nama',
        ]);

        Booking::firstOrCreate([
            'name' => 'Ahmad Rahman',
            'email' => 'ahmad@example.com',
            'wa_number' => '081555666777',
            'booking_date' => now()->addDays(3),
            'booking_type' => 'perpanjangan_sim',
        ]);
    }
}
