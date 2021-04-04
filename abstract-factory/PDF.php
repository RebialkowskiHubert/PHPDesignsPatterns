<?php

require_once 'Document.php';

/**
 * Represents implementation of PDF document
 */
class PDF implements Document
{
    public function generate() : string
    {
        return "Dokument PDF<br/>";
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