<?php
$key = Generate::tracking_key();
echo DNS2D::getBarcodeHTML($key, "QRCODE");
echo "";
echo DNS1D::getBarcodeHTML($key, "C128");

echo $key;

?>