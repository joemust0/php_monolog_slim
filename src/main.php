<?php

include_once __DIR__ . "/../vendor/autoload.php";

use App\SystemServices\MonologFactory;


//create a log channel
$logger = MonologFactory::getInstance();


$logger->info("apenas uma informação que eu programei julgo relevante loggar");
$logger->debug("Arquivo main.php rodando...");
$logger->error("Isso seria se meu app desse um erro...");

