<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 10/12/18
 * Time: 14:33
 */

/*
 * Notre objet adaapteur se comporte comme un ibket USB-C,
 * mai en interne, il utilise en réalité un objet Micro-USB*/
class UsbcToMicroUsbAdaptater implements UsbcInterface
{

    private $microUsbObject;

    /**
     * UsbcToMicroUsbAdaptater constructor.
     * @param $microUsbObject
     */
    public function __construct(MicroUsbInterface $charger)
    {
        $this->microUsbObject = $charger;
    }


    public function charger()
    {
        $this->microUsbObject->recharger();
    }
}