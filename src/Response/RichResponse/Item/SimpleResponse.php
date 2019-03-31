<?php

namespace GoogleActionsSdk\Response\RichResponse\Item;

/**
 * Class SimpleResponse
 * @package GoogleActionsSdk\Response\RichResponse\Item
 */
class SimpleResponse implements RichResponseItemInterface, \JsonSerializable
{
    /** @var string */
    protected $textToSpeech = '';

    /**
     * @return string
     */
    public function getTextToSpeech(): string
    {
        return $this->textToSpeech;
    }

    /**
     * @param string $textToSpeech
     * @return SimpleResponse
     */
    public function setTextToSpeech(string $textToSpeech): SimpleResponse
    {
        $this->textToSpeech = $textToSpeech;

        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'simpleResponse' => [
                'textToSpeech' => $this->textToSpeech
            ]
        ];
    }
}
