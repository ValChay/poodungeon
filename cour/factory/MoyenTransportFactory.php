<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 10/12/18
 * Time: 11:50
 */


/* On délègue à la fabrique la gestion dune instance dun moyen de transport
sans que lutilisateur ait besoin de savoir quelle est la classe implémente

Et ainsi, pas de necessité de connaître comme se construit l'instance*/
class MoyenTransportFactory
{

    public function createMoyenTransport(): MoyenTransport
    {
        return new Tram();

    }
}