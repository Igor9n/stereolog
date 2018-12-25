<?php

namespace Stereolog;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class MyLogger
{
    public $logger;
    public function __construct($name){
        $this->logger = new Logger($name);
        $this->logger->pushHandler(new StreamHandler(__DIR__.'/logs/all.log'));
    }
    public function logInfo($data){
        $this->logger->warning($data);
    }
}