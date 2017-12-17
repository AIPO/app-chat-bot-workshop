<?php
/**
 * Created by PhpStorm.
 * User: povilas
 * Date: 17.12.17
 * Time: 13.45
 */

namespace My\Entity\Facebook;



class Response
{
    public $message;

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }
}