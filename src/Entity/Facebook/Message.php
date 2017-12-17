<?php
/**
 * Created by PhpStorm.
 * User: povilas
 * Date: 17.12.17
 * Time: 13.36
 */

namespace My\Entity\Facebook;



class Message
{
    public $message_text;


    /**
     * @return mixed
     */
    public function getMessageText()
    {
        return $this->message_text;
    }

    /**
     * @param mixed $message_text
     */
    public function setMessageText($message_text)
    {
        $this->message_text = $message_text;
    }


}