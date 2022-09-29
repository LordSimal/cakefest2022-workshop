<?php
declare(strict_types=1);

namespace App\Policy;

use App\Services\MyService;
use Authorization\IdentityInterface;

class MyServicePolicy {

    /**
     * Check if $user can edit Product
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Product $product
     * @return bool
     */
    public function canAccess(IdentityInterface $user, MyService $service)
    {
        return false;
    }

}
