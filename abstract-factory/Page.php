<?php

require_once 'DocumentFactory.php';

class Page
{
    private DocumentFactory $document_factory;


    public function __construct(DocumentFactory $document_factory)
    {
        $this->document_factory = $document_factory;
    }


    public function render()
    {
        $document = $this->document_factory->create();
        echo $document->generate().'<br/>';
    }
}