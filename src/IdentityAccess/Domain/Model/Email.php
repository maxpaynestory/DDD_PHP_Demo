<?php

/*
 * For the full copyright and license information, please view the LICENSE.txt
 */

namespace IdentityAccess\Domain\Model;

/**
 * Description of Email
 *
 * @author Usama Ahmed Khan
 */
class Email {
    
    /**
     * @var string
     */
    private $email;
    
    function __construct($email) {
        ///// Do email validations here and raise exception if required
        $this->email = $email;
    }
    
    /**
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }
}
