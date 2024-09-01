<?php

namespace Sora\Core;

class Application {
  public $router;


  public function __construct(){
    $router = new router();
  }

  public function run(){
    $this->router->dispatch();
  }
}
?>
