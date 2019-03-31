<?php

namespace GoogleActionsSdk\Response\RichResponse\Item\MediaCollection;

use GoogleActionsSdk\Response\RichResponse\Item\MediaType\MediaTypeInterface;

/**
 * Class AudioCollection
 * @package GoogleActionsSdk\Response\RichResponse\Item\MediaCollection
 */
class AudioCollection implements MediaCollectionInterface
{
    /** @var string  */
    protected $mediaType = 'AUDIO';

    /** @var array  */
    protected $items = [];

    /**
     * @param MediaTypeInterface $item
     * @return MediaCollectionInterface
     */
    public function addItem(MediaTypeInterface $item): MediaCollectionInterface
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->mediaType;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
