<?php 

$conn = new mysqli("sql312.infinityfree.com", "if0_38998037", "sQYE0KgwnymXgQ", "if0_38998037_zane");


if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    die("Database connection failed.");
}

$websiteTitle = "ZANEFLIX";
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$websiteUrl = "{$protocol}://{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "anderszame@gmail.com";

$version = "2.1";

$discord = "https://discord.gg/5fUee5sS";https://byzanebio.vercel.app/
$github = "https://byzanebio.vercel.app/";
$telegram = "";
$instagram = "https://www.instagram.com/zane_0xo "; 

// all the api you need
$zpi = "https://q-iota-five.vercel.app/api"; //https://github.com/PacaHat/zen-api
$proxy = $websiteUrl . "/src/ajax/proxy.php?url=";


//If you want faster loading speed
//$proxy = "https://your-hosted-proxy.com/api/v1/streamingProxy?url="; //https://github.com/MetaHat/m3u8-streaming-proxy


$banner = $websiteUrl . "/public/images/banner.png";
