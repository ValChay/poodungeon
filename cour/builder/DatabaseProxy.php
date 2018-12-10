<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 10/12/18
 * Time: 12:49
 */

class DatabaseProxy
{
private $localCache = [];
private $database;

    /**
        dune manière ou lautre le proxy set dintermédiaire vers un objet tiers dont il possède la référence
     */
    public function __construct(DatabaseConnection $database)
    {
        $this->database = $database;

    }
    /*exemple de fonctionnalité supplémentire, stocker en cache PHp une donée venant de la base*/
    public function loadArticle( int $id){

        if (!isset($this->localVache[$id])){
            $this->localCache[$id] = $this->database->load($id);
        }
        return $this->localCache[$id];
    }
}