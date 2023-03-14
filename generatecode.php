<?php

require "vendor/autoload.php";

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;


$text = $_POST['text'];

$qr_code = QrCode::create($text)
                 ->setSize(600)
                 ->setMargin(40);

$writer = new PngWriter;

$result = $writer->write($qr_code);

header("Content-Type: " . $result->getMimeType());

echo $result->getString();

// Save the image to a file
$result->saveToFile("qr-code.png");


?>