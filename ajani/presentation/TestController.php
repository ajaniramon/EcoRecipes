<?php
namespace presentation;
use persistence\ConnectionFactory;
/**
 * Created by PhpStorm.
 * User: rmartinez
 * Date: 26/05/2016
 * Time: 11:36
 */
class TestController
{
    private $connectionFactory;

    public function __construct(\persistence\ConnectionFactory $connectionFactory)
    {
        $this->connectionFactory = $connectionFactory;
    }

    public function test(){
        $connection = $this->connectionFactory->getConnection("localhost","shop","owshop","shop14");
        print_r($connection);
    echo "<h1> Hello World </h1>";
}
}