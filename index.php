<?php
require_once "vendor/autoload.php";

use \Hcode\Page;
use \Slim\Slim;

$app = new Slim();
$app->config('debug', true);

$app->get('/', function () {
	$page = new Page();
	$page->setTPL("index");
});

$app->run();

?>