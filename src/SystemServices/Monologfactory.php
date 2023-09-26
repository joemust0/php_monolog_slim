<?php

use MonoLog\Level;
use MonoLog\Logger;
use MonoLog\handler\StraemHandler;

Class MonologFactory{

    private static $logger;

    public static function getInstance(){
        if(self::$logger == null){
        self::$logger = new Logger('MEUAPP');
        self::$logger->pushHandler(new StraemHandler('meuslog.log', Level::Error));
            return self::$logger;
        }
        else {
            return self::$logger;
        }
    }
}