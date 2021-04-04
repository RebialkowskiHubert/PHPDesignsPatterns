<?php

require_once 'Document.php';

/**
 * Represents implementation of HTML document
 */
class HTML implements Document
{
    public function generate(): string
    {
        return "Dokument HTML<br/>";
    }


    /**
     * Set color
     * 
     * @param string $color
     */
    public function set_color(string $color)
    {
        echo "Kolor ".$color." został ustawiony<br/>";
    }
}