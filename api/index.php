<?php

// 1. Buat folder penyimpanan sementara di /tmp Vercel agar Laravel tidak crash
$dirs = [
    '/tmp/views',
    '/tmp/cache',
    '/tmp/sessions'
];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// 2. Buat database SQLite tiruan
$dbPath = '/tmp/database.sqlite';
if (!file_exists($dbPath)) {
    touch($dbPath);
}

// 3. Paksa Laravel menggunakan jalur /tmp tersebut
$_ENV['APP_KEY'] = 'base64:4p1ID9ZmabqJJFGDiervQ42XKn08+C5VcvRaa97jWi8='; // <-- PASTIKAN INI DIISI APP_KEY ASLI KAMU!
$_SERVER['APP_KEY'] = $_ENV['APP_KEY'];

$_ENV['VIEW_COMPILED_PATH'] = '/tmp/views';
$_SERVER['VIEW_COMPILED_PATH'] = '/tmp/views';

$_ENV['APP_CONFIG_CACHE'] = '/tmp/cache/config.php';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/cache/services.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/cache/packages.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/cache/routes.php';

$_ENV['DB_CONNECTION'] = 'sqlite';
$_ENV['DB_DATABASE'] = $dbPath;

// 4. Jalankan Laravel
require __DIR__ . '/../public/index.php';
