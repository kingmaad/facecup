<?php
/**
 * Created by PhpStorm.
 * User: Kubak
 * Date: 5/25/2019
 * Time: 9:41 AM
 */

namespace App\Libraries;


class SmsSender
{
    public static $APIKey="a894efbc680c57729f26efbc";
    public static $SecretKey="facecup&nextera";
    public static $APIURL="https://RestfulSms.com/";

    /**
     * Gets API Verification Code Url.
     *
     * @return string Indicates the Url
     */
    protected static function getAPIVerificationCodeUrl() 
    {
        return "api/UltraFastSend";
    }

    /**
     * Gets Api Token Url.
     *
     * @return string Indicates the Url
     */
    protected static function getApiTokenUrl()
    {
        return "api/Token";
    }

    /**
     * Gets config parameters for sending request.
     *
     * @param string $APIKey    API Key
     * @param string $SecretKey Secret Key
     * @param string $APIURL    API URL
     * 
     * @return void
     */
    public function __construct($APIKey, $SecretKey, $APIURL)
    {
        
    }

    /**
     * Verification Code.
     *
     * @param string $Code         Code
     * @param string $MobileNumber Mobile Number
     * 

     * @return string Indicates the sent sms result
     */
    public static function verificationCode($Code, $MobileNumber) 
    {
        $VerificationCode="";
        $token = self::_getToken(self::$APIKey, self::$SecretKey);
        if ($token != false) {
            /*$postData = array(
                'Code' => $Code,
                'MobileNumber' => $MobileNumber,
            );*/
            $postData = array(
                "ParameterArray" => array(
                    array(

                        "Parameter" => "VerificationCode",
                        "ParameterValue" => $Code
                    )
                ),
                "Mobile" => $MobileNumber,
                "TemplateId" => "34863"
            );

                echo $token;
            $url = self::$APIURL.self::getAPIVerificationCodeUrl();
            echo $url;
            $VerificationCode = self::_execute($postData, $url, $token);
            $object = json_decode($VerificationCode);

            $result = false;
            if (is_object($object)) {
                $result = $object->Message;
            } else {
                $result = $VerificationCode;
            }

        } else {
            $result = $VerificationCode;
        }
        return $result;
    }

    /**
     * Gets token key for all web service requests.
     *
     * @return string Indicates the token key
     */
    private static function _getToken()

    {
        $postData = array(
            'UserApiKey' => self::$APIKey,
            'SecretKey' => self::$SecretKey,
            'System' => 'php_rest_v_2_0'
        );
        $postString = json_encode($postData);

        $ch = curl_init(self::$APIURL.self::getApiTokenUrl());
        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json'
            )
        );
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);

        $result = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($result);

        $resp = false;
        $IsSuccessful = '';
        $TokenKey = '';
        if (is_object($response)) {
            $IsSuccessful = $response->IsSuccessful;
            if ($IsSuccessful == true) {
                $TokenKey = $response->TokenKey;
                $resp = $TokenKey;
            } else {
                $resp = false;
            }
        }
        return $resp;
    }

    /**
     * Executes the main method.
     *
     * @param postData[] $postData array of json data
     * @param string     $url      url
     * @param string     $token    token string
     * 
     * @return string Indicates the curl execute result
     */
    private static function _execute($postData, $url, $token)
    {
        $postString = json_encode($postData);

        $ch = curl_init($url);

        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'x-sms-ir-secure-token: '.$token
            )
        );
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);

        $result = curl_exec($ch);
        curl_close($ch);
        
        return $result;
    }
}