<?php

/*
Example use
Clone the object, that already exists with the default parameters 
and assigns only options which are other options
*/


/**
 * Book is base object with default params
 * 
 */
abstract class Book
{
    protected string $title;
    protected string $topic;

    //Clone function is abstract -> implement it in child classes
    abstract function __clone();

    public function get_title() : string
    {
        return $this->title;
    }

    public function set_title(string $title)
    {
        $this->title = $title;
    }

    public function get_topic() : string
    {
        return $this->topic;
    }
}



class PHPBook extends Book
{
    public function __construct()
    {
        $this->topic = "PHP";
    }

    function __clone() {}
}



class CSharpBook extends Book
{
    public function __construct()
    {
        $this->topic = "C#";
    }

    function __clone() {}
}



/* Execute */
$book1 = new PHPBook();
$book1->set_title("Książka 1");
$book2 = clone $book1;
$book2->set_title("Książka 2");

$csharpBook = new CSharpBook();
$csharpBook->set_title("Książka 1");
$csharpBook2 = clone $csharpBook;
$csharpBook2->set_title("Książka 2");

echo "Kategoria: ".$book1->get_topic()." Tytuł: ".$book1->get_title()."<br/>";
echo "Kategoria: ".$book2->get_topic()." Tytuł: ".$book2->get_title()."<br/>";
echo "Kategoria: ".$csharpBook->get_topic()." Tytuł: ".$csharpBook->get_title()."<br/>";
echo "Kategoria: ".$csharpBook2->get_topic()." Tytuł: ".$csharpBook2->get_title()."<br/>";