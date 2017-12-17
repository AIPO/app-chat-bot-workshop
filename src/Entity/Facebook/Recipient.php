<?php
/**
 * Created by PhpStorm.
 * User: povilas
 * Date: 17.12.17
 * Time: 13.42
 */

namespace My\Entity\Facebook;


class Recipient
{
public $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}