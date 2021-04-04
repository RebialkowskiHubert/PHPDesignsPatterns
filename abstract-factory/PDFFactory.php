<?php

require_once 'DocumentFactory.php';
require_once 'PDF.php';

class PDFFactory implements DocumentFactory
{
    private string $color;


    public function create()
    {
        $doc = new PDF();
        $doc->set_color($this->color);
        return $doc;
    }


    public function set_color(string $color)
    {
        $this->color = $color;
    }
}