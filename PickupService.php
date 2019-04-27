<?php
// CLASS
class DebugSoapClient extends SoapClient {
  public $sendRequest = true;
  public $printRequest = true;
  public $formatXML = true;

  public function __doRequest($request, $location, $action, $version, $one_way=0) {
    if ( $this->printRequest ) {
      if ( !$this->formatXML ) {
        $out = $request;
      }
      else {
        $doc = new DOMDocument;
        $doc->preserveWhiteSpace = false;
        $doc->loadxml($request);
        $doc->formatOutput = true;
        $out = $doc->savexml();
      }
      echo $out;
    }

    if ( $this->sendRequest ) {
      return parent::__doRequest($request, $location, $action, $version, $one_way);
    }
    else {
      return '';
    }
  }
}
// CORE PHP
$soap = new DebugSoapClient('http://netconnect.bluedart.com/Demo/ShippingAPI/PickupRegistrationService.svc?wsdl',
	array(
		'trace' 							=> 1,
		'style'								=> SOAP_DOCUMENT,
		'use'									=> SOAP_LITERAL,
		'soap_version' 				=> SOAP_1_2
	));

$soap->__setLocation("http://netconnect.bluedart.com/Demo/ShippingAPI/Pickup/PickupRegistrationService.svc");

$soap->sendRequest = true;
$soap->printRequest = false;
$soap->formatXML = true;

$actionHeader = new SoapHeader('http://www.w3.org/2005/08/addressing','Action','http://tempuri.org/IPickupRegistration/RegisterPickup',true);
$soap->__setSoapHeaders($actionHeader);

$params = array(
	'request' => 
			array (
		 				  'AreaCode' => 'BLR',
							'ContactPersonName' => 'test1',
							'CustomerAddress1' => 'test2',
							'CustomerAddress2' => 'test3',
							'CustomerAddress3' => 'test4',
							'CustomerCode' => '124003',
							'CustomerName' => 'test',
							'CustomerPincode' => '400025',
							'CustomerTelephoneNumber' => '12345678',
							'DoxNDox' => '1',
							'EmailID' => 'a@b.com',
							'MobileTelNo' => '9967327037',
							'NumberofPieces' => '1',
							'OfficeCloseTime' => '16:00',
							'ProductCode' => 'A',
							'ReferenceNo' => '123456',
							'Remarks' => 'TEST',
							'RouteCode' => '99',
							'ShipmentPickupDate' => '2014-07-15',
							'ShipmentPickupTime' => '1600',
							'VolumeWeight' => '1.2',
							'WeightofShipment' => '1.2',
							'isToPayShipper' => 'false'),
	'profile' =>
			 array(
			 	'Api_type' => 'S',
				'LicenceKey' =>'',
				'LoginID' =>'',
				'Version' =>'1.3')
				);
$result = $soap->__soapCall('RegisterPickup',array($params));
echo '<h2>Result</h2><pre>'; print_r($result); echo '</pre>';
