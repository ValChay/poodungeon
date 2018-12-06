<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/css/theme.css">
</head>
<body>
<h1><?= $character->getName() ?> </h1>
<div id="pdv"> Point de vie :
    <progress max="<?= $character->getLifeMax() ?>" value="<?= $character->getLifeCurrent() ?>">
        <?= $character->getLifeCurrent() ?>/ <?= $character->getLifeMax() ?> PV
    </progress>
</div>
<div id="energy"> Energie :
    <progress max="<?= $character->getEnergyMax() ?>" value="<?= $character->getEnergyCurrent() ?>">
        <?= $character->getEnergyCurrent() ?>/ <?= $character->getEnergyMax() ?> MANA
    </progress>
</div>
</body>
</html>

<?php

?>
