<?php

namespace GoogleActionsSdk\Response\RichResponse\Item\MediaCollection;

use GoogleActionsSdk\Response\RichResponse\Item\MediaType\MediaTypeInterface;

/**
 * Interface MediaCollectionInterface
 * @package GoogleActionsSdk\Response\RichResponse\Item\MediaCollection
 */
interface MediaCollectionInterface
{
    public function getType(): string;
    public function addItem(MediaTypeInterface $item): MediaCollectionInterface;
    public function getItems(): array;
}
