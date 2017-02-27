<?php

namespace IdentityAccess\Domain\Model;

class FullName
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    private function setFirstName($firstName)
    {
        ////////// Do the validations
        $this->firstName = $firstName;
    }

    private function setLastName($lastName)
    {
        ////////////// Do validations for lastname
        $this->lastName = $lastName;
    }
    
    /**
     * @return string
     */
    public function getFirstName() {
        return $this->firstName;
    }
    
    /**
     * @return string
     */
    public function getLastName() {
        return $this->lastName;
    }
}
