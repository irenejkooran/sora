<?php 
require __DIR__."/../vendor/autoload.php";


use Sora\Core\Application;
use Sora\Controllers\UserController;
use Sora\Controllers\HomeController;


$app = new Sora\Core\Application();

$app->router->get('/', [HomeController::class, 'index']);
$app->router->get('/login', [UserController::class, 'login']);
$app->router->post('/login', [UserController::class, 'login']);
$app->router->get('/register', [UserController::class, 'register']);
$app->router->post('/register', [UserController::class, 'register']);
$app->router->get('/logout', [UserController::class, 'logout']);

$app->run();


 
?>

