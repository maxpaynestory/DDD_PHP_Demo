<?php

/*
 * For the full copyright and license information, please view the LICENSE.txt
 */

namespace IdentityAccess\Domain\Model;

/**
 * Description of Password
 *
 * @author Usama Ahmed Khan
 */
class Password {
    
    /**
     * @var string
     */
    private $password;
    
    function __construct($password) {
        //// Do password validations here.
        $this->password = $password;
    }
    
    /**
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }
    
    public static function generateNew() {
        //// write your new password generator here
        return new self("mynewlygeneratedpassword");
    }
}
