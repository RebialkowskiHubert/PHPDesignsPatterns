<?php

/*
Example use
To separate logic
*/

interface HighResolutionImage
{
    function display();
}


class Image implements HighResolutionImage
{
    private $options;


    public function __construct($options) 
    {
        $this->options = $options;
    }


    public function display()
    {
        echo "Display options";
    }
}


class ProxyImage implements HighResolutionImage
{
    private $options;
    private $password;
    private $image = null;

    public function __construct($options, $password) 
    {
        $this->options = $options;
        $this->password = $password;
    }

    public function display()
    {
        if($this->password === 'tajne') {
            if($this->image === null) {
                $this->image = new Image($this->options);
            }

            $this->image->display();
        } else {
            echo 'Dostęp zabroniony';
        }
    }
}


//Usage
$image = new ProxyImage(array('width' => 300, 'height' => 200), 'tajne');
$image2 = new ProxyImage(array('width' => 300, 'height' => 200), 'tajne2');

$image->display();
$image2->display();