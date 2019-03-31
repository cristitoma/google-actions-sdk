<?php

namespace GoogleActionsSdk\Request\User;

/**
 * Class User
 * @package GoogleActionsSdk\Request\User
 */
class User
{
    /** @var UserStorage */
    protected $userStorage;

    /** @var string  */
    protected $lastSeen = '';

    /** @var string  */
    protected $locale = '';

    /** @var string  */
    protected $userId = '';

    /**
     * @return mixed
     */
    public function getUserStorage(): ?UserStorage
    {
        return $this->userStorage;
    }

    /**
     * @param $userStorage
     * @return User
     */
    public function setUserStorage(UserStorage $userStorage): User
    {
        $this->userStorage = $userStorage;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastSeen(): string
    {
        return $this->lastSeen;
    }

    /**
     * @param string $lastSeen
     * @return User
     */
    public function setLastSeen(string $lastSeen): User
    {
        $this->lastSeen = $lastSeen;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     * @return User
     */
    public function setLocale(string $locale): User
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return User
     */
    public function setUserId(string $userId): User
    {
        $this->userId = $userId;

        return $this;
    }
}
