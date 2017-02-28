<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace IdentityAccess\Application\Service;

use IdentityAccess\Domain\Contract\UserRepository;
use IdentityAccess\Application\DTO\RegsiterUserRequest;

/**
 * Description of RegisterUser
 *
 * @author Usama Ahmed Khan
 */
class RegisterUser {
    /**
     * @var UserRepository
     */
    private $userRepository;
    
    function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }
    
    public function execute(RegsiterUserRequest $request) {
        
    }
}
