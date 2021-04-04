<?php

require_once 'PDFFactory.php';
require_once 'HTMLFactory.php';
require_once 'Page.php';

$pdf = new PDFFactory();
$pdf->set_color('#000');

$html = new HTMLFactory();
$html->set_color('#fff');

$page1 = new Page($pdf);
$page1->render();

$page2 = new Page($html);
$page2->render();