<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\User;
use Authorization\IdentityInterface;

/**
 * Users policy
 */
class UserPolicy
{
    /**
     * Check if $user can add Users
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\User $users
     * @return bool
     */
    public function canAdd(IdentityInterface $user, User $users)
    {
        return true;
    }

    /**
     * Check if $user can edit Users
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\User $users
     * @return bool
     */
    public function canEdit(IdentityInterface $user, User $users)
    {
        return true;
    }

    public function canSubmit(IdentityInterface $user, User $users)
    {
        $dirtyFields = $users->getDirty();

        return true;
    }

    /**
     * Check if $user can delete Users
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\User $users
     * @return bool
     */
    public function canDelete(IdentityInterface $user, User $users)
    {
        return false;
    }

    /**
     * Check if $user can view Users
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\User $users
     * @return bool
     */
    public function canView(IdentityInterface $user, User $users)
    {
        return true;
    }
}
