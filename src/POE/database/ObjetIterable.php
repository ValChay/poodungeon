<?php
/**
 * Created by PhpStorm.
 * User: valentin
 * Date: 10/12/18
 * Time: 16:30
 */

namespace POE\database;


class ObjetIterable implements \Iterator
{

    private $position = 0;
    private $array = [];

    /**
     * ObjetIterable constructor.
     * @param array $var
     */
    public function __construct(array $array)
    {
           $this->array = $array;
    }

    public function rewind() {
        $this->position = 0;
    }

    public function current() {

        return $this->array[$this->position];
    }

    public function key() {

        return $this->position;
    }

    public function next() {

        ++$this->position;
    }

    public function valid() {

        return isset($this->array[$this->position]);
    }

}