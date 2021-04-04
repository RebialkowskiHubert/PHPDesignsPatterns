<?php

/**
 * Base document factory
 */
interface DocumentFactory
{
    function create();

    function set_color(string $color);
}