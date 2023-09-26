<?php


include_once __DIR__ . "/../vendor/autoload.php";

use App\SystemServices\MonologFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Selective\BasePath\BasePathMiddleware;
use Slim\Factory\AppFactory;

MonologFactory::getInstance()->debug("main executando");

//create a log channel
$app = AppFactory::create();

$app->addRoutingMiddleware();
$app->add(new BasePathMiddleware($app));
$app->addErrorMiddleware(true, true, true);


$app->get('/aaa', function(Request $request, Response $response){
$response->getBody()->write("Hello World");
return $response;
});

$app->run();

