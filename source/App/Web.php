<?php

namespace Source\App;

use League\Plates\Engine;

class Web
{
    
    private $view;

    public function __construct() 
    {
        $this->view = Engine::create(__DIR__ . "/../Views/template", "php");

    }

    public function main(): void
    {
        echo $this->view->render("index");
    } 

}
