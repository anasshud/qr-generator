<?php
include('qrlib.php');

$ssid = $_POST['ssid'];
$password = $_POST['password'];
$minutes = $_POST['minutes'];

// Wi-Fi QR format: WIFI:S:<SSID>;T:WPA;P:<PASSWORD>;;
$data = "WIFI:S:$ssid;T:WPA;P:$password;;";

$dir = "qr/";
if (!file_exists($dir)) {
    mkdir($dir);
}

$filename = $dir . 'wifi_' . time() . '.png';
QRcode::png($data, $filename, QR_ECLEVEL_H, 8, 2);

header("Location: index.php?file=" . basename($filename));
exit;
?>
