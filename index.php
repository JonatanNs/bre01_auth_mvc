<?php 

require "config/autoload.php";

// Instancier la classe Router
$router = new Router();
// Appeler la méthode handleRequest avec le tableau $_GET
$router->handleRequest($_GET);

?>