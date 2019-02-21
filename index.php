<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    // inicio do que esta dentro da rota
	$page = new Page();

	$page->setTpl("index");
	// fim do que esta dentro da rota
});

$app->get('/admin', function() {
    // inicio do que esta dentro da rota
	$page = new PageAdmin();

	$page->setTpl("index");
	// fim do que esta dentro da rota
});

$app->run();

 ?>