<?php

namespace App\Policy;

use Authorization\Policy\RequestPolicyInterface;
use Cake\Http\ServerRequest;

class RequestPolicy implements RequestPolicyInterface
{
    /**
     * Method to check if the request can be accessed
     *
     * @param \Authorization\IdentityInterface|null $identity Identity
     * @param \Cake\Http\ServerRequest $request Server Request
     * @return bool
     */
    public function canAccess($identity, ServerRequest $request)
    {
        $controller = $request->getParam('controller');
        $action = $request->getParam('action');
        $path = $request->getParam('pass');
        if ($controller === 'Pages' && $action === 'display' && in_array('home', $path, true)) {
            return false;
        }

        return true;
    }
}
