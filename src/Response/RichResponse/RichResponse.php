<?php

namespace GoogleActionsSdk\Response\RichResponse;

use GoogleActionsSdk\Response\RichResponse\Item\RichResponseItemInterface;

/**
 * Class RichResponse
 * @package GoogleActionsSdk\Response\RichResponse
 */
class RichResponse implements \JsonSerializable
{
    /** @var array  */
    protected $items = [];

    /** @var array  */
    protected $suggestions = [];

    /**
     * @param RichResponseItemInterface $item
     * @return RichResponse
     */
    public function setItem(RichResponseItemInterface $item): RichResponse
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Suggestion $suggestion
     * @return RichResponse
     */
    public function setSuggestion(Suggestion $suggestion): RichResponse
    {
        $this->suggestions[] = $suggestion;

        return $this;
    }

    /**
     * @return array
     */
    public function getSuggestions(): array
    {
        return $this->suggestions;
    }

    public function jsonSerialize()
    {
        $response = [];
        if (!empty($this->items)) {
            foreach ($this->items as $item) {
                $response['items'][] = $item;
            }
        }

        if (!empty($this->suggestions)) {
            foreach ($this->suggestions as $suggestion) {
                $response['suggestions'][] = $suggestion;
            }
        }

        return $response;
    }
}
