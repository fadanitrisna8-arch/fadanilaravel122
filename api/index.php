<?php

// 1. Kunci APP_KEY secara absolut (Ganti kode di bawah dengan APP_KEY dari file .env lokal Anda)
$_ENV['APP_KEY'] = 'base64:SALIN_DAN_TEMPEL_KODE_APP_KEY_PANJANG_KAMU_DI_SINI';
$_SERVER['APP_KEY'] = $_ENV['APP_KEY'];

// 2. Setelan database temporary SQLite agar tidak crash
$dbPath = '/tmp/database.sqlite';
if (!file_exists($dbPath)) {
    touch($dbPath);
}
$_ENV['DB_DATABASE'] = $dbPath;
$_SERVER['DB_DATABASE'] = $dbPath;
$_ENV['DB_CONNECTION'] = 'sqlite';
$_SERVER['DB_CONNECTION'] = 'sqlite';

// 3. Setelan bypass folder temporary untuk compile view HTML
$_ENV['VIEW_COMPILED_PATH'] = '/tmp';
$_SERVER['VIEW_COMPILED_PATH'] = '/tmp';

// 4. Jalankan Laravel
require __DIR__ . '/../public/index.php';
