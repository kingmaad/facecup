<?php
/**
 * File for class NiksmsWebserviceStructGetCredit
 * @package NiksmsWebservice
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-03
 */
/**
 * This class stands for NiksmsWebserviceStructGetCredit originally named GetCredit
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://niksms.com:1370/NiksmsWebservice.svc?xsd=xsd0}
 * @package NiksmsWebservice
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-03
 */
class NiksmsWebserviceStructGetCredit extends NiksmsWebserviceWsdlClass
{
    /**
     * The security
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var NiksmsWebserviceStructAuthenticationModel
     */
    public $security;
    /**
     * Constructor method for GetCredit
     * @see parent::__construct()
     * @param NiksmsWebserviceStructAuthenticationModel $_security
     * @return NiksmsWebserviceStructGetCredit
     */
    public function __construct($_security = NULL)
    {
        parent::__construct(array('security'=>$_security),false);
    }
    /**
     * Get security value
     * @return NiksmsWebserviceStructAuthenticationModel|null
     */
    public function getSecurity()
    {
        return $this->security;
    }
    /**
     * Set security value
     * @param NiksmsWebserviceStructAuthenticationModel $_security the security
     * @return NiksmsWebserviceStructAuthenticationModel
     */
    public function setSecurity($_security)
    {
        return ($this->security = $_security);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see NiksmsWebserviceWsdlClass::__set_state()
     * @uses NiksmsWebserviceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return NiksmsWebserviceStructGetCredit
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
