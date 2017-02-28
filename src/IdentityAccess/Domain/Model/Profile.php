<?php

/*
 * For the full copyright and license information, please view the LICENSE.txt
 */

namespace IdentityAccess\Domain\Model;

/**
 * Description of Profile
 *
 * @author Usama Ahmed Khan
 */
class Profile {
    
    /**
     * @var ProfileId
     */
    private $profileId;
    
    /**
     * @var ContactInformation
     */
    private $contactInformation;

    /**
     * @var FullName
     */
    private $name;
}
