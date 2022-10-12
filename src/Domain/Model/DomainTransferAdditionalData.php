<?php
/**
 * DomainTransferAdditionalData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Domain
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\Domain\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * DomainTransferAdditionalData Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DomainTransferAdditionalData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'domainTransferAdditionalData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'admin_sing_pass_id' => 'string',
        'auth_code' => 'string',
        'company_registration_number' => 'string',
        'customer_uin' => 'string',
        'customer_uin_doc_type' => '\Openprovider\Api\Rest\Client\Domain\Model\DomainUINDocumentType',
        'domain_name_variants' => 'string[]',
        'ftld_token' => 'string',
        'gay_donation_acceptance' => 'string',
        'gay_rights_protection_acceptance' => 'string',
        'idn_script' => 'string',
        'intended_use' => 'string',
        'legal_type' => 'string',
        'maintainer' => 'string',
        'membership_id' => 'string',
        'mobile_phone_number_verification' => 'string',
        'passport_number' => 'string',
        'self_service' => 'string',
        'trademark' => 'string',
        'vat' => 'string',
        'verification_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'admin_sing_pass_id' => null,
        'auth_code' => null,
        'company_registration_number' => null,
        'customer_uin' => null,
        'customer_uin_doc_type' => null,
        'domain_name_variants' => null,
        'ftld_token' => null,
        'gay_donation_acceptance' => null,
        'gay_rights_protection_acceptance' => null,
        'idn_script' => null,
        'intended_use' => null,
        'legal_type' => null,
        'maintainer' => null,
        'membership_id' => null,
        'mobile_phone_number_verification' => null,
        'passport_number' => null,
        'self_service' => null,
        'trademark' => null,
        'vat' => null,
        'verification_code' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'admin_sing_pass_id' => 'admin_sing_pass_id',
        'auth_code' => 'auth_code',
        'company_registration_number' => 'company_registration_number',
        'customer_uin' => 'customer_uin',
        'customer_uin_doc_type' => 'customer_uin_doc_type',
        'domain_name_variants' => 'domain_name_variants',
        'ftld_token' => 'ftld_token',
        'gay_donation_acceptance' => 'gay_donation_acceptance',
        'gay_rights_protection_acceptance' => 'gay_rights_protection_acceptance',
        'idn_script' => 'idn_script',
        'intended_use' => 'intended_use',
        'legal_type' => 'legal_type',
        'maintainer' => 'maintainer',
        'membership_id' => 'membership_id',
        'mobile_phone_number_verification' => 'mobile_phone_number_verification',
        'passport_number' => 'passport_number',
        'self_service' => 'self_service',
        'trademark' => 'trademark',
        'vat' => 'vat',
        'verification_code' => 'verification_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'admin_sing_pass_id' => 'setAdminSingPassId',
        'auth_code' => 'setAuthCode',
        'company_registration_number' => 'setCompanyRegistrationNumber',
        'customer_uin' => 'setCustomerUin',
        'customer_uin_doc_type' => 'setCustomerUinDocType',
        'domain_name_variants' => 'setDomainNameVariants',
        'ftld_token' => 'setFtldToken',
        'gay_donation_acceptance' => 'setGayDonationAcceptance',
        'gay_rights_protection_acceptance' => 'setGayRightsProtectionAcceptance',
        'idn_script' => 'setIdnScript',
        'intended_use' => 'setIntendedUse',
        'legal_type' => 'setLegalType',
        'maintainer' => 'setMaintainer',
        'membership_id' => 'setMembershipId',
        'mobile_phone_number_verification' => 'setMobilePhoneNumberVerification',
        'passport_number' => 'setPassportNumber',
        'self_service' => 'setSelfService',
        'trademark' => 'setTrademark',
        'vat' => 'setVat',
        'verification_code' => 'setVerificationCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'admin_sing_pass_id' => 'getAdminSingPassId',
        'auth_code' => 'getAuthCode',
        'company_registration_number' => 'getCompanyRegistrationNumber',
        'customer_uin' => 'getCustomerUin',
        'customer_uin_doc_type' => 'getCustomerUinDocType',
        'domain_name_variants' => 'getDomainNameVariants',
        'ftld_token' => 'getFtldToken',
        'gay_donation_acceptance' => 'getGayDonationAcceptance',
        'gay_rights_protection_acceptance' => 'getGayRightsProtectionAcceptance',
        'idn_script' => 'getIdnScript',
        'intended_use' => 'getIntendedUse',
        'legal_type' => 'getLegalType',
        'maintainer' => 'getMaintainer',
        'membership_id' => 'getMembershipId',
        'mobile_phone_number_verification' => 'getMobilePhoneNumberVerification',
        'passport_number' => 'getPassportNumber',
        'self_service' => 'getSelfService',
        'trademark' => 'getTrademark',
        'vat' => 'getVat',
        'verification_code' => 'getVerificationCode'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['admin_sing_pass_id'] = isset($data['admin_sing_pass_id']) ? $data['admin_sing_pass_id'] : null;
        $this->container['auth_code'] = isset($data['auth_code']) ? $data['auth_code'] : null;
        $this->container['company_registration_number'] = isset($data['company_registration_number']) ? $data['company_registration_number'] : null;
        $this->container['customer_uin'] = isset($data['customer_uin']) ? $data['customer_uin'] : null;
        $this->container['customer_uin_doc_type'] = isset($data['customer_uin_doc_type']) ? $data['customer_uin_doc_type'] : null;
        $this->container['domain_name_variants'] = isset($data['domain_name_variants']) ? $data['domain_name_variants'] : null;
        $this->container['ftld_token'] = isset($data['ftld_token']) ? $data['ftld_token'] : null;
        $this->container['gay_donation_acceptance'] = isset($data['gay_donation_acceptance']) ? $data['gay_donation_acceptance'] : null;
        $this->container['gay_rights_protection_acceptance'] = isset($data['gay_rights_protection_acceptance']) ? $data['gay_rights_protection_acceptance'] : null;
        $this->container['idn_script'] = isset($data['idn_script']) ? $data['idn_script'] : null;
        $this->container['intended_use'] = isset($data['intended_use']) ? $data['intended_use'] : null;
        $this->container['legal_type'] = isset($data['legal_type']) ? $data['legal_type'] : null;
        $this->container['maintainer'] = isset($data['maintainer']) ? $data['maintainer'] : null;
        $this->container['membership_id'] = isset($data['membership_id']) ? $data['membership_id'] : null;
        $this->container['mobile_phone_number_verification'] = isset($data['mobile_phone_number_verification']) ? $data['mobile_phone_number_verification'] : null;
        $this->container['passport_number'] = isset($data['passport_number']) ? $data['passport_number'] : null;
        $this->container['self_service'] = isset($data['self_service']) ? $data['self_service'] : null;
        $this->container['trademark'] = isset($data['trademark']) ? $data['trademark'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['verification_code'] = isset($data['verification_code']) ? $data['verification_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets admin_sing_pass_id
     *
     * @return string|null
     */
    public function getAdminSingPassId()
    {
        return $this->container['admin_sing_pass_id'];
    }

    /**
     * Sets admin_sing_pass_id
     *
     * @param string|null $admin_sing_pass_id admin_sing_pass_id
     *
     * @return $this
     */
    public function setAdminSingPassId($admin_sing_pass_id)
    {
        $this->container['admin_sing_pass_id'] = $admin_sing_pass_id;

        return $this;
    }

    /**
     * Gets auth_code
     *
     * @return string|null
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param string|null $auth_code auth_code
     *
     * @return $this
     */
    public function setAuthCode($auth_code)
    {
        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets company_registration_number
     *
     * @return string|null
     */
    public function getCompanyRegistrationNumber()
    {
        return $this->container['company_registration_number'];
    }

    /**
     * Sets company_registration_number
     *
     * @param string|null $company_registration_number company_registration_number
     *
     * @return $this
     */
    public function setCompanyRegistrationNumber($company_registration_number)
    {
        $this->container['company_registration_number'] = $company_registration_number;

        return $this;
    }

    /**
     * Gets customer_uin
     *
     * @return string|null
     */
    public function getCustomerUin()
    {
        return $this->container['customer_uin'];
    }

    /**
     * Sets customer_uin
     *
     * @param string|null $customer_uin customer_uin
     *
     * @return $this
     */
    public function setCustomerUin($customer_uin)
    {
        $this->container['customer_uin'] = $customer_uin;

        return $this;
    }

    /**
     * Gets customer_uin_doc_type
     *
     * @return \Openprovider\Api\Rest\Client\Domain\Model\DomainUINDocumentType|null
     */
    public function getCustomerUinDocType()
    {
        return $this->container['customer_uin_doc_type'];
    }

    /**
     * Sets customer_uin_doc_type
     *
     * @param \Openprovider\Api\Rest\Client\Domain\Model\DomainUINDocumentType|null $customer_uin_doc_type customer_uin_doc_type
     *
     * @return $this
     */
    public function setCustomerUinDocType($customer_uin_doc_type)
    {
        $this->container['customer_uin_doc_type'] = $customer_uin_doc_type;

        return $this;
    }

    /**
     * Gets domain_name_variants
     *
     * @return string[]|null
     */
    public function getDomainNameVariants()
    {
        return $this->container['domain_name_variants'];
    }

    /**
     * Sets domain_name_variants
     *
     * @param string[]|null $domain_name_variants domain_name_variants
     *
     * @return $this
     */
    public function setDomainNameVariants($domain_name_variants)
    {
        $this->container['domain_name_variants'] = $domain_name_variants;

        return $this;
    }

    /**
     * Gets ftld_token
     *
     * @return string|null
     */
    public function getFtldToken()
    {
        return $this->container['ftld_token'];
    }

    /**
     * Sets ftld_token
     *
     * @param string|null $ftld_token ftld_token
     *
     * @return $this
     */
    public function setFtldToken($ftld_token)
    {
        $this->container['ftld_token'] = $ftld_token;

        return $this;
    }

    /**
     * Gets gay_donation_acceptance
     *
     * @return string|null
     */
    public function getGayDonationAcceptance()
    {
        return $this->container['gay_donation_acceptance'];
    }

    /**
     * Sets gay_donation_acceptance
     *
     * @param string|null $gay_donation_acceptance gay_donation_acceptance
     *
     * @return $this
     */
    public function setGayDonationAcceptance($gay_donation_acceptance)
    {
        $this->container['gay_donation_acceptance'] = $gay_donation_acceptance;

        return $this;
    }

    /**
     * Gets gay_rights_protection_acceptance
     *
     * @return string|null
     */
    public function getGayRightsProtectionAcceptance()
    {
        return $this->container['gay_rights_protection_acceptance'];
    }

    /**
     * Sets gay_rights_protection_acceptance
     *
     * @param string|null $gay_rights_protection_acceptance gay_rights_protection_acceptance
     *
     * @return $this
     */
    public function setGayRightsProtectionAcceptance($gay_rights_protection_acceptance)
    {
        $this->container['gay_rights_protection_acceptance'] = $gay_rights_protection_acceptance;

        return $this;
    }

    /**
     * Gets idn_script
     *
     * @return string|null
     */
    public function getIdnScript()
    {
        return $this->container['idn_script'];
    }

    /**
     * Sets idn_script
     *
     * @param string|null $idn_script idn_script
     *
     * @return $this
     */
    public function setIdnScript($idn_script)
    {
        $this->container['idn_script'] = $idn_script;

        return $this;
    }

    /**
     * Gets intended_use
     *
     * @return string|null
     */
    public function getIntendedUse()
    {
        return $this->container['intended_use'];
    }

    /**
     * Sets intended_use
     *
     * @param string|null $intended_use intended_use
     *
     * @return $this
     */
    public function setIntendedUse($intended_use)
    {
        $this->container['intended_use'] = $intended_use;

        return $this;
    }

    /**
     * Gets legal_type
     *
     * @return string|null
     */
    public function getLegalType()
    {
        return $this->container['legal_type'];
    }

    /**
     * Sets legal_type
     *
     * @param string|null $legal_type legal_type
     *
     * @return $this
     */
    public function setLegalType($legal_type)
    {
        $this->container['legal_type'] = $legal_type;

        return $this;
    }

    /**
     * Gets maintainer
     *
     * @return string|null
     */
    public function getMaintainer()
    {
        return $this->container['maintainer'];
    }

    /**
     * Sets maintainer
     *
     * @param string|null $maintainer maintainer
     *
     * @return $this
     */
    public function setMaintainer($maintainer)
    {
        $this->container['maintainer'] = $maintainer;

        return $this;
    }

    /**
     * Gets membership_id
     *
     * @return string|null
     */
    public function getMembershipId()
    {
        return $this->container['membership_id'];
    }

    /**
     * Sets membership_id
     *
     * @param string|null $membership_id membership_id
     *
     * @return $this
     */
    public function setMembershipId($membership_id)
    {
        $this->container['membership_id'] = $membership_id;

        return $this;
    }

    /**
     * Gets mobile_phone_number_verification
     *
     * @return string|null
     */
    public function getMobilePhoneNumberVerification()
    {
        return $this->container['mobile_phone_number_verification'];
    }

    /**
     * Sets mobile_phone_number_verification
     *
     * @param string|null $mobile_phone_number_verification mobile_phone_number_verification
     *
     * @return $this
     */
    public function setMobilePhoneNumberVerification($mobile_phone_number_verification)
    {
        $this->container['mobile_phone_number_verification'] = $mobile_phone_number_verification;

        return $this;
    }

    /**
     * Gets passport_number
     *
     * @return string|null
     */
    public function getPassportNumber()
    {
        return $this->container['passport_number'];
    }

    /**
     * Sets passport_number
     *
     * @param string|null $passport_number passport_number
     *
     * @return $this
     */
    public function setPassportNumber($passport_number)
    {
        $this->container['passport_number'] = $passport_number;

        return $this;
    }

    /**
     * Gets self_service
     *
     * @return string|null
     */
    public function getSelfService()
    {
        return $this->container['self_service'];
    }

    /**
     * Sets self_service
     *
     * @param string|null $self_service self_service
     *
     * @return $this
     */
    public function setSelfService($self_service)
    {
        $this->container['self_service'] = $self_service;

        return $this;
    }

    /**
     * Gets trademark
     *
     * @return string|null
     */
    public function getTrademark()
    {
        return $this->container['trademark'];
    }

    /**
     * Sets trademark
     *
     * @param string|null $trademark trademark
     *
     * @return $this
     */
    public function setTrademark($trademark)
    {
        $this->container['trademark'] = $trademark;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return string|null
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param string|null $vat vat
     *
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets verification_code
     *
     * @return string|null
     */
    public function getVerificationCode()
    {
        return $this->container['verification_code'];
    }

    /**
     * Sets verification_code
     *
     * @param string|null $verification_code verification_code
     *
     * @return $this
     */
    public function setVerificationCode($verification_code)
    {
        $this->container['verification_code'] = $verification_code;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


