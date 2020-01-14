<?php
    require_once __DIR__ . '/vendor/autoload.php';

    $generator = new Picqer\Barcode\BarcodeGeneratorJPG();

    if(!isset($_GET['barcode']))
        die('Barcode is not provided!');
    
    $barcode_text = $_GET['barcode'];

    $barcode = $generator->getBarcode($barcode_text, $generator::TYPE_CODE_128_B);
    
    header('Content-type: image/jpeg');
    
    echo $barcode;
    
