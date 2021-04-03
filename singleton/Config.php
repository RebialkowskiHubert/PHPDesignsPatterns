<?php

class Config 
{
    private static $instance;
    private $config = array(
        "login" => "mylogin",
        "password" => "P@ss#ord1",
        "language" => "pl"
    );


    public static function get_instance() 
    {
        if(self::$instance === null) {
            self::$instance = new Config();
        }

        return self::$instance;
    }


    public function get_language() : string
    {
        return $this->config["language"];
    }

    public function set_language(string $language)
    {
        $this->config["language"] = $language;
    }


    private function __construct() {}

    private function __clone() {}
}

$conf1 = Config::get_instance();
echo $conf1->get_language().PHP_EOL;

$conf2 = Config::get_instance();
$conf2->set_language("en");
echo $conf1->get_language();