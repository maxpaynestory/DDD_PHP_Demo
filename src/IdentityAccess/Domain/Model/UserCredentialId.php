<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace IdentityAccess\Domain\Model;

/**
 * Description of UserCredentialId
 *
 * @author Usama Ahmed Khan
 */
class UserCredentialId {
    /**
     * @var string
     */
    private $id;
    
    function __construct($id) {
        //// Do validations here, incase of any error raise InvalidArgumentException.
        $this->id = $id;
    }
    
    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }
}
