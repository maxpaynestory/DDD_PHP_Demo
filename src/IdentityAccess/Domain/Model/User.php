<?php

namespace IdentityAccess\Domain\Model;

/**
 * Description of User
 *
 * @author Usama Ahmed Khan
 */
class User {
    
    /**
     * @var UserCredentialId[]
     */
    private $credentials;
    
    /**
     * @var RoleId[]
     */
    private $roles;
    
    /**
     * @var UserId
     */
    private $userId;
}
