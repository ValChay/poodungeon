<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 10/12/18
 * Time: 10:46
 */

class Singleton
{
    /**
     * on conserve dans un attribut static privé la référence de l'instance
     * (si elle existe)
     * Comme c'est static c'est global donc sa gère l'unicité
     */
    //en static on a pas accès au this donc on met les attribut en en static pui appel avec self
    private static $instance;
/*On bloque l'accès au constructeur*/

    public function __construct()
    {
    }
// donne accès à l'instance
    public static function getInstance()
    {
            if(!self::$instance){
                self::$instance = new self();
            }
            return self::$instance;
    }

}