<?php

namespace GoogleActionsSdk\Request;

use GoogleActionsSdk\Request\User\User;
use GoogleActionsSdk\Request\User\UserStorage;

/**
 * Class RequestFactory
 * @package GoogleActionsSdk\Request
 */
class RequestFactory
{
    /**
     * @return Request
     */
    static public function createFromJsonBody(): Request
    {
        $body = json_decode(file_get_contents('php://input') ,true);
        $request = new Request();

        $request->setOriginalRequest($body);
        if (isset($body['queryResult']['intent']['displayName'])) {
            $request->setIntent($body['queryResult']['intent']['displayName']);
        }
        if (isset($body['originalDetectIntentRequest']['payload']['user'])) {
            $user = self::normalizeUser($body['originalDetectIntentRequest']['payload']['user']);
            $request->setUser($user);
        }

        return $request;
    }

    /**
     * @param array $userData
     * @return User
     */
    static protected function normalizeUser(array $userData): User
    {
        $user = new User();
        if (isset($userData['lastSeen'])) {
            $user->setLastSeen($userData['lastSeen']);
        }
        if (isset($userData['locale'])) {
            $user->setLocale($userData['locale']);
        }
        if (isset($userData['userId'])) {
            $user->setUserId($userData['userId']);
        }
        if (isset($userData['userStorage'])) {
            $userStorage = new UserStorage();
            $userStorageData = json_decode($userData['userStorage'], true);
            if (is_array($userStorageData)) {
                foreach ($userStorageData as $key => $value) {
                    $userStorage->set($key, $value);
                }
            }
            $user->setUserStorage($userStorage);
        }

        return $user;
    }
}
