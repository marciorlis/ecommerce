<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    // inicio do que esta dentro da rota
	$page = new Page();

	$page->setTpl("index.html");
	// fim do que esta dentro da rota
});

$app->run();

 ?>