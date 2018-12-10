<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 10/12/18
 * Time: 12:20
 */

class FormBuilder
{
    private $fields = [];

    /*
     * Exemples de méthode pour décrire pas à pas la construction de l'instance voulus*/

    public function addField(string $types)
    {
        $this->fields[] = $types;

    }

    /**
     *exemple de méthode pour récupérer le résultat final
     * de l'instance battie
     */
    public function getForm(): Form
    {
        return new Form($this->fields);
    }

}