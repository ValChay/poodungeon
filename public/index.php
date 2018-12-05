<?php

require __DIR__.'/../src/autoload.php';

$dungeon = new POE\Dungeon();

$document = $dungeon->reportSituation();

echo $document;


/* L'nevoi du document se fait à la fin

il n'y a plus de traitement à faire, donc plus derreur possible
*/
var_dump($document);