<?php

namespace IdentityAccess\Domain\Model;

class ContactInformation
{
    /**
     * @var PostalAddress
     */
    private $postalAddress;

    /**
     * @var string
     */
    private $primaryTelephone;

    /**
     * @var string
     */
    private $secondaryTelephone;

    public function __construct(
        PostalAddress $aPostalAddress,
        $aPrimaryTelephone,
        $aSecondaryTelephone
    ) {
        $this->setPostalAddress($aPostalAddress);
        $this->setPrimaryTelephone($aPrimaryTelephone);
        $this->setSecondaryTelephone($aSecondaryTelephone);
    }

    private function setPostalAddress(PostalAddress $aPostalAddress)
    {
        $this->postalAddress = $aPostalAddress;
    }

    private function setPrimaryTelephone($aPrimaryTelephone)
    {
        $this->primaryTelephone = $aPrimaryTelephone;
    }

    private function setSecondaryTelephone($aSecondaryTelephone)
    {
        $this->secondaryTelephone = $aSecondaryTelephone;
    }
    
    /**
     * @var string
     */
    public function getCity() {
        return $this->postalAddress->getCity();
    }
    
    /**
     * @return string
     */
    public function getCountryCode() {
        return $this->postalAddress->getCountryCode();
    }
    
    /**
     * @return string
     */
    public function getPostalCode() {
        return $this->postalAddress->getPostalCode();
    }
    
    /**
     * @return string
     */
    public function getStateProvince() {
        return $this->postalAddress->getStateProvince();
    }
    
    /**
     * @return string
     */
    public function getStreetAddress() {
        return $this->postalAddress->getStreetAddress();
    }
    
    /**
     * @return string
     */
    public function getPrimaryTelephone() {
        return $this->primaryTelephone;
    }
    
    /**
     * @return string
     */
    public function getSecondaryTelephone() {
        return $this->secondaryTelephone;
    }
}
