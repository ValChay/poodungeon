<?php

namespace POE;

use POE\brawl\Ring;
use POE\database\CharacterFactory;
use POE\database\CharacterManager;
use POE\database\CharacterLoader;

use POE\database\Connection;

class Dungeon
{
    public function brawl()
    {
        $loader = new CharacterLoader(new Connection());

        $attacker = $loader->load(1);
        $defender = $loader->load(29);

        $ring = new Ring($attacker, $defender);
        // toute les variables local à la méthode sont disponible dans le template
        $fightReport = $ring->fight();

        return $this->render('brawl', ['fightReport' => $fightReport]);

    }

    public function createCharacter()
    {
        /* Si la méthode HTTP est"POST" alors le client essaye de transmettre les données
        du formulaire.Quand il veut juste l'affichage du formulaire il requête avec GET */
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_POST['type']) || !in_array($_POST['type'], ['warrior', 'thief', 'wizard'])) {
                // gestion de l'erreur
            }

            /*On délégue à notre fabrique de personnage tout le savoir faire pour créer un nouveau personnage
            à partir d'un type et d'un nom */
            $factory = new CharacterFactory();
            $character = $factory->generate($_POST['name'], $_POST['type']);

            $manager = new CharacterManager(new Connection());
            $manager->save($character);
        }
        return $this->render('createCharacter');
    }

    public function reportSituation()
    {

        /*
         * On passe par un objet intermédiaire pour récupérer notre personnage
         * par anticipation avec le fait qu'il viendra de la base de données*/
        $loader = new CharacterLoader(new Connection());
        $character = $loader->load(1);

        /*
         * Démarrage tampon de sortie
         * Dans cette 'zone" tampon, le html généré par le fichier inclus sera stocké sans partir directement vers le serveur HTTP
         * */

        return $this->render('reportSituation', ['character' => $character]);

    }

    private function render(string $filename, array $data = [])
    {
       /* a partir du tableau ssociatif $data reçu en paramètre
       on génère autant de variable qu'il ya d'element dans le tableau
       chaque variable portera le nom de la clé*/
        extract($data);
        /*
         * Démarrage tampon de sortie
         * Dans cette 'zone" tampon, le html généré par le fichier inclus sera stocké sans partir directement vers le serveur HTTP
         * */

        ob_start();
        include __DIR__ . '/../../template/' . $filename . '.html.php';
        /*
         * Après avoir écrit le document (capturé dans le tampon de sortie)
         * on décide de le faire redesencdre dans une vairiable PHP et on néttoie
         * (vide + désactive) le système de tamponn*/
        $output = ob_get_clean();

        return $output;

    }
}