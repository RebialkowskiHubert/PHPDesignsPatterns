<?php

/*
Example use:
Use it when base class can be expanded -> !!! and it's methods
*/


/**
 * Interface defines object's method
 */
interface Pizza
{
    public function get_name() : string;
}


/**
 * Example object
 */
class HawalianPizza implements Pizza
{
    public function get_name() : string
    {
        return "Hawalian Pizza";
    }
}


/**
 * Example object
 */
class DeluxePizza implements Pizza
{
    public function get_name() : string
    {
        return "Deluxe Pizza";
    }
}




/**
 * Interface of creator
 */
interface Creator
{
    public function create(string $type) : Pizza;
}


class ExampleCreator implements Creator
{
    public function create(string $type) : Pizza
    {
        switch($type) {
            case 'Hawalian':
                return new HawalianPizza();

            case 'Deluxe':
                return new DeluxePizza();

            default:
                return null;
        }
    }
}


//Usage
$creator = new ExampleCreator();
$p1 = $creator->create('Hawalian');
$p2 = $creator->create('Deluxe');

echo $p1->get_name().'<br/>';
echo $p2->get_name().'<br/>';