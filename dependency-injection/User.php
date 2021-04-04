<?php

class Session
{
    public function __construct(string $name = 'PHP_SESSION')
    {
        session_name($name);
        session_start();
    }


    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }


    public function get($key)
    {
        return $_SESSION[$key];
    }
}


class User
{
    protected $session;

    public function __construct($session)
    {
        $this->session = $session;
    }


    public function set_name($name)
    {
        $this->session->set('name', $name);
    }

    public function get_name()
    {
        return $this->session->get('name');
    }
}

$session = new Session('MOJA_SESJA');
$user = new User($session);
$user->set_name('moj_login');

echo $user->get_name();