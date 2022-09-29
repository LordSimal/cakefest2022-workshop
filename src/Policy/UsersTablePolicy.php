<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Table\UsersTable;
use Authorization\IdentityInterface;

/**
 * User policy
 */
class UsersTablePolicy
{
    public function scopeIndex($user, $query)
    {
        return $query->where(['Users.email LIKE' => '%pfeiferkevin.at%']);
    }
}
