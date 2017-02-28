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
    
    function __construct(UserCredentialId $userCredentialId, Email $email, Password $password) {
        $this->userCredentialId = $userCredentialId;
        $this->email = $email;
        $this->password = $password;
    }
}
