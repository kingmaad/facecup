<?php
/**
 * File for class NiksmsWebserviceStructAuthenticationModel
 * @package NiksmsWebservice
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-03
 */
/**
 * This class stands for NiksmsWebserviceStructAuthenticationModel originally named AuthenticationModel
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://niksms.com:1370/NiksmsWebservice.svc?xsd=xsd0}
 * @package NiksmsWebservice
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-03
 */
class NiksmsWebserviceStructAuthenticationModel extends NiksmsWebserviceWsdlClass
{
    /**
     * The Username
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Username;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Password;
    /**
     * Constructor method for AuthenticationModel
     * @see parent::__construct()
     * @param string $_username
     * @param string $_password
     * @return NiksmsWebserviceStructAuthenticationModel
     */
    public function __construct($_username = NULL,$_password = NULL)
    {
        parent::__construct(array('Username'=>$_username,'Password'=>$_password),false);
    }
    /**
     * Get Username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->Username;
    }
    /**
     * Set Username value
     * @param string $_username the Username
     * @return string
     */
    public function setUsername($_username)
    {
        return ($this->Username = $_username);
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $_password the Password
     * @return string
     */
    public function setPassword($_password)
    {
        return ($this->Password = $_password);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see NiksmsWebserviceWsdlClass::__set_state()
     * @uses NiksmsWebserviceWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return NiksmsWebserviceStructAuthenticationModel
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