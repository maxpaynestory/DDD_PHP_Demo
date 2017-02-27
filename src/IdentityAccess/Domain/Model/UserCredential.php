<?php

namespace IdentityAccess\Domain\Model;

/**
 * Description of UserCredential
 *
 * @author Usama Ahmed Khan
 */
class UserCredential {
    
    /**
     * @var UserCredentialId
     */
    private $userCredentialId;
    
    /**
     * @var Email
     */
    private $email;
    
    /**
     * @var Password
     */
    private $password;
}
