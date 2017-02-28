<?php

/*
 * For the full copyright and license information, please view the LICENSE.txt
 */

namespace IdentityAccess\Domain\Contract;

use IdentityAccess\Domain\Model\User;

/**
 *
 * @author Usama Ahmed Khan
 */
interface UserRepository {
    /**
     * @param User $User
     *
     * @return void
     */
    public function add(User $User);
}
