<?php

/*
Example use
When we need add event listener on class
*/

class CacheObserver implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo 'Odświeżanie cache<br/>';
    }
}


class RSSObserver implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo 'Odswieżanie RSS<br/>';
    }
}


class NewsletterObserver implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo 'Odswieżanie newslettera<br/>';
    }
}


class News implements SplSubject
{
    private Array $observers = array();


    public function attach(SplObserver $observer)
    {
        $this->observers[spl_object_hash($observer)] = $observer;
    }


    public function detach(SplObserver $observer)
    {
        unset($this->observers[spl_object_hash($observer)]);
    }


    public function notify()
    {
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }


    public function add(Array $data)
    {
        echo 'Dodaj news do bazy<br/>';
        $this->notify();
    }
}


//Usage
$news = new News();

$news->attach(new RSSObserver());
$news->attach(new CacheObserver());
$news->attach(new NewsletterObserver());

$news->add(array(
    'title' => 'Tytuł',
    'content' => 'blabla'
));