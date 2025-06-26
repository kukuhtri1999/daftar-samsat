<?php

return [
    'title' => 'Pendaftaran Antrian SAMSAT',
    'subtitle' => 'Daftar antrian layanan SAMSAT secara online',
    'form' => [
        'name' => 'Nama Lengkap',
        'name_placeholder' => 'Masukkan nama lengkap Anda',
        'email' => 'Email (Opsional)',
        'email_placeholder' => 'Masukkan alamat email Anda',
        'wa_number' => 'Nomor WhatsApp',
        'wa_number_placeholder' => 'Contoh: 08123456789',
        'booking_date' => 'Tanggal Antrian',
        'booking_type' => 'Jenis Layanan',
        'submit' => 'Daftar Antrian',
    ],
    'booking_types' => [
        'pajak_kendaraan' => 'Pajak Kendaraan',
        'balik_nama' => 'Balik Nama Kendaraan',
        'mutasi' => 'Mutasi Kendaraan',
        'ganti_plat' => 'Ganti Plat Nomor',
        'perpanjangan_sim' => 'Perpanjangan SIM',
    ],
    'validation' => [
        'name_required' => 'Nama lengkap wajib diisi',
        'wa_number_required' => 'Nomor WhatsApp wajib diisi',
        'booking_date_required' => 'Tanggal antrian wajib dipilih',
        'booking_type_required' => 'Jenis layanan wajib dipilih',
        'email_invalid' => 'Format email tidak valid',
        'wa_number_invalid' => 'Format nomor WhatsApp tidak valid',
    ],
    'messages' => [
        'success' => 'Pendaftaran antrian berhasil! Kami akan mengirimkan konfirmasi melalui WhatsApp.',
        'error' => 'Terjadi kesalahan. Silakan coba lagi.',
        'date_past' => 'Tanggal antrian tidak boleh di masa lalu.',
    ],
    'status' => [
        'pending' => 'Menunggu',
        'confirmed' => 'Dikonfirmasi',
        'cancelled' => 'Dibatalkan',
        'completed' => 'Selesai',
    ],
];
