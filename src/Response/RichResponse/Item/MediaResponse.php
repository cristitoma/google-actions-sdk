<?php

namespace GoogleActionsSdk\Response\RichResponse\Item;

use GoogleActionsSdk\Response\RichResponse\Item\MediaCollection\MediaCollectionInterface;

/**
 * Class MediaResponse
 * @package GoogleActionsSdk\Response\RichResponse\Item
 */
class MediaResponse implements RichResponseItemInterface, \JsonSerializable
{
    /** @var MediaCollectionInterface */
    protected $mediaCollection;

    /**
     * @return MediaCollectionInterface
     */
    public function getMediaCollection(): MediaCollectionInterface
    {
        return $this->mediaCollection;
    }

    /**
     * @param MediaCollectionInterface $mediaCollection
     * @return MediaResponse
     */
    public function setMediaCollection(MediaCollectionInterface $mediaCollection): MediaResponse
    {
        $this->mediaCollection = $mediaCollection;

        return $this;
    }

    public function jsonSerialize()
    {
        if ($this->mediaCollection instanceof MediaCollectionInterface) {
            return [
                'mediaResponse' => [
                    'mediaType' => $this->mediaCollection->getType(),
                    'mediaObjects' => $this->mediaCollection->getItems()
                ]
            ];
        }

        return null;
    }
}
