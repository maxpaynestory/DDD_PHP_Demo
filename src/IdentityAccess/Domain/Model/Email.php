<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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
