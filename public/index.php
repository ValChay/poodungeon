<?php

require __DIR__ . '/../src/autoload.php';

$dungeon = new POE\Dungeon();

/* On décide de définir dans un tableau associatif la liste des pages gérés par l'application
la clé représente le chemin d'url et la valeur est le nom de la méthode à éxécuter*/
$pages = [
    '/creation' => 'createCharacter',
    '/jeu/baston' => 'brawl',
    '/jeu/situation' => 'reportSituation',
];

/*Si lurl demander par le client n'est pas dans la liste on lui affiche un 404*/
if (!key_exists($_SERVER['REQUEST_URI'], $pages)) {
    http_response_code(404);
    echo '<a href="/creation"> Créer votre personnage</a>
          <a href="/jeu/situation"> Situation du donjon</a>
          <a href="/jeu/baston"> Fight</a>';
    die;
}

/* Si lurl existe bien on peut appeler la méthode correspondante comme
le nom de la méthode est stockée dans une variable on passe par call user pour lappeler*/
$document = call_user_func([$dungeon, $pages[$_SERVER['REQUEST_URI']]]);


/* L'nevoi du document se fait à la fin
il n'y a plus de traitement à faire, donc plus derreur possible
*/

echo $document;

?>




