<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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
