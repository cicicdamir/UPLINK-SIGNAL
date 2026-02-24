<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// 1. TVOJI PODACI
$token = "YOUR_BOT_TOKEN_HERE"; 
$chat_id = "YOUR_CHAT_ID_HERE";

echo "<body style='background:#02040a; color:#06b6d4; font-family:monospace; padding:40px;'>";
echo "<h1 style='letter-spacing:5px; border-bottom:2px solid #06b6d4; padding-bottom:10px;'>LEVIATHAN v70.1</h1>";

if($chat_id == "chat_id") {
    echo "<p style='color:orange;'>[!] ERROR: Nisi uneo svoj Chat ID u kod.</p>";
    exit;
}

// 2. FUNKCIJA ZA SLANJE
$poruka = "🛸 <b>DIRECT LINK ESTABLISHED</b>\n";
$poruka .= "---------------------------\n";
$poruka .= "Satellite: <code>LEVIATHAN-ALPHA</code>\n";
$poruka .= "Status: <b style='color:#10b981;'>OPERATIONAL</b>\n";
$poruka .= "Timestamp: " . date("d.m.Y - H:i:s");

$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($poruka) . "&parse_mode=html";

// 3. IZVRŠAVANJE
$result = @file_get_contents($url);

if ($result) {
    echo "<div style='background:rgba(16,185,129,0.1); border:1px solid #10b981; padding:20px; margin-top:20px;'>";
    echo "<h2 style='color:#10b981; margin-top:0;'>[SUCCESS]</h2>";
    echo "<p>Signal poslat na Chat ID: <b>$chat_id</b></p>";
    echo "<p>Proveri svoj Telegram telefon/web odmah!</p>";
    echo "</div>";
} else {
    echo "<div style='background:rgba(239,68,68,0.1); border:1px solid #ef4444; padding:20px; margin-top:20px;'>";
    echo "<h2 style='color:#ef4444; margin-top:0;'>[FAILURE]</h2>";
    echo "<p>Slanje nije uspelo. Proveri da li si pokrenuo bota @YOURBOT bar jednom.</p>";
    echo "</div>";
}

echo "</body>";
?>
