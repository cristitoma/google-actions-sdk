<?php

namespace GoogleActionsSdk;

use GoogleActionsSdk\Exception\UnknownIntentException;
use GoogleActionsSdk\Request\Request;
use GoogleActionsSdk\Response\Response;

/**
 * Class IntentMapper
 * @package GoogleActionsSdk
 */
class IntentMapper
{
    /** @var array  */
    protected $intents = [];

    /**
     * @param string $intent
     * @param callable $callback
     * @return IntentMapper
     */
    public function on(string $intent, callable $callback): IntentMapper
    {
        $this->intents[$intent] = $callback;

        return $this;
    }

    /**
     * @param Request $request
     * @return Response
     * @throws UnknownIntentException
     */
    public function handle(Request $request): Response
    {
        if (isset($this->intents[$request->getIntent()])) {
            $callback = $this->intents[$request->getIntent()];
            $response = $callback($request);
            if (!$response instanceof Response) {
                throw new \RuntimeException('Callback must return GoogleActionsSdk\Response');
            }
        } else {
            throw new UnknownIntentException("Intent: '" . $request->getIntent() ."' has no handler.");
        }

        return $response;
    }
}
