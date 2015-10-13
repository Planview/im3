<?php
if (!empty($_POST)) {
	require_once('../credentials.php');

	//Most of this code came from: http://developers.marketo.com/documentation/soap/requestcampaign/
	$errorText = '';
	
	$marketoSoapEndPoint	 = $GLOBALS['marketoSoapEndPoint'];
	$marketoUserId			 = $GLOBALS['marketoUserId'];
	$marketoSecretKey		 = $GLOBALS['marketoSecretKey'];
	
	$marketoNameSpace        = "http://www.marketo.com/mktows/";
	
	// Create Signature
	$dtzObj = new DateTimeZone('America/Chicago');
	$dtObj  = new DateTime('now', $dtzObj);
	$timeStamp = $dtObj->format(DATE_W3C);
	$encryptString = $timeStamp . $marketoUserId;
	$signature = hash_hmac('sha1', $encryptString, $marketoSecretKey);
	 
	// Create SOAP Header
	$attrs = new stdClass();
	$attrs->mktowsUserId = $marketoUserId;
	$attrs->requestSignature = $signature;
	$attrs->requestTimestamp = $timeStamp;
	$authHdr = new SoapHeader($marketoNameSpace, 'AuthenticationHeader', $attrs);
	$options = array("connection_timeout" => 20, "location" => $marketoSoapEndPoint);
	
	// Create Request
	$leadKey = new stdClass();
	$leadKey->Email = $_POST["Email"];
	
	$attrArray = array();
	
	foreach ($_POST as $param_name => $param_val) {
		$newStdClass = new stdClass();
		$newStdClass->attrName  = $param_name;
		$newStdClass->attrValue = $param_val;
		$attrArray[] = $newStdClass;
	}
	
	$attrList = new stdClass();
	$attrList->attribute = $attrArray;
	$leadKey->leadAttributeList = $attrList;
	
	$leadRecord = new stdClass();
	$leadRecord->leadRecord = $leadKey;
	$leadRecord->returnLead = false;
	$params = array("paramsSyncLead" => $leadRecord);
	
	$soapClient = new SoapClient($marketoSoapEndPoint ."?WSDL", $options);
	
	try {
		$result = $soapClient->__soapCall("syncLead", $params, $options, $authHdr);
	}
	catch(Exception $ex) {
		// var_dump($ex);
	}

} else {
	print_r("You do not have access to this page.");
}
