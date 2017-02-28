<?php

/*
 * For the full copyright and license information, please view the LICENSE.txt
 */

namespace IdentityAccess\Application\DTO;

/**
 * Description of RegsiterUserRequest
 *
 * @author Usama Ahmed Khan
 */
class RegsiterUserRequest {
    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function getEndDate() {
        return $this->endDate;
    }

    public function getPrimaryTelephone() {
        return $this->primaryTelephone;
    }

    public function getSecondaryTelephone() {
        return $this->secondaryTelephone;
    }

    public function getAddressCountryCode() {
        return $this->addressCountryCode;
    }

    public function getAddressPostalCode() {
        return $this->addressPostalCode;
    }

    public function getAddressStateProvince() {
        return $this->addressStateProvince;
    }

    public function getAddressCity() {
        return $this->addressCity;
    }

    public function getAddressStreetAddress() {
        return $this->addressStreetAddress;
    }

    private $email;
    private $password;
    private $firstName;
    private $lastName;
    private $enabled;
    private $startDate;
    private $endDate;
    private $primaryTelephone;
    private $secondaryTelephone;
    private $addressCountryCode;
    private $addressPostalCode;
    private $addressStateProvince;
    private $addressCity;
    private $addressStreetAddress;

    public function __construct(
        $email,
        $password,
        $firstName,
        $lastName,
        $enabled,
        $startDate,
        $endDate,
        $primaryTelephone,
        $secondaryTelephone,
        $addressStreetAddress,
        $addressCity,
        $addressStateProvince,
        $addressPostalCode,
        $addressCountryCode
    ) {
        $this->email = $email;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->enabled = $enabled;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->primaryTelephone = $primaryTelephone;
        $this->secondaryTelephone = $secondaryTelephone;
        $this->addressStreetAddress = $addressStreetAddress;
        $this->addressCity = $addressCity;
        $this->addressStateProvince = $addressStateProvince;
        $this->addressPostalCode = $addressPostalCode;
        $this->addressCountryCode = $addressCountryCode;
    }
}
