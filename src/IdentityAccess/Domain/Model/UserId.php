<?php

/*
 * For the full copyright and license information, please view the LICENSE.txt
 */

namespace IdentityAccess\Domain\Model;

/**
 * Description of UserId
 *
 * @author Usama Ahmed Khan
 */
class UserId {
    
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
