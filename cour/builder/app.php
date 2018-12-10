<?php
$builder = new FormBuilder();

//imaginons traitement depuis code metier
$builder->add('text');
$builder->add('select');

//ensuite ajout depuis un autre code

$builder->add('number');

// a la fin on récupère l'ensemble
$form = $builder->getForm();

