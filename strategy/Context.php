<?php

/*
Example use:
Lots of implementation of one function instead of multiple if instructions
*/

/**
 * Base interface, which implement functions to override
 */
interface Tax
{
    public function count(float $net) : float;
}



/**
 * Class to count tax in PL
 * 
 */
class TaxPL implements Tax
{
    public function count(float $net) : float
    {
        return 0.23 * $net;
    }
}



/**
 * Class to count tax in EN
 * 
 */
class TaxEN implements Tax
{
    public function count(float $net) : float
    {
        return 0.15 * $net;
    }
}



/**
 * Class to count tax in DE
 * 
 */
class TaxDE implements Tax
{
    public function count(float $net) : float
    {
        return 0.3 * $net;
    }
}


/**
 * Controller class
 * 
 */
class Context
{
    private Tax $tax;

    public function get_tax() : Tax
    {
        return $this->tax;
    }


    public function set_tax(Tax $tax)
    {
        $this->tax = $tax;
    }
}



/* Execute */
$tax = new Context();
$tax->set_tax(new TaxPL());
echo $tax->get_tax()->count(100).PHP_EOL;

$tax->set_tax(new TaxEN());
echo $tax->get_tax()->count(100).PHP_EOL;

$tax->set_tax(new TaxDE());
echo $tax->get_tax()->count(100).PHP_EOL;