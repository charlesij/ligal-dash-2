<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Firebase Credentials
    |--------------------------------------------------------------------------
    |
    | Lokasi file kredensial Firebase yang diunduh dari Firebase Console.
    | File ini adalah JSON yang berisi private key untuk mengakses Firebase.
    |
    */
    'credentials' => [
        'file' => env('FIREBASE_CREDENTIALS'), // Lokasi file kredensial
        'auto_discovery' => env('FIREBASE_AUTO_DISCOVERY', true),
    ],

    /*
    |--------------------------------------------------------------------------
    | Firebase Database
    |--------------------------------------------------------------------------
    |
    | Konfigurasi URL database Firebase Realtime Database.
    | URL ini biasanya bisa ditemukan di Firebase Console -> Database -> Data.
    |
    */
    'database' => [
        'url' => env('FIREBASE_DATABASE_URL'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Firebase Dynamic Links
    |--------------------------------------------------------------------------
    |
    | Konfigurasi untuk Firebase Dynamic Links, jika Anda menggunakannya.
    |
    */
    'dynamic_links' => [
        'default_domain' => env('FIREBASE_DYNAMIC_LINKS_DEFAULT_DOMAIN'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Firebase Storage
    |--------------------------------------------------------------------------
    |
    | Konfigurasi URL default untuk Firebase Cloud Storage.
    |
    */
    'storage' => [
        'default_bucket' => env('FIREBASE_STORAGE_BUCKET'),
    ],
];
