<?php

namespace GoogleActionsSdk\Response\RichResponse\Item\MediaType;

/**
 * Class Audio
 * @package GoogleActionsSdk\Response\RichResponse\Item\MediaType
 */
class Audio implements MediaTypeInterface, \JsonSerializable
{
    /** @var string  */
    protected $contentUrl = '';

    /** @var string  */
    protected $name = '';

    /** @var string  */
    protected $description = '';

    /** @var string  */
    protected $iconUrl = '';

    /**
     * @return string
     */
    public function getContentUrl(): string
    {
        return $this->contentUrl;
    }

    /**
     * @param string $contentUrl
     * @return $this
     */
    public function setContentUrl(string $contentUrl): Audio
    {
        $this->contentUrl = $contentUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): Audio
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description): Audio
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getIconUrl(): string
    {
        return $this->iconUrl;
    }

    /**
     * @param string $iconUrl
     * @return $this
     */
    public function setIconUrl(string $iconUrl): Audio
    {
        $this->iconUrl = $iconUrl;

        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'contentUrl' => $this->contentUrl,
            'name' => $this->name,
            'description' => $this->description,
            'icon' => [
                'url' => $this->iconUrl
            ]
        ];
    }
}
