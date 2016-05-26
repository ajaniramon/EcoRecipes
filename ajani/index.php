<?php
$controller = new TestController(new \persistence\ConnectionFactoryImplMySQLi());

echo $controller->test();