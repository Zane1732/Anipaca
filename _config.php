<?php

try {
    $host = 'gondola.proxy.rlwy.net';
    $port = 25762;
    $dbname = 'railway';
    $user = 'postgres';
    $password = 'GTmPFCVGfElBFtSZzGQWmgICccmJiCdY';

    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $conn = new PDO($dsn, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    error_log("Database connection failed: " . $e->getMessage());
    die("Database connection failed.");
}

$websiteTitle = "AniPaca";
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$websiteUrl = "{$protocol}://{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "@gmail.com";

$version = "2.1";

$discord = "https://dcd.gg/anipaca";
$github = "https://github.com/PacaHat";
$telegram = "https://t.me/anipaca";
$instagram = "https://www.instagram.com/pxr15_"; 

$zpi = "https://q-iota-five.vercel.app/api";
$proxy = $websiteUrl . "/src/ajax/proxy.php?url=";

$banner = $websiteUrl . "/public/images/banner.png";
