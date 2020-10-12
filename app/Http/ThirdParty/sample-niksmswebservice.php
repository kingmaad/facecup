<?php
/**
 * Test with NiksmsWebservice for 'http://niksms.com:1370/NiksmsWebservice.svc?wsdl'
 * @package NiksmsWebservice
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-03
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */

require_once dirname(__FILE__) . '/NiksmsWebserviceAutoload.php';

/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a NiksmsWebserviceWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[NiksmsWebserviceWsdlClass::WSDL_URL] = 'http://niksms.com:1370/NiksmsWebservice.svc?wsdl';
 * $wsdl[NiksmsWebserviceWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[NiksmsWebserviceWsdlClass::WSDL_TRACE] = true;
 * $wsdl[NiksmsWebserviceWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[NiksmsWebserviceWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new NiksmsWebserviceWsdlClass($wsdl);
 */
/**
 * Examples
 */
 $username="YourUserName";
 $password="YourPassword";
 $yourSenderNumber="9830006179"; //your sender number
 $yourTestNumber1="YourFirstTestNumber"; //test number one
 $yourTestNumber2="YoutSecondTestNumber"; //test number two
 $yourDataBaseId1=156;  //your database id one
 $yourDataBaseId2=157;  //your database id two
 $authenticateModel=new NiksmsWebserviceStructAuthenticationModel($username,$password);
 

 
  
$niksmsWebserviceServiceGroup = new NiksmsWebserviceServiceGroup();
// sample call for NiksmsWebserviceServiceGroup::GroupSms()
// for another date
//$datetime = new DateTime('2010-12-30 23:21:46');
$datetime = new DateTime();
$sendOn=$datetime->format('c');
$sendType= 'Normal';
$senderNumber = $yourSenderNumber;
$recieptionNumbers= Array($yourTestNumber1,$yourTestNumber2);  
$messageIds=Array($yourDataBaseId1,$yourDataBaseId2);   
$messageBody="test";
$groupsmsInputModel=new NiksmsWebserviceStructGroupSmsModel($sendOn,$sendType,$senderNumber,$recieptionNumbers,$messageIds,$messageBody);
$groupsmsModel=new NiksmsWebserviceStructGroupSms($authenticateModel,$groupsmsInputModel);

if($niksmsWebserviceServiceGroup->GroupSms($groupsmsModel))
{
    $groupsmsResult=$niksmsWebserviceServiceGroup->getResult();
    if($groupsmsResult->GroupSmsResult->Status=="Successful")
    {
        print_r($groupsmsResult->GroupSmsResult->NikIds->long);   
    }
    else{
        echo $groupsmsResult->GroupSmsResult->WarningMessage;
    }  
}    
else
{
    print_r($niksmsWebserviceServiceGroup->getLastError());    
}



// sample call for NiksmsWebserviceServicePtp::PtpSms()
// for another date
//$datetime = new DateTime('2010-12-30 23:21:46');
$datetime = new DateTime();
$sendOn=$datetime->format('c');
$sendType= 'Normal';
$senderNumber = $yourSenderNumber;
$recieptionNumbers= Array($yourTestNumber1,$yourTestNumber2);  
$messageIds=Array($yourDataBaseId1,$yourDataBaseId2);   
$messageBody=Array("test1","test2");
$ptpInputModel=new NiksmsWebserviceStructPtpSmsModel($sendOn,$sendType,$senderNumber,$recieptionNumbers,$messageIds,$messageBody);
$ptpModel=new NiksmsWebserviceStructPtpSms($authenticateModel,$ptpInputModel);

$niksmsWebserviceServicePtp = new NiksmsWebserviceServicePtp();

if($niksmsWebserviceServicePtp->PtpSms($ptpModel))
{
        $ptpResult=$niksmsWebserviceServicePtp->getResult();
    if($ptpResult->PtpSmsResult->Status=="Successful")
    {
        print_r($ptpResult->PtpSmsResult->NikIds->long);   
    }
    else{
        echo $ptpResult->PtpSmsResult->WarningMessage;
    }  
}
else
{
    print_r($niksmsWebserviceServicePtp->getLastError());   
}   
    
  

$niksmsWebserviceServiceGet = new NiksmsWebserviceServiceGet();

// sample call for NiksmsWebserviceServiceGet::GetCredit()

if($niksmsWebserviceServiceGet->GetCredit(new NiksmsWebserviceStructGetCredit($authenticateModel)))
{
    $result=$niksmsWebserviceServiceGet->getResult();
    echo "<br/>";
    echo "Your Credit Is : " + $result->GetCreditResult;
} 
else
{
    echo "<br/>";
    print_r($niksmsWebserviceServiceGet->getLastError());
    echo "<br/>";
    echo 'fail';    
}

// sample call for NiksmsWebserviceServiceGet::GetDiscountCredit()
if($niksmsWebserviceServiceGet->GetDiscountCredit(new NiksmsWebserviceStructGetDiscountCredit($authenticateModel)))
    {
        $result=$niksmsWebserviceServiceGet->getResult();
        echo "<br/>";
        echo "Your DiscountCredit Is : " + $result->GetDiscountCreditResult;
    }
else
    print_r($niksmsWebserviceServiceGet->getLastError());
    
// sample call for NiksmsWebserviceServiceGet::GetPanelExpireDate()
if($niksmsWebserviceServiceGet->GetPanelExpireDate(new NiksmsWebserviceStructGetPanelExpireDate($authenticateModel)))
    {
        $result=$niksmsWebserviceServiceGet->getResult();
        echo "<br/>";
        echo "Your PanelExpireDate Is : " + $result->GetPanelExpireDateResult;
    }
else
    print_r($niksmsWebserviceServiceGet->getLastError());
// sample call for NiksmsWebserviceServiceGet::GetReceiveSms()
$fromdatetime = new DateTime('2016-01-01 00:00:00');
$datetime = new DateTime();
$fromDate=$fromdatetime->format('c');
$toDate=$datetime->format('c');
if($niksmsWebserviceServiceGet->GetReceiveSms(new NiksmsWebserviceStructGetReceiveSms($fromDate,$toDate,$authenticateModel)))
    {
        $result=$niksmsWebserviceServiceGet->getResult();
        if($result->GetReceiveSmsResult)
        {
            echo "<br/>";
            echo "Your RecievedSms Is : " + print_r($result->GetReceiveSmsResult);   
        }
    }
else
    print_r($niksmsWebserviceServiceGet->getLastError());
// sample call for NiksmsWebserviceServiceGet::GetSmsDelivery()
if($niksmsWebserviceServiceGet->GetSmsDelivery(new NiksmsWebserviceStructGetSmsDelivery($authenticateModel,array(15644654,15644656))))
    {
        $result=$niksmsWebserviceServiceGet->getResult();
        echo "<br/>";
        echo "Your SmsStatus Is : " + print_r($result->GetSmsDeliveryResult->SmsStatus);
    }
else
    print_r($niksmsWebserviceServiceGet->getLastError());
// sample call for NiksmsWebserviceServiceGet::GetSmsDeliveryWithClientId()
if($niksmsWebserviceServiceGet->GetSmsDeliveryWithClientId(new NiksmsWebserviceStructGetSmsDeliveryWithClientId(156,$authenticateModel)))
    {
        $result=$niksmsWebserviceServiceGet->getResult();
        echo "<br/>";
        echo "Your SmsStatusWithClientId SmsStaus Is : " + $result->GetSmsDeliveryWithClientIdResult->SmsStatus;
        echo "<br/>";
        echo "Your SmsStatusWithClientId NiksmsId Is : " + $result->GetSmsDeliveryWithClientIdResult->NiksmsId;
    }
else
    print_r($niksmsWebserviceServiceGet->getLastError());
// sample call for NiksmsWebserviceServiceGet::GetServertime()
if($niksmsWebserviceServiceGet->GetServertime(new NiksmsWebserviceStructGetServertime($authenticateModel)))
    {
        $result=$niksmsWebserviceServiceGet->getResult();
        echo "<br/>";
        echo "Your ServerTime Is : " + $result->GetServertimeResult;
    }
else
    print_r($niksmsWebserviceServiceGet->getLastError());
// sample call for NiksmsWebserviceServiceGet::GetSenderNumbers()
if($niksmsWebserviceServiceGet->GetSenderNumbers(new NiksmsWebserviceStructGetSenderNumbers($authenticateModel)))
    {
        $result=$niksmsWebserviceServiceGet->getResult();
        echo "<br/>";
        echo "Your SenderNumbers Are : " + print_r($result->GetSenderNumbersResult->string);
    }
else
    print_r($niksmsWebserviceServiceGet->getLastError());
    
$niksmsWebserviceServiceReset = new NiksmsWebserviceServiceReset();
// sample call for NiksmsWebserviceServiceReset::ResetReceiveSmsVisitedStatus()
$fromdatetime = new DateTime('2016-01-01 00:00:00');
$datetime = new DateTime();
$fromDate=$fromdatetime->format('c');
$toDate=$datetime->format('c');
if($niksmsWebserviceServiceReset->ResetReceiveSmsVisitedStatus(new NiksmsWebserviceStructResetReceiveSmsVisitedStatus($fromDate,$toDate,$authenticateModel)))
    {
        $result=$niksmsWebserviceServiceReset->getResult();
        echo "<br/>";
        echo "Your Reset Recieve Visited Result Is : " + $result->ResetReceiveSmsVisitedStatusResult;
    }
else
    print_r($niksmsWebserviceServiceReset->getLastError());