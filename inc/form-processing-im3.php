<?php
/*
These are all of the fields that do not need to be passed to Manticore, along w/ the "Redirect" field which is added manually to the end of the Manticore URL string.
The list contains SmartForms field names at the beginning, and the Manticore fields follow starting w/ the "Redirect" field. 
*/
$fieldsNotSentToManticore = array("GHQ_Employee_Here__c",  "DHQ_Employee_Here__c", "Matched_Company_id__c", "Matched_Phone__c", "Matched_Trade_Name__c", "Matched_State_Code__c", "Matched_Country_Code__c", "Matched_Employee_Here__c", "Matched_Annual_Revenue__c", "Matched_NAICS_Name__c", "Matched_Sic__c", "Matched_Sic_Name__c", "Matched_URL__c", "Matched_Location_Type__c", "Matched_Subsidiary__c", "HQ_Company_ID__c", "HQ_Company__c", "HQ_Address1__c", "HQ_Address2__c", "HQ_City__c", "HQ_State__c", "HQ_Country__c", "HQ_Zip__c", "HQ_Phone__c", "HQ_Trade_Name__c", "HQ_State_Code__c", "HQ_Country_Code__c", "HQ_Employee_Count__c", "HQ_Employee_Here__c", "HQ_Annual_Revenue__c", "HQ_NAICS__c", "HQ_NAICS_Name__c", "HQ_Sic__c", "HQ_Sic_Name__c", "HQ_URL__c", "HQ_Location_Type__c", "HQ_Subsidiary__c", "DHQ_Company_ID__c", "DHQ_Company__c", "DHQ_Address1__c", "DHQ_Address2__c", "DHQ_City__c", "DHQ_State__c", "DHQ_Country__c", "DHQ_Zip__c", "DHQ_Phone__c", "DHQ_Trade_Name__c", "DHQ_State_Code__c", "DHQ_Country_Code__c", "DHQ_Employee_Count__c", "DHQ_Annual_Revenue__c", "DHQ_NAICS__c", "DHQ_NAICS_Name__c", "DHQ_Sic__c", "DHQ_Sic_Name__c", "DHQ_URL__c", "DHQ_Location_Type__c", "DHQ_Subsidiary__c", "GHQ_Company_ID__c", "GHQ_Address1__c", "GHQ_Address2__c", "GHQ_City__c", "GHQ_State__c", "GHQ_Country__c", "GHQ_Zip__c", "GHQ_Phone__c", "GHQ_Trade_Name__c", "GHQ_State_Code__c", "GHQ_Country_Code__c", "GHQ_Annual_Revenue__c", "GHQ_NAICS_Name__c", "GHQ_Sic__c", "GHQ_Sic_Name__c", "GHQ_URL__c", "GHQ_Location_Type__c", "GHQ_Subsidiary__c", "RFChanged__c", "RFCompID__c", "RFSessionID__c", "RFCompID", "RFChanged", "RFSessionID", "DHQ_Company_XID__c", "HQ_Company_XID__c", "HQ_SIC_Field__c", "Redirect", "MTC_KEY", "MTC_ID", "MTC_GROUP", "UseCookie", "MTC_SERVER");

// template: $zzz = preparePostValues(@$_POST["zzz"]);
// SmartForms variables
$Confidence_Level__c = preparePostValues(@$_POST["Confidence_Level__c"]);
$DHQ_Address1__c = preparePostValues(@$_POST["DHQ_Address1__c"]);
$DHQ_Address2__c = preparePostValues(@$_POST["DHQ_Address2__c"]);
$DHQ_Annual_Revenue__c = preparePostValues(@$_POST["DHQ_Annual_Revenue__c"]);
$DHQ_City__c = preparePostValues(@$_POST["DHQ_City__c"]);
$DHQ_Company__c = preparePostValues(@$_POST["DHQ_Company__c"]);
$DHQ_Company_XID__c = preparePostValues(@$_POST["DHQ_Company_XID__c"]);
$DHQ_Country__c = preparePostValues(@$_POST["DHQ_Country__c"]);
$DHQ_Country_Code__c = preparePostValues(@$_POST["DHQ_Country_Code__c"]);
$DHQ_Employee_Count__c = preparePostValues(@$_POST["DHQ_Employee_Count__c"]);
$DHQ_Employee_Here__c = preparePostValues(@$_POST["DHQ_Employee_Here__c"]);
$DHQ_Location_Type__c = preparePostValues(@$_POST["DHQ_Location_Type__c"]);
$DHQ_NAICS__c = preparePostValues(@$_POST["DHQ_NAICS__c"]);
$DHQ_NAICS_Name__c = preparePostValues(@$_POST["DHQ_NAICS_Name__c"]);
$DHQ_Phone__c = preparePostValues(@$_POST["DHQ_Phone__c"]);
$DHQ_SIC__c = preparePostValues(@$_POST["DHQ_SIC__c"]);
$DHQ_SIC_Name__c = preparePostValues(@$_POST["DHQ_SIC_Name__c"]);
$DHQ_State__c = preparePostValues(@$_POST["DHQ_State__c"]);
$DHQ_State_Code__c = preparePostValues(@$_POST["DHQ_State_Code__c"]);
$DHQ_Subsidiary__c = preparePostValues(@$_POST["DHQ_Subsidiary__c"]);
$DHQ_Trade_Name__c = preparePostValues(@$_POST["DHQ_Trade_Name__c"]);
$DHQ_URL__c = preparePostValues(@$_POST["DHQ_URL__c"]);
$DHQ_Zip__c = preparePostValues(@$_POST["DHQ_Zip__c"]);
$GHQ_Address1__c = preparePostValues(@$_POST["GHQ_Address1__c"]);
$GHQ_Address2__c = preparePostValues(@$_POST["GHQ_Address2__c"]);
$GHQ_Annual_Revenue__c = preparePostValues(@$_POST["GHQ_Annual_Revenue__c"]);
$GHQ_City__c = preparePostValues(@$_POST["GHQ_City__c"]);
$GHQ_Company__c = preparePostValues(@$_POST["GHQ_Company__c"]);
$GHQ_Company_XID__c = preparePostValues(@$_POST["GHQ_Company_XID__c"]);
$GHQ_Country__c = preparePostValues(@$_POST["GHQ_Country__c"]);
$GHQ_Country_Code__c = preparePostValues(@$_POST["GHQ_Country_Code__c"]);
$GHQ_Duns_Industry__c = preparePostValues(@$_POST["GHQ_Duns_Industry__c"]);
$GHQ_Employee_Count__c = preparePostValues(@$_POST["GHQ_Employee_Count__c"]);
$GHQ_Employee_Here__c = preparePostValues(@$_POST["GHQ_Employee_Here__c"]);
$GHQ_Location_Type__c = preparePostValues(@$_POST["GHQ_Location_Type__c"]);
$GHQ_NAICS__c = preparePostValues(@$_POST["GHQ_NAICS__c"]);
$GHQ_NAICS_Name__c = preparePostValues(@$_POST["GHQ_NAICS_Name__c"]);
$GHQ_Phone__c = preparePostValues(@$_POST["GHQ_Phone__c"]);
$GHQ_SIC__c = preparePostValues(@$_POST["GHQ_SIC__c"]);
$GHQ_SIC_Name__c = preparePostValues(@$_POST["GHQ_SIC_Name__c"]);
$GHQ_State__c = preparePostValues(@$_POST["GHQ_State__c"]);
$GHQ_State_Code__c = preparePostValues(@$_POST["GHQ_State_Code__c"]);
$GHQ_Subsidiary__c = preparePostValues(@$_POST["GHQ_Subsidiary__c"]);
$GHQ_Trade_Name__c = preparePostValues(@$_POST["GHQ_Trade_Name__c"]);
$GHQ_URL__c = preparePostValues(@$_POST["GHQ_URL__c"]);
$GHQ_Zip__c = preparePostValues(@$_POST["GHQ_Zip__c"]);
$HQ_Address1__c = preparePostValues(@$_POST["HQ_Address1__c"]);
$HQ_Address2__c = preparePostValues(@$_POST["HQ_Address2__c"]);
$HQ_Annual_Revenue__c = preparePostValues(@$_POST["HQ_Annual_Revenue__c"]);
$HQ_City__c = preparePostValues(@$_POST["HQ_City__c"]);
$HQ_Company__c = preparePostValues(@$_POST["HQ_Company__c"]);
$HQ_Company_XID__c = preparePostValues(@$_POST["HQ_Company_XID__c"]);
$HQ_Country__c = preparePostValues(@$_POST["HQ_Country__c"]);
$HQ_Country_Code__c = preparePostValues(@$_POST["HQ_Country_Code__c"]);
$HQ_Employee_Count__c = preparePostValues(@$_POST["HQ_Employee_Count__c"]);
$HQ_Employee_Here__c = preparePostValues(@$_POST["HQ_Employee_Here__c"]);
$HQ_Location_Type__c = preparePostValues(@$_POST["HQ_Location_Type__c"]);
$HQ_NAICS__c = preparePostValues(@$_POST["HQ_NAICS__c"]);
$HQ_NAICS_Name__c = preparePostValues(@$_POST["HQ_NAICS_Name__c"]);
$HQ_Phone__c = preparePostValues(@$_POST["HQ_Phone__c"]);
$HQ_SIC_Field__c = preparePostValues(@$_POST["HQ_SIC_Field__c"]);
$HQ_SIC_Name__c = preparePostValues(@$_POST["HQ_SIC_Name__c"]);
$HQ_State__c = preparePostValues(@$_POST["HQ_State__c"]);
$HQ_State_Code__c = preparePostValues(@$_POST["HQ_State_Code__c"]);
$HQ_Subsidiary__c = preparePostValues(@$_POST["HQ_Subsidiary__c"]);
$HQ_Trade_Name__c = preparePostValues(@$_POST["HQ_Trade_Name__c"]);
$HQ_URL__c = preparePostValues(@$_POST["HQ_URL__c"]);
$HQ_Zip__c = preparePostValues(@$_POST["HQ_Zip__c"]);
$Matched_Address1__c = preparePostValues(@$_POST["Matched_Address1__c"]);
$Matched_Address2__c = preparePostValues(@$_POST["Matched_Address2__c"]);
$Matched_Annual_Revenue__c = preparePostValues(@$_POST["Matched_Annual_Revenue__c"]);
$Matched_City__c = preparePostValues(@$_POST["Matched_City__c"]);
$Matched_Company_Duns_Industry__c = preparePostValues(@$_POST["Matched_Company_Duns_Industry__c"]);
$Matched_Company_Name__c = preparePostValues(@$_POST["Matched_Company_Name__c"]);
$Matched_Company_XID__c = preparePostValues(@$_POST["Matched_Company_XID__c"]);
$Matched_Country__c = preparePostValues(@$_POST["Matched_Country__c"]);
$Matched_Country_Code__c = preparePostValues(@$_POST["Matched_Country_Code__c"]);
$Matched_Employee_Count__c = preparePostValues(@$_POST["Matched_Employee_Count__c"]);
$Matched_Employee_Here__c = preparePostValues(@$_POST["Matched_Employee_Here__c"]);
$Matched_Location_Type__c = preparePostValues(@$_POST["Matched_Location_Type__c"]);
$Matched_NAICS__c = preparePostValues(@$_POST["Matched_NAICS__c"]);
$Matched_NAICS_Name__c = preparePostValues(@$_POST["Matched_NAICS_Name__c"]);
$Matched_Phone__c = preparePostValues(@$_POST["Matched_Phone__c"]);
$Matched_SIC__c = preparePostValues(@$_POST["Matched_SIC__c"]);
$Matched_SIC_Name__c = preparePostValues(@$_POST["Matched_SIC_Name__c"]);
$Matched_State__c = preparePostValues(@$_POST["Matched_State__c"]);
$Matched_State_Code__c = preparePostValues(@$_POST["Matched_State_Code__c"]);
$Matched_Subsidiary__c = preparePostValues(@$_POST["Matched_Subsidiary__c"]);
$Matched_Trade_Name__c = preparePostValues(@$_POST["Matched_Trade_Name__c"]);
$Matched_URL__c = preparePostValues(@$_POST["Matched_URL__c"]);
$Matched_Zip__c = preparePostValues(@$_POST["Matched_Zip__c"]);
$my_geoIP_cityID__c = preparePostValues(@$_POST["my_geoIP_cityID__c"]);
$my_geoIP_countryID__c = preparePostValues(@$_POST["my_geoIP_countryID__c"]);
$my_geoIP_stateID__c = preparePostValues(@$_POST["my_geoIP_stateID__c"]);
// additional variables
$Redirect = @$_POST["Redirect"];
$current_timestamp = "current_timestamp";
$EmailAddress = @$_POST["EmailAddress"];
$Tactic_Code__c = @$_POST["Tactic_Code__c"];
$Country = @$_POST["Country"];
$Region = @$_POST["Region"];
$City = preparePostValues(@$_POST["City"]);
$State_City = $Region;
if ($State_City == "" || $State_City == NULL) { $State_City = $City; }

//$myServer = "172.16.10.24"; //old address
//$myPass = "f5aduMEP"; //old password
$myServer = "10.132.7.6";
$myUser = "pdUsers";
$myPass = "kuCr6T9U";
$myDB = "CRM2011";
$insertOrUpdate = "insert";
$to      = "webmaster@planview.com";
$subject = "Problem w/ CRM DB";
$message = "CRM DB errors below.";
$headers = 	"From: webmaster@planview.com" . "\r\n" . 
			"Reply-To: webmaster@planview.com" . "\r\n" .
    		"X-Mailer: PHP/" . phpversion();
$errorMessage = "OK";

function preparePostValues($postValue) {
	//$postValue = addslashes($postValue);
	$postValue = str_replace("\'","''",$postValue); //single quotes are being sent from ReachForce as \' 
	return $postValue;
}

//////////////////////////////////////////////////////////////////////////////////////
if (strlen($Confidence_Level__c)) { // this prevents the page from submitting twice
//////////////////////////////////////////////////////////////////////////////////////

//create an instance of the ADO connection object
$conn = new COM ("ADODB.Connection") or die("Cannot start ADO");
//define connection string, specify database driver
$connStr = "PROVIDER=SQLOLEDB;SERVER=".$myServer.";UID=".$myUser.";PWD=".$myPass.";DATABASE=".$myDB;
//Open the connection to the database
try {
    $conn->open($connStr);
} catch (Exception $e) {
    $message .= "\n\nConnection failed: " . $e->getMessage();
}

//do not send "fail", "junk", "not found", "review" or "unexpected error" SmartForms data to DNB table in CRM
if ((strcasecmp($Confidence_Level__c,"fail") != 0) && (strcasecmp($Confidence_Level__c,"junk") != 0) && (strcasecmp($Confidence_Level__c,"not found") != 0) && (strcasecmp($Confidence_Level__c,"review") != 0) && (strcasecmp($Confidence_Level__c,"unexpected error") != 0)) { 

	//declare the SQL statement that will query the database
	$query = "select Matched_Company_id from DNB where Matched_Company_id = '" . $Matched_Company_XID__c . "'";

	//execute the SQL statement and return records
	try {
	    $rs = $conn->execute($query);
	} catch (Exception $e) {
	    $message .= "\n\nSELECT Matched_Company_id query failed: " . $e->getMessage() . "\n\nQuery = " . $query;
	}

	if (!$rs->EOF) { $insertOrUpdate = "update"; }

	if (strcasecmp($insertOrUpdate,"insert") == 0) {
		$query = "INSERT INTO DNB (CREATEDDATE, CLVL, DHQ_Address1, DHQ_Address2, DHQ_Annual_Revenue, DHQ_City, DHQ_Company, DHQ_Company_ID, DHQ_Country, DHQ_Country_Code, DHQ_Employee_Count, DHQ_Employee_Here, DHQ_Location_Type, DHQ_NAICS, DHQ_NAICS_Name, DHQ_Phone, DHQ_Sic, DHQ_Sic_Name, DHQ_State, DHQ_State_Code, DHQ_Subsidiary, DHQ_Trade_Name, DHQ_URL, DHQ_Zip, GHQ_Address1, GHQ_Address2, GHQ_Annual_Revenue, GHQ_City, GHQ_Company, GHQ_Company_ID, GHQ_Country, GHQ_Country_Code, GHQ_Employee_Count, GHQ_Employee_Here, GHQ_Location_Type, GHQ_NAICS, GHQ_NAICS_Name, GHQ_Phone, GHQ_Sic, GHQ_Sic_Name, GHQ_State, GHQ_State_Code, GHQ_Subsidiary, GHQ_Trade_Name, GHQ_URL, GHQ_Zip, HQ_Address1, HQ_Address2, HQ_Annual_Revenue, HQ_City, HQ_Company, HQ_Company_ID, HQ_Country, HQ_Country_Code, HQ_Employee_Count, HQ_Employee_Here, HQ_Location_Type, HQ_NAICS, HQ_NAICS_Name, HQ_Phone, HQ_Sic, HQ_Sic_Name, HQ_State, HQ_State_Code, HQ_Subsidiary, HQ_Trade_Name, HQ_URL, HQ_Zip, Matched_Address1, Matched_Address2, Matched_Annual_Revenue, Matched_City, Matched_Company_id, Matched_Company_Name, Matched_Country, Matched_Country_Code, Matched_Employee_Count, Matched_Employee_Here, Matched_Location_Type, Matched_NAICS, Matched_NAICS_Name, Matched_Phone, Matched_Sic, Matched_Sic_Name, Matched_State, Matched_State_Code, Matched_Subsidiary, Matched_Trade_Name, Matched_URL, Matched_Zip, Matched_Company_Duns_Industry__c, GHQ_Duns_Industry__c) VALUES (" . $current_timestamp . ", '" . $Confidence_Level__c . "', '" . $DHQ_Address1__c . "', '" . $DHQ_Address2__c . "', " . (int) $DHQ_Annual_Revenue__c . ", '" . $DHQ_City__c . "', '" . $DHQ_Company__c . "', '" . $DHQ_Company_XID__c . "', '" . $DHQ_Country__c . "', '" . $DHQ_Country_Code__c . "', " . (int) $DHQ_Employee_Count__c . ", " . (int) $DHQ_Employee_Here__c . ", '" . $DHQ_Location_Type__c . "', '" . $DHQ_NAICS__c . "', '" . $DHQ_NAICS_Name__c . "', '" . $DHQ_Phone__c . "', '" . $DHQ_SIC__c . "', '" . $DHQ_SIC_Name__c . "', '" . $DHQ_State__c . "', '" . $DHQ_State_Code__c . "', '" . $DHQ_Subsidiary__c . "', '" . $DHQ_Trade_Name__c . "', '" . $DHQ_URL__c . "', '" . $DHQ_Zip__c . "', '" . $GHQ_Address1__c . "', '" . $GHQ_Address2__c . "', " . (int) $GHQ_Annual_Revenue__c . ", '" . $GHQ_City__c . "', '" . $GHQ_Company__c . "', '" . $GHQ_Company_XID__c . "', '" . $GHQ_Country__c . "', '" . $GHQ_Country_Code__c . "', " . (int) $GHQ_Employee_Count__c . ", " . (int) $GHQ_Employee_Here__c . ", '" . $GHQ_Location_Type__c . "', '" . $GHQ_NAICS__c . "', '" . $GHQ_NAICS_Name__c . "', '" . $GHQ_Phone__c . "', '" . $GHQ_SIC__c . "', '" . $GHQ_SIC_Name__c . "', '" . $GHQ_State__c . "', '" . $GHQ_State_Code__c . "', '" . $GHQ_Subsidiary__c . "', '" . $GHQ_Trade_Name__c . "', '" . $GHQ_URL__c . "', '" . $GHQ_Zip__c . "', '" . $HQ_Address1__c . "', '" . $HQ_Address2__c . "', " . (int) $HQ_Annual_Revenue__c . ", '" . $HQ_City__c . "', '" . $HQ_Company__c . "', '" . $HQ_Company_XID__c . "', '" . $HQ_Country__c . "', '" . $HQ_Country_Code__c . "', " . (int) $HQ_Employee_Count__c . ", " . (int) $HQ_Employee_Here__c . ", '" . $HQ_Location_Type__c . "', '" . $HQ_NAICS__c . "', '" . $HQ_NAICS_Name__c . "', '" . $HQ_Phone__c . "', '" . $HQ_SIC_Field__c . "', '" . $HQ_SIC_Name__c . "', '" . $HQ_State__c . "', '" . $HQ_State_Code__c . "', '" . $HQ_Subsidiary__c . "', '" . $HQ_Trade_Name__c . "', '" . $HQ_URL__c . "', '" . $HQ_Zip__c . "', '" . $Matched_Address1__c . "', '" . $Matched_Address2__c . "', " . (int) $Matched_Annual_Revenue__c . ", '" . $Matched_City__c . "', '" . $Matched_Company_XID__c . "', '" . $Matched_Company_Name__c . "', '" . $Matched_Country__c . "', '" . $Matched_Country_Code__c . "', " . (int) $Matched_Employee_Count__c . ", " . (int) $Matched_Employee_Here__c . ", '" . $Matched_Location_Type__c . "', '" . $Matched_NAICS__c . "', '" . $Matched_NAICS_Name__c . "', '" . $Matched_Phone__c . "', '" . $Matched_SIC__c . "', '" . $Matched_SIC_Name__c . "', '" . $Matched_State__c . "', '" . $Matched_State_Code__c . "', '" . $Matched_Subsidiary__c . "', '" . $Matched_Trade_Name__c . "', '" . $Matched_URL__c . "', '" . $Matched_Zip__c . "', '" . $Matched_Company_Duns_Industry__c . "', '" . $GHQ_Duns_Industry__c . "')";
	} else {
		$query = "UPDATE DNB SET CREATEDDATE=" . $current_timestamp . ", CLVL='" . $Confidence_Level__c . "', DHQ_Address1='" . $DHQ_Address1__c . "', DHQ_Address2='" . $DHQ_Address2__c . "', DHQ_Annual_Revenue=" . (int) $DHQ_Annual_Revenue__c . ", DHQ_City='" . $DHQ_City__c . "', DHQ_Company='" . $DHQ_Company__c . "', DHQ_Company_ID='" . $DHQ_Company_XID__c . "', DHQ_Country='" . $DHQ_Country__c . "', DHQ_Country_Code='" . $DHQ_Country_Code__c . "', DHQ_Employee_Count=" . (int) $DHQ_Employee_Count__c . ", DHQ_Employee_Here=" . (int) $DHQ_Employee_Here__c . ", DHQ_Location_Type='" . $DHQ_Location_Type__c . "', DHQ_NAICS='" . $DHQ_NAICS__c . "', DHQ_NAICS_Name='" . $DHQ_NAICS_Name__c . "', DHQ_Phone='" . $DHQ_Phone__c . "', DHQ_Sic='" . $DHQ_SIC__c . "', DHQ_Sic_Name='" . $DHQ_SIC_Name__c . "', DHQ_State='" . $DHQ_State__c . "', DHQ_State_Code='" . $DHQ_State_Code__c . "', DHQ_Subsidiary='" . $DHQ_Subsidiary__c . "', DHQ_Trade_Name='" . $DHQ_Trade_Name__c . "', DHQ_URL='" . $DHQ_URL__c . "', DHQ_Zip='" . $DHQ_Zip__c . "', GHQ_Address1='" . $GHQ_Address1__c . "', GHQ_Address2='" . $GHQ_Address2__c . "', GHQ_Annual_Revenue=" . (int) $GHQ_Annual_Revenue__c . ", GHQ_City='" . $GHQ_City__c . "', GHQ_Company='" . $GHQ_Company__c . "', GHQ_Company_ID='" . $GHQ_Company_XID__c . "', GHQ_Country='" . $GHQ_Country__c . "', GHQ_Country_Code='" . $GHQ_Country_Code__c . "', GHQ_Employee_Count=" . (int) $GHQ_Employee_Count__c . ", GHQ_Employee_Here=" . (int) $GHQ_Employee_Here__c . ", GHQ_Location_Type='" . $GHQ_Location_Type__c . "', GHQ_NAICS='" . $GHQ_NAICS__c . "', GHQ_NAICS_Name='" . $GHQ_NAICS_Name__c . "', GHQ_Phone='" . $GHQ_Phone__c . "', GHQ_Sic='" . $GHQ_SIC__c . "', GHQ_Sic_Name='" . $GHQ_SIC_Name__c . "', GHQ_State='" . $GHQ_State__c . "', GHQ_State_Code='" . $GHQ_State_Code__c . "', GHQ_Subsidiary='" . $GHQ_Subsidiary__c . "', GHQ_Trade_Name='" . $GHQ_Trade_Name__c . "', GHQ_URL='" . $GHQ_URL__c . "', GHQ_Zip='" . $GHQ_Zip__c . "', HQ_Address1='" . $HQ_Address1__c . "', HQ_Address2='" . $HQ_Address2__c . "', HQ_Annual_Revenue=" . (int) $HQ_Annual_Revenue__c . ", HQ_City='" . $HQ_City__c . "', HQ_Company='" . $HQ_Company__c . "', HQ_Company_ID='" . $HQ_Company_XID__c . "', HQ_Country='" . $HQ_Country__c . "', HQ_Country_Code='" . $HQ_Country_Code__c . "', HQ_Employee_Count=" . (int) $HQ_Employee_Count__c . ", HQ_Employee_Here=" . (int) $HQ_Employee_Here__c . ", HQ_Location_Type='" . $HQ_Location_Type__c . "', HQ_NAICS='" . $HQ_NAICS__c . "', HQ_NAICS_Name='" . $HQ_NAICS_Name__c . "', HQ_Phone='" . $HQ_Phone__c . "', HQ_Sic='" . $HQ_SIC_Field__c . "', HQ_Sic_Name='" . $HQ_SIC_Name__c . "', HQ_State='" . $HQ_State__c . "', HQ_State_Code='" . $HQ_State_Code__c . "', HQ_Subsidiary='" . $HQ_Subsidiary__c . "', HQ_Trade_Name='" . $HQ_Trade_Name__c . "', HQ_URL='" . $HQ_URL__c . "', HQ_Zip='" . $HQ_Zip__c . "', Matched_Address1='" . $Matched_Address1__c . "', Matched_Address2='" . $Matched_Address2__c . "', Matched_Annual_Revenue=" . (int) $Matched_Annual_Revenue__c . ", Matched_City='" . $Matched_City__c . "', Matched_Company_Name='" . $Matched_Company_Name__c . "', Matched_Country='" . $Matched_Country__c . "', Matched_Country_Code='" . $Matched_Country_Code__c . "', Matched_Employee_Count=" . (int) $Matched_Employee_Count__c . ", Matched_Employee_Here=" . (int) $Matched_Employee_Here__c . ", Matched_Location_Type='" . $Matched_Location_Type__c . "', Matched_NAICS='" . $Matched_NAICS__c . "', Matched_NAICS_Name='" . $Matched_NAICS_Name__c . "', Matched_Phone='" . $Matched_Phone__c . "', Matched_Sic='" . $Matched_SIC__c . "', Matched_Sic_Name='" . $Matched_SIC_Name__c . "', Matched_State='" . $Matched_State__c . "', Matched_State_Code='" . $Matched_State_Code__c . "', Matched_Subsidiary='" . $Matched_Subsidiary__c . "', Matched_Trade_Name='" . $Matched_Trade_Name__c . "', Matched_URL='" . $Matched_URL__c . "', Matched_Zip='" . $Matched_Zip__c . "', Matched_Company_Duns_Industry__c='" . $Matched_Company_Duns_Industry__c . "', GHQ_Duns_Industry__c='" . $GHQ_Duns_Industry__c .  "' WHERE Matched_Company_id = '" . $Matched_Company_XID__c ."'";
	}

	//update SmartForms_Activity_Table at the same time;
	$query .= "; INSERT INTO SmartForms_Activity_Table (Matched_Company_ID, CLVL, EmailAddress, CreatedDate, Tactic_code, Country, State_City, my_geoIP_cityID, my_geoIP_StateID, my_geoIP_countryID) VALUES ('" . $Matched_Company_XID__c . "', '" . $Confidence_Level__c . "', '" . $EmailAddress . "', " . $current_timestamp . ", '" . $Tactic_Code__c . "', '" . $Country . "', '" . $State_City . "', '" . $my_geoIP_cityID__c . "', '" . $my_geoIP_stateID__c . "', '" . $my_geoIP_countryID__c . "')";

// end do not send "fail", "junk", "not found" or "review" SmartForms data to DNB table in CRM
} else { 
	//update SmartForms_Activity_Table for all form submissions
	$query = "INSERT INTO SmartForms_Activity_Table (Matched_Company_ID, CLVL, EmailAddress, CreatedDate, Tactic_code, Country, State_City, my_geoIP_cityID, my_geoIP_StateID, my_geoIP_countryID) VALUES ('" . $Matched_Company_XID__c . "', '" . $Confidence_Level__c . "', '" . $EmailAddress . "', " . $current_timestamp . ", '" . $Tactic_Code__c . "', '" . $Country . "', '" . $State_City . "', '" . $my_geoIP_cityID__c . "', '" . $my_geoIP_stateID__c . "', '" . $my_geoIP_countryID__c . "')";
}

//write to the db
try {
    $rs = $conn->execute($query);
} catch (Exception $e) {
    $message .= "\n\n" . $insertOrUpdate . " query failed: " . $e->getMessage() . "\n\nQuery = " . $query;
}

//close the connection and recordset objects freeing up resources 
try {
	$rs = null;
	$conn = null;
} catch (Exception $e) {
    $message .= "\n\nClose failed: " . $e->getMessage();
}

//////////////////////////////////////////////////////////////////////////////////////
} // end "this prevents the page from submitting twice" 
//////////////////////////////////////////////////////////////////////////////////////

//email error message(s) -- if there are any
if (strcasecmp($message,"CRM DB errors below.") != 0) {
	mail($to, $subject, $message, $headers);
}

 //send to Manticore
//////////////////////////////////////////////////////////////////////////////////////
//do not send "fail", "junk", "not found", "review" or "unexpected error" SmartForms data to Manticore
if ((strcasecmp($Confidence_Level__c,"fail") == 0) || (strcasecmp($Confidence_Level__c,"junk") == 0) || (strcasecmp($Confidence_Level__c,"not found") == 0) || (strcasecmp($Confidence_Level__c,"review") == 0) || (strcasecmp($Confidence_Level__c,"unexpected error") == 0)) {
	$additionalFieldsNotSentToManticore = array("GHQ_Company__c", "GHQ_Company_XID__c", "GHQ_Employee_Count__c", "GHQ_NAICS__c", "Matched_Address1__c", "Matched_Address2__c", "Matched_City__c", "Matched_Company_Name__c", "Matched_Company_XID__c", "Matched_Country__c", "Matched_Employee_Count__c", "Matched_NAICS__c", "Matched_State__c", "Matched_Zip__c", "my_geoIP_cityID__c", "my_geoIP_StateID__c", "my_geoIP_countryID__c", "Matched_Company_Duns_Industry__c", "GHQ_Duns_Industry__c");

	$bothArrays = array_merge($fieldsNotSentToManticore,$additionalFieldsNotSentToManticore);
	$fieldsNotSentToManticore = $bothArrays;
}

// create Manticore URL
$kv = array();
$keyFound = "no";
foreach ($_POST as $key => $value) {
	foreach ($fieldsNotSentToManticore as $keyName) {
		if (strcasecmp($key,$keyName) == 0) {
			$keyFound = "yes";
		}
	}
	if ($keyFound == "yes") {
		$keyFound = "no";
	} else {
		//remove leading slash before eacaped double and single quotes
		$value = stripslashes($value);		
		//escape ampersands and plus signs from values
		$value = str_replace('&','%26',$value);
		$value = str_replace('+','%2B',$value);
		//replace semicolons with commas -- semicolons break the Manticore URL
		$value = str_replace(";",",",$value); 
		$kv[] = "$key=$value";
	}
}

$manticoreURLadditional = join("&", $kv);
$manticoreURLadditional = str_replace(" ","%20",$manticoreURLadditional);
$manticoreURLadditional = str_replace("#","%23",$manticoreURLadditional);
$manticoreURLadditional = str_replace('"','%22',$manticoreURLadditional);
$manticoreURLadditional = str_replace('/','%2F',$manticoreURLadditional);


	$Redirect = rawurlencode($Redirect);
	$Redirect = str_replace("%20","+",$Redirect);
	$Redirect = str_replace("/","%2F",$Redirect);

$manticoreURL = "http://stats.manticoretechnology.com/Data/409/6938/EF30EA63-C343-4934-A65D-B00368852CB1/mtcContactReg.aspx?MTC_KEY=EF30EA63-C343-4934-A65D-B00368852CB1&MTC_ID=6938&MTC_GROUP=409&UseCookie=true&";
$manticoreURL = $manticoreURL . $manticoreURLadditional . "&Redirect=" . $Redirect;

//////////////////////////////////////////////////////////////////////////////////////
// BEGIN send to Manticore
//////////////////////////////////////////////////////////////////////////////////////
// Create Http context details
$opts = array(
	'http'=>array(
		'method'=>"GET",
		'header'=>"Accept-language: en\r\n"
	)
);
$context = stream_context_create($opts); 
$content = file_get_contents($manticoreURL, false, $context);
//////////////////////////////////////////////////////////////////////////////////////
// END send to Manticore
//////////////////////////////////////////////////////////////////////////////////////

/* ================================================================================================================
The commented code below is for debugging
================================================================================================================ */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Planview - Collateral Request</title>
	<meta name="robots" content="noindex,follow" />
	<meta http-equiv="refresh" content="0; URL=<?php echo $manticoreURL; ?>" />
    <link href="/css/campaign.css" type="text/css" rel="stylesheet" />
<style type="text/css" media="all">
<!--
body {
background-color:#ebebeb;
background-image:url(none);
}
#header-error-page {
background-color: #1c3151;
background-position:bottom left;
background-image:url('/img/header-bg-1x65.gif');
background-repeat:repeat-x;
border-top:solid #000000 5px;
height:56px;
width:788px;
}
#maindiv {
width:788px;
}
#maindiv-wrapper {
background-color: #ebebeb;
background-position:0px 0px;
background-image:url('/img/body-bg-818x1.gif');
background-repeat:repeat-y;
width:818px;
margin-left:auto !important;
margin-right:auto !important;
margin-bottom:0em;
text-align:center;
}
#maindiv-wrapper-header {
background-color: #ebebeb;
background-position:0px 0px;
background-image:url('/img/body-bg-818x15-top.gif');
background-repeat:no-repeat;
height:15px;
width:818px;
}
#maindiv-wrapper-footer {
background-color: #ebebeb;
background-position:0px 0px;
background-image:url('/img/body-bg-818x15-bottom.gif');
background-repeat:no-repeat;
height:15px;
width:818px;
}
-->
</style>
</head>
<body style="padding-right: 3px; padding-left: 3px; padding-bottom: 3px; padding-top: 3px">
<div id="maindiv-wrapper">
<div id="maindiv-wrapper-header"></div>
<div id="maindiv">
<div id="header-error-page">
<a href="/"><img id="logo" height="49" alt="Planview" src="/img/campaigns/logo-155x49.png" width="155" name="logo" style="margin:0px 0px 5px 25px;" /></a>
</div><!-- header-error-page -->

<table id="content" cellspacing="0" cellpadding="0" width="787" border="0">
<tbody>
<tr>
<td class="onecolumn" id="pagecontent" style="padding:50px;">

<p style="font-size:15px;">Please wait while your request is being processed.</p>

<p style="font-size:15px;"><a href="<?php echo $manticoreURL; ?>">Click here if you are not redirected automatically.</a></p>

</td>
</tr>
</tbody>
</table>
</div>
<!-- end maindiv -->
<div id="maindiv-wrapper-footer"></div>
</div>
<!-- end maindiv wrapper -->
</body>
</html>