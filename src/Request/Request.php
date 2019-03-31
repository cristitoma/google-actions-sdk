<?php

namespace GoogleActionsSdk\Request;

use GoogleActionsSdk\Request\User\User;

/**
 * Class Request
 * @package GoogleActionsSdk\Request
 */
class Request
{
    /** @var array  */
    protected $originalRequest = [];

    /** @var string  */
    protected $intent = '';

    /** @var User */
    protected $user;

    /**
     * @return array
     */
    public function getOriginalRequest(): array
    {
        return $this->originalRequest;
    }

    /**
     * @param array $originalRequest
     * @return Request
     */
    public function setOriginalRequest(array $originalRequest): Request
    {
        $this->originalRequest = $originalRequest;

        return $this;
    }

    /**
     * @return string
     */
    public function getIntent(): string
    {
        return $this->intent;
    }

    /**
     * @param string $intent
     * @return Request
     */
    public function setIntent(string $intent): Request
    {
        $this->intent = $intent;

        return $this;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return Request
     */
    public function setUser(User $user): Request
    {
        $this->user = $user;

        return $this;
    }
}
