<?php
/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 06/12/18
 * Time: 13:57
 */

namespace POE\database;


class Connection
{

    private  $connection;
    public function __construct()
    {
        $this->connexion = new \PDO('mysql:dbname=dungeon;host=localhost', 'root', 'root');
    }

    public function getConnection(): \PDO{

        return $this->connexion;
    }

}