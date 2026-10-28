<?php

$dbPath = '/tmp/database.sqlite';
if (!file_exists($dbPath)) {
    touch($dbPath);
}

$_ENV['DB_DATABASE'] = $dbPath;
$_SERVER['DB_DATABASE'] = $dbPath;

require __DIR__ . '/../public/index.php';
