<?php

namespace GoogleActionsSdk\Response\RichResponse;

/**
 * Class Suggestion
 * @package GoogleActionsSdk\Response\RichResponse
 */
class Suggestion implements \JsonSerializable
{
    /** @var string */
    protected $title = '';

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Suggestion
     */
    public function setTitle(string $title): Suggestion
    {
        $this->title = $title;

        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'title' => $this->title
        ];
    }
}
