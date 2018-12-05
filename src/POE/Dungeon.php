<?php

namespace POE;

use POE\database\CharacterLoader;

class Dungeon
{

    public function reportSituation()
    {
        $loader = new CharacterLoader();
        $character = $loader->load();

        // recupere tout ce quil ya dans le tempon de sorti et jarrete le tempon
        ob_start();
        include  __DIR__.'/../../template/reportSituation.html.php';
        $output = ob_get_clean();

        return $output;

    }
}