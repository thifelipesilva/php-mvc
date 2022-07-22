<?php

require_once __DIR__ . '/../vendor/autoload.php';


$caminho = $_SERVER['PATH_INFO']; //nome da rota
$routes = require __DIR__ . '/../confi/routes.php'; //array de rotas

//checando se o caminho contem nas rotas
if (!array_key_exists($caminho, $routes)) {
    http_response_code(404);
    exit();
}

session_start();

$ehRotaDeLogin = stripos($caminho, 'login');
if (!isset($_SESSION['logado']) && $ehRotaDeLogin === false) {
    header('Location: /login');
    exit();
}

$classeControladora = $routes[$caminho]; //nome da classe

$controlador = new $classeControladora(); //instanciando uma classe atrave de uma string
$controlador->processaRequisicao();

