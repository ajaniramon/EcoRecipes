<?php
namespace presentation;
$controller = new TestController(new \persistence\ConnectionFactoryImplMySQLi());

echo $controller->test();