<?php

require_once __DIR__ . "/../vendor/autoload.php";

use app\controllers\AuthController;
use app\controllers\CartController;
use app\controllers\HomeController;
use app\controllers\ProductController;
use app\controllers\UserController;
use app\core\Application;
use app\controllers\DashboardController;


$app = new Application();
$app->router->get("/", [HomeController::class, 'home']);
$app->router->get("/home", [HomeController::class, 'home']);
$app->router->get('/about', [HomeController::class, 'about']);
$app->router->get('/contact', [HomeController::class, 'contact']);
$app->router->get('/services', [HomeController::class, 'services']);
$app->router->get('/cart', [CartController::class, 'cart']);
$app->router->get('/shop', [HomeController::class, 'shop']);
$app->router->get("/dashboard", [DashboardController::class, 'index']);
$app->router->get("/userList", [UserController::class, 'list']);
$app->router->post('/addToCart', [CartController::class, 'addToCart']);


$app->router->get("/userOne", [UserController::class, 'one']);
$app->router->get("/productList", [ProductController::class, 'list']);
$app->router->get("/productOne", [ProductController::class, 'one']);
$app->router->get("/userCreate", [UserController::class, 'create']);
$app->router->get("/registration", [AuthController::class, 'registration']);
$app->router->get("/login", [AuthController::class, 'login']);
$app->router->get("/accessDenied", [AuthController::class, 'accessDenied']);
$app->router->get("/logout", [AuthController::class, 'logout']);



//todo :: change to post method
$app->router->post("/userPost", [UserController::class, 'createPost']);
$app->router->post("/registrationPost", [AuthController::class, 'registrationPost']);
$app->router->post("/loginPost", [AuthController::class, 'loginPost']);
$app->router->get("/productCreate", [ProductController::class, 'create']);

$app->router->put("/update", "update.php");
$app->router->delete("/delete", "delete.php");

$app->run();