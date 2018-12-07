<?php


namespace POE\database;

class CharacterLoader extends Connection
{

    public function load(int $id): Character
    {
        $connexion =  new \PDO('mysql:dbname=dungeon;host=localhost', 'root', 'root');

        $statement = $connexion->prepare('SELECT * FROM  characters WHERE id= :id');
        $statement->execute(['id' => $id]);

        /* ici on veu récupérer les donnée de la table characters directement en tant qu'instance de la classe POE\database\Character
        lattribut statuc <class> contient le nom de la classe pleinement qualifié en tant que chaine de charactere*/

        $statement->setFetchMode(\PDO::FETCH_CLASS, Character::class);
        $statement->execute();
        $character = $statement->fetch();

        return $character;
    }
}