<?php

namespace GoogleActionsSdk\Request\User;

/**
 * Class UserStorage
 * @package GoogleActionsSdk\Request\User
 */
class UserStorage implements \JsonSerializable
{
    const LATEST_NEWS_ID = 'latestNewsId';

    /** @var array  */
    protected $storage = [];

    /**
     * @param string $key
     * @param string $value
     * @return UserStorage
     */
    public function set(string $key, string $value): UserStorage
    {
        $this->storage[$key] = $value;

        return $this;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
        return isset($this->storage[$key]);
    }

    /**
     * @param string $key
     * @return string
     */
    public function get(string $key): string
    {
        $value = '';
        if ($this->has($key)) {
            $value = $this->storage[$key];
        }

        return $value;
    }

    public function jsonSerialize()
    {
        return $this->storage;
    }
}
