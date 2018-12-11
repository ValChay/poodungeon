<?php

/*Définir où se trouve la configuration de Doctrine
on choisit dutiliser la syntaxe des annotations sur nos classe dentité*/
$isDevMode = true;
$config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(array(__DIR__."/../src"), $isDevMode);

$connexionConfig = [
    'driver' =>'pdo_mysql',
    'user' => 'valentin',
    'password' => 'secret',
    'dbname'   => 'dungeon',
];
$entityManager = \Doctrine\ORM\EntityManager::create($connexionConfig, $config);