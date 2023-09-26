<?php

namespace App\SystemServices;

use Monolog\Handler\StreamHandler;
use MonoLog\Level;
use Monolog\Logger;

Class MonologFactory{

    private static $logger;

    public static function getInstance(){
        if(self::$logger == null){
            self::$logger = new Logger("MEUAPP");
            self::$logger->pushHandler(new StreamHandler('meuslog.log', Level::Debug));
            return self::$logger;
        }
        else {
            return self::$logger;
        }
    }
}