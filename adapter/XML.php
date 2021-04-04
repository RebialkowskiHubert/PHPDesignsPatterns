<?php

/*
Example use:
When we used class, which implement incompatible interface to new method
*/

interface OldXML
{
    public function write();
}


class NewXML
{
    public function xml()
    {
        echo "XML";
    }
}

class XML implements OldXML
{
    public function write()
    {
        $adaptee = new NewXML();
        $adaptee->xml();
    }
}

//Usage
$xml = new XML();
$xml->write();