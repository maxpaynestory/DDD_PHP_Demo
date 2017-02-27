<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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
