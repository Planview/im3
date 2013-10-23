// $(document).ready(function(){ 
// 	//-- set tactic code text value in Manticore forms
// 	if ( $('#Tactic__c').length ) { //if exists
// 		setTacticCode('WT.mc_id','Tactic__c');
// 	}
// 	//-- set tactic code raw value in Manticore forms
// 	if ( $('#Tactic_Code__c').length ) { //if exists
// 		setTacticCodeRaw('WT.mc_id','Tactic_Code__c');
// 	}
// });
// //-- get query string variable value from the URL string
// function getQueryVariableValue(variableName) { 
//  	var query = window.location.search.substring(1); 
//  	var queryResults = query.split("&"); 
//  	for (var i=0;i<queryResults.length;i++) { 
//  		var pair = queryResults[i].split("="); 
//  		if (pair[0] == variableName) { 
//    			return pair[1]; 
//     	}
//   	}
// }
// //-- set tactic code text value in Manticore forms
// function setTacticCode(queryVariableName,tacticCodeElementID) {
// 	var queryVariableValue = getQueryVariableValue(queryVariableName);
// 	if(queryVariableValue) {
// 		var numberOfTacticCodeDigits = 3;
// 		if (queryVariableValue.length == 10) { //00-99
// 			numberOfTacticCodeDigits = 2;
// 		}		
// 		var queryVariableValueNumber = queryVariableValue.substr((queryVariableValue.length - numberOfTacticCodeDigits),numberOfTacticCodeDigits);
// 		if (!isNaN(queryVariableValueNumber)) { //if the last digits of the code are numbers, use the tacticCodes array value
// 			queryVariableValue = tacticCodes[Number(queryVariableValueNumber)];	
// 		}
// 		var e = document.getElementById(tacticCodeElementID);
//         e.value = queryVariableValue;
// 	}
// }
// //-- set tactic code raw value in Manticore forms
// function setTacticCodeRaw(queryVariableName,tacticCodeElementID) {
// 	var queryVariableValue = getQueryVariableValue(queryVariableName);
// 	if(queryVariableValue) {
// 		var e = document.getElementById(tacticCodeElementID);
//         e.value = queryVariableValue;
// 	}
// }
//-- tactic codes
var tacticCodes = new Array();
tacticCodes[0]="Web";
tacticCodes[1]="Homepage Highlight";
tacticCodes[2]="APAC Landing Page";
tacticCodes[3]="UK - Country Page";
tacticCodes[4]="Switchbox";
tacticCodes[5]="FR - Country Page";
tacticCodes[6]="Italy - Country Page";
tacticCodes[7]="Sales link";
tacticCodes[8]="Resource Center Ad - Topic";
tacticCodes[9]="Resource Center Ad -Main";
tacticCodes[10]="Program Thank You Page";
tacticCodes[11]="PPC";
tacticCodes[12]="PlanviewPRISMS.com";
tacticCodes[13]="Customer Newsletter";
tacticCodes[14]="Product Pulse Blog";
tacticCodes[15]="Portfolio Perspectives Blog";
tacticCodes[16]="Twitter";
tacticCodes[17]="LinkedIn Groups";
tacticCodes[18]="LinkedIn Ads";
tacticCodes[19]="Innovation Fixer";
tacticCodes[20]="Youtube";
tacticCodes[21]="Handbook";
tacticCodes[22]="Press Release";
tacticCodes[23]="PDMA";
tacticCodes[24]="PDMA Visions";
tacticCodes[25]="HBR";
tacticCodes[26]="CTG - Consumer Technology Group e-Postcard";
tacticCodes[27]="AFP";
tacticCodes[28]="MBT";
tacticCodes[29]="GIL";
tacticCodes[30]="FEI - Financial Executives International";
tacticCodes[31]="FERF - Financial Executives Research Foundation";
tacticCodes[32]="Frost and Sullivan";
tacticCodes[33]="Tech-Clarity";
tacticCodes[34]="Kalypso";
tacticCodes[35]="Strategic Harmony";
tacticCodes[36]="BrightIdea";
tacticCodes[37]="Works Management";
tacticCodes[38]="Projects @ Work";
tacticCodes[39]="Link within White Paper";
tacticCodes[40]="Infographic";
tacticCodes[41]="The Engineer";
tacticCodes[42]="DE - Five I's";
tacticCodes[43]="Innovation Excellence";
tacticCodes[44]="Inside Sales";
tacticCodes[45]="Medical Devices";
tacticCodes[46]="Link from Landing Page";
tacticCodes[47]="Product Management Talk";
tacticCodes[48]="Direct Mail";
tacticCodes[49]="DE - it-production.com";
tacticCodes[50]="Pure Insights";
tacticCodes[51]="DE - industrie-forum.net";
tacticCodes[52]="CFO.com";
tacticCodes[53]="Strategic Finance";
tacticCodes[54]="DE - digital-engineering-magazin.de";
tacticCodes[55]="DE - digital-business-magazin.de";
tacticCodes[56]="Innovation Management";
tacticCodes[57]="From Executive Summary";
tacticCodes[58]="DE - XING";
tacticCodes[59]="DE - CompetenceSite";
tacticCodes[60]="Email NA";
tacticCodes[61]="Email UK";
tacticCodes[62]="Email ISR";
tacticCodes[63]="Email FR";
tacticCodes[64]="Email DACH";
tacticCodes[65]="Email";
tacticCodes[66]="Email";
tacticCodes[67]="Email";
tacticCodes[68]="Email";
tacticCodes[69]="Email";
tacticCodes[70]="Email";
tacticCodes[71]="Email";
tacticCodes[72]="Email";
tacticCodes[73]="Email";
tacticCodes[74]="Webinarlistings.com (promo)";
tacticCodes[75]="PMI";
tacticCodes[76]="Product Camp";
tacticCodes[77]="PIPELINE Speakers";
tacticCodes[78]="ISPIM";
tacticCodes[79]="DE - PPC";
tacticCodes[80]="DE - External Promotion";
tacticCodes[81]="DE - Thank you page";
tacticCodes[82]="DE - Country Page";
tacticCodes[83]="DE - IDG";
tacticCodes[84]="DE - Resource Center Ad";
tacticCodes[85]="DE - Inside Sales";
tacticCodes[86]="DE - Sales Consulting";
tacticCodes[87]="Email Salesify";
tacticCodes[88]="Email Proactive";
tacticCodes[89]="SmartOrg";
tacticCodes[90]="FR - Customer Newsletter";
tacticCodes[91]="DE - Customer Newsletter";
tacticCodes[92]="DE - economic-engineering.de";
tacticCodes[93]="DE - Press Release";
tacticCodes[94]="IntelligentHQ";
tacticCodes[95]="Product Innovation Educators";
tacticCodes[96]="DE - ProjektMagazin";
tacticCodes[97]="DE - lebensmittelzeitung.net";
tacticCodes[98]="DE - LinkedIn";
tacticCodes[99]="DE - Homepage Highlight";
tacticCodes[100]="Generic Promotion Partner";
tacticCodes[101]="Product Expo";
tacticCodes[102]="Link from PD Landing Page";
tacticCodes[103]="Link from IT Landing Page";
tacticCodes[104]="Link from CFP Landing Page";
tacticCodes[105]="Link from SRP Landing Page";
tacticCodes[106]="Project Manager Online - AU";
tacticCodes[107]="Pinterest";
tacticCodes[108]="Print Ad";