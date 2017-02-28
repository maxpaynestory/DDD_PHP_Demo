<?php

/*
 * For the full copyright and license information, please view the LICENSE.txt
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
