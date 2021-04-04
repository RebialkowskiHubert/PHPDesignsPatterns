<?php

/*
Example use:
Separate creation element from busines logic
*/

class Player
{
    private string $name;

    public function set_name(string $name)
    {
        $this->name = $name;
    }


    public function render() : string
    {
        return $this->name;
    }
}



interface Builder
{
    public function build_player();
    public function get_player() : Player;
}


class FlashBuilder implements Builder
{
    private Player $player;


    public function __construct()
    {
        $this->player = new Player();
    }


    public function build_player()
    {
        $this->player->set_name('Flash');
    }


    public function get_player() : Player
    {
        return $this->player;
    }
}



class HTMLBuilder implements Builder
{
    private Player $player;


    public function __construct()
    {
        $this->player = new Player();
    }


    public function build_player()
    {
        $this->player->set_name('HTML');
    }


    public function get_player() : Player
    {
        return $this->player;
    }
}



class Director
{
    private Builder $builder;


    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }


    public function construct()
    {
        $this->builder->build_player();
    }


    public function get_result() : Player
    {
        return $this->builder->get_player();
    }
}


// Usage
$html = new HTMLBuilder();
$flash = new FlashBuilder();

$director = new Director($flash);
$director->construct();
$player = $director->get_result();
echo $player->render().'<br/>'; 
 
$director2 = new Director($html);
$director2->construct();
$player2 = $director2->get_result();
echo $player2->render().'<br/>'; 