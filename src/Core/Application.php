<?php

namespace Sora\Core;

class Application {
  public $router;


  public function __construct(Sora\Core\Router $router){
    $this->router = $router;
  }

  public function run(){
    $this->router->dispatch();
  }
}
?>
