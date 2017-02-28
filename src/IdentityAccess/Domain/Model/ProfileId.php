<?php

/*
 * For the full copyright and license information, please view the LICENSE.txt
 */

namespace IdentityAccess\Domain\Model;

/**
 * Description of ProfileId
 *
 * @author Usama Ahmed Khan
 */
class ProfileId {

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

    private static function GUID() {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

    /**
     * @return self   
     */
    public static function createNew() {
        return new self(self::GUID());
    }

}
