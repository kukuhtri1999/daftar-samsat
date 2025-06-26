<?php

return [
    'title' => 'SAMSAT Queue Registration',
    'subtitle' => 'Register for SAMSAT services online',
    'form' => [
        'name' => 'Full Name',
        'name_placeholder' => 'Enter your full name',
        'email' => 'Email (Optional)',
        'email_placeholder' => 'Enter your email address',
        'wa_number' => 'WhatsApp Number',
        'wa_number_placeholder' => 'Example: 08123456789',
        'booking_date' => 'Queue Date',
        'booking_type' => 'Service Type',
        'submit' => 'Register Queue',
    ],
    'booking_types' => [
        'pajak_kendaraan' => 'Vehicle Tax',
        'balik_nama' => 'Vehicle Ownership Transfer',
        'mutasi' => 'Vehicle Mutation',
        'ganti_plat' => 'License Plate Replacement',
        'perpanjangan_sim' => 'Driving License Renewal',
    ],
    'validation' => [
        'name_required' => 'Full name is required',
        'wa_number_required' => 'WhatsApp number is required',
        'booking_date_required' => 'Queue date must be selected',
        'booking_type_required' => 'Service type must be selected',
        'email_invalid' => 'Invalid email format',
        'wa_number_invalid' => 'Invalid WhatsApp number format',
    ],
    'messages' => [
        'success' => 'Queue registration successful! We will send confirmation via WhatsApp.',
        'error' => 'An error occurred. Please try again.',
        'date_past' => 'Queue date cannot be in the past.',
    ],
    'status' => [
        'pending' => 'Pending',
        'confirmed' => 'Confirmed',
        'cancelled' => 'Cancelled',
        'completed' => 'Completed',
    ],
];
