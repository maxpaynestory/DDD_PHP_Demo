<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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
