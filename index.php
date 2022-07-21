<?php

require __DIR__ . '/vendor/autoload.php';


use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;








$qr = QrCode::create("https://code-boxx.com");
$writer = new PngWriter();
$result = $writer->write($qr);




echo "<img src='{$result->getDataUri()}'/>";

