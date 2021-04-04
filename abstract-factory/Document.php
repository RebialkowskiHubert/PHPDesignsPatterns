<?php

/**
 * Base implementation of document
 */
interface Document
{
    /**
     * Genrate document
     * 
     * @return string
     */
    function generate() : string;
}
