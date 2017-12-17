<?php
/**
 * Created by PhpStorm.
 * User: povilas
 * Date: 17.12.17
 * Time: 13.38
 */

namespace My\Entity\Facebook;


class QuickReply
{
    const CONTENT_TYPE_TEXT = 'text';
    private $content_type;
    private $title;
    private $payload;

    /**
     * QuickReply constructor.
     * @param $content_type
     */
    public function __construct($content_type)
    {
        $this->content_type = self::CONTENT_TYPE_TEXT;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * @param string $content_type
     */
    public function setContentType($content_type)
    {
        $this->content_type = $content_type;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param mixed $payload
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;
    }

}