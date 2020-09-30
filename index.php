<?php

// Include Composer autoloader if not already done.
include 'vendor/autoload.php';

// Parse pdf file and build necessary objects.
$parser = new \Smalot\PdfParser\Parser();
$pdf    = $parser->parseFile('pdf_commenting_new.pdf');

// Retrieve all pages from the pdf file.
$pages  = $pdf->getPages();


// Loop over each page to extract text.
foreach ($pages as $page) {
  //echo '<prev>';
  echo $page->getText();
  //echo '</prev>';

  $objects = $page->getXObjects();
  foreach ($objects as $object) {
    print_r($object);

    foreach ($object as $ele) {
      echo $ele;
      die();
    }
    die();
    //echo "ddd";
  }
  die();
}
