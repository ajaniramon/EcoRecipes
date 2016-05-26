<?php
namespace persistence;
/**
 * Created by PhpStorm.
 * User: rmartinez
 * Date: 26/05/2016
 * Time: 11:13
 */
interface ConnectionFactory
{
    public function getConnection($host, $database, $username, $password);
}