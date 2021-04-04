<?php

/*
Example use
Concentrate a lot of objects in one - create API
*/

class Element1
{
    public function method()
    {
        echo 'Metoda Element 1<br/>';
    }
}

class Element2
{
    public function method()
    {
        echo 'Metoda Element 2<br/>';
    }
}

class Element3
{
    public function method()
    {
        echo 'Metoda Element 3<br/>';
    }
}


class Facade
{
    private Array $objects = array();

    public function __construct() 
    {
        $this->objects[0] = new Element1();
        $this->objects[1] = new Element2();
        $this->objects[2] = new Element3();
    }


    public function method_1()
    {
        $this->objects[0]->method();
    }


    public function method_2()
    {
        $this->objects[1]->method();
    }


    public function method_3()
    {
        $this->objects[2]->method();
    }

    public function api_element_1()
    {
        return $this->objects[0];
    }
}


$api = new Facade();
$api->method_1();
$api->method_2();
$api->method_3();
var_dump($api->api_element_1());