<?php

require_once 'DocumentFactory.php';
require_once 'HTML.php';

class HTMLFactory implements DocumentFactory
{
    private string $color;


    public function create()
    {
        $doc = new HTML();
        $doc->set_color($this->color);
        return $doc;
    }


    public function set_color(string $color)
    {
        $this->color = $color;
    }
}