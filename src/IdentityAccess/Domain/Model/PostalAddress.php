<?php

namespace IdentityAccess\Domain\Model;

class PostalAddress
{
    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $stateProvince;

    /**
     * @var string
     */
    private $streetAddress;

    public function __construct(
        $aStreetAddress,
        $aCity,
        $aStateProvince,
        $aPostalCode,
        $aCountryCode
    ) {
        $this->setCity($aCity);
        $this->setCountryCode($aCountryCode);
        $this->setPostalCode($aPostalCode);
        $this->setStateProvince($aStateProvince);
        $this->setStreetAddress($aStreetAddress);
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getCountryCode()
    {
        return $this->countryCode;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function getStateProvince()
    {
        return $this->stateProvince;
    }

    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    private function setCity($city)
    {
        /////// Do city validations here
        $this->city = $city;
    }

    private function setCountryCode($countryCode)
    {
        ///////////// Do country code validations here
        $this->countryCode = $countryCode;
    }

    private function setPostalCode($postalCode)
    {
        ////////// Do postal code validations here
        $this->postalCode = $postalCode;
    }

    private function setStateProvince($stateProvince)
    {
        ///////// Do validations here
        $this->stateProvince = $stateProvince;
    }

    private function setStreetAddress($streetAddress)
    {
        //////////// Do validations here
        $this->streetAddress = $streetAddress;
    }
}
