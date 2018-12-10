<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 10/12/18
 * Time: 11:49
 */

/* linterface définit une sorte de contrat

Les entetes de méthodes devront être respectées par les classes
qui implémentent  cette interface (nom, types de paramètre, type de retour)

Ca permet d'isoler le développement de l'implémentation d'une part et celui de l'utilisation dautre part.

De fait, de changer dimplémentation sans avoir à changer d'utilisation*/
interface MoyenTransport
{
    public function seDeplacer($adresseDepart, $adresseArrivee);


}