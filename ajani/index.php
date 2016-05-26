<?php
namespace presentation;
use presentation\TestController;

$controller = new TestController(new \persistence\ConnectionFactoryImplMySQLi());

echo $controller->test();