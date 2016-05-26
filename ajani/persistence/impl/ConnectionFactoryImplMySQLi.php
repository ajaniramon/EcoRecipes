<?php
namespace persistence;

class ConnectionFactoryImplMySQLi implements ConnectionFactory
{

    public function getConnection($host, $database, $username, $password)
    {
        try{
            $link = mysqli_connect($host,$username,$password,$database);
        }catch(Exception $e){
            throw new Exception($e);
        }
     
        return $link;
        
    }
}