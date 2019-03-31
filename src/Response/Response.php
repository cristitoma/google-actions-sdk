<?php

namespace GoogleActionsSdk\Response;

use GoogleActionsSdk\Request\User\UserStorage;
use GoogleActionsSdk\Response\RichResponse\RichResponse;

/**
 * Class Response
 * @package GoogleActionsSdk\Response
 */
class Response implements \JsonSerializable
{
    /** @var bool */
    protected $expectUserResponse = true;

    /** @var RichResponse */
    protected $richResponse;

    /** @var UserStorage */
    protected $userStorage;

    /**
     * @return bool
     */
    public function isExpectUserResponse(): bool
    {
        return $this->expectUserResponse;
    }

    /**
     * @param bool $expectUserResponse
     * @return Response
     */
    public function setExpectUserResponse(bool $expectUserResponse): Response
    {
        $this->expectUserResponse = $expectUserResponse;

        return $this;
    }

    /**
     * @return RichResponse
     */
    public function getRichResponse(): RichResponse
    {
        return $this->richResponse;
    }

    /**
     * @param RichResponse $richResponse
     * @return Response
     */
    public function setRichResponse(RichResponse $richResponse): Response
    {
        $this->richResponse = $richResponse;

        return $this;
    }

    /**
     * @return UserStorage
     */
    public function getUserStorage(): UserStorage
    {
        return $this->userStorage;
    }

    /**
     * @param UserStorage $userStorage
     * @return Response
     */
    public function setUserStorage(UserStorage $userStorage): Response
    {
        $this->userStorage = $userStorage;

        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $googleResponse = [];
        $googleResponse['expectUserResponse'] = $this->expectUserResponse;
        if ($this->richResponse instanceof RichResponse) {
            $googleResponse['richResponse'] = $this->richResponse;
        }
        if ($this->userStorage instanceof UserStorage) {
            $googleResponse['userStorage'] = json_encode($this->userStorage);
        }

        return [
            'payload' => [
                'google' => $googleResponse
            ]
        ];
    }
}
