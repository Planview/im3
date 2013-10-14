<?php 
/**
 * This is the form to display to users that have not yet completed it
 *
 * @since 0.0.0
 * @version 0.0.0
 * @package IM3
*/

//  Define a variable with access to the constants so we can interpolate it in the HEREDOC string definition
$constants = get_defined_constants();

$customHeaderStyles = <<<CUSTOM_HEADER_STYLES

CUSTOM_HEADER_STYLES;

$customFooterScripts = <<<CUSTOM_FOOTER_SCRIPTS

CUSTOM_FOOTER_SCRIPTS;

include(IM3_ROOT_DIR . 'inc/views/header.php');

?>

      <!-- Example row of columns -->
      <div class="row js-webapp">
      	<form id="im3-form" class="col-md-12" action="http://www.planview.com/resources/form-processing/" method="post">
          <section id="intro" class="tab" data-tab-number="0" data-tab-enabled="true">
            <h1>Welcome</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut sem et nibh sodales vestibulum. Sed sed venenatis quam, ut convallis tortor. Sed volutpat nunc non orci congue, sed mattis purus lobortis. Sed vulputate vestibulum ligula, dignissim tristique erat bibendum sit amet. Cras vitae porta nunc. Aliquam eu mattis est. Ut vitae facilisis odio, nec vulputate nibh. Curabitur hendrerit eros vel diam hendrerit consectetur. Quisque lacus dui, facilisis ut venenatis eu, auctor nec mi. Vestibulum hendrerit sapien at nulla malesuada, sit amet tempor tellus rutrum. Pellentesque aliquet sem vitae quam elementum, ullamcorper interdum metus adipiscing.</p>
            <p>Quisque sollicitudin ultrices orci in consectetur. Phasellus pharetra urna mauris, nec dictum sapien ornare eu. Donec sit amet lorem sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae tempus ante, vitae adipiscing ante. Pellentesque condimentum rutrum magna, in pellentesque nibh ullamcorper at. Ut a tempus mauris, eu dapibus ante. Proin ac rhoncus ipsum, sed ullamcorper tellus. Pellentesque egestas orci a nunc posuere porttitor. In hac habitasse platea dictumst. Maecenas dignissim enim neque, ac cursus diam imperdiet vitae. Morbi ornare dui tincidunt nisi laoreet, sed posuere eros fringilla.</p>
          </section>

          <fieldset id="people" class="tab" data-tab-number="1" data-tab-enabled="false">
            <legend style="margin-bottom: 0;">People</legend>
            <div class="levels">
              <ul>
                <li class="level-five">
                  <dl>
                    <dt><span class="sr-only">Level </span>5</dt>
                    <dd>Executive leadership drives innovation</dd>
                    <dd>&ldquo;Center for Process Excellence and Innovation&rdquo; reports to executive team</dd>
                    <dd>Decision making collaborative and efficient</dd>
                    <dd>Everyone throughout the commercialization process understands role</dd>
                    <dd>Project managers and scrum masters lead innovation and development teams</dd>
                  </dl>
                </li>
                <li class="level-four">
                  <dl>
                    <dt><span class="sr-only">Level </span>4</dt>
                    <dd>Early formation of a &ldquo;Center for Process Excellence&rdquo;</dd>
                    <dd>Process managers and gatekeepers have clear direction, metrics, and ownership</dd>
                    <dd>Formalized portfolio manager positions at business unit and enterprise levels</dd>
                    <dd>Multiple strong champions for innovation</dd>
                  </dl>
                </li>
                <li class="level-three">
                  <dl>
                    <dt><span class="sr-only">Level </span>3</dt>
                    <dd>Established roles in the commercialization process</dd>
                    <dd>Beginning to champion innovation and portfolio management</dd>
                  </dl>
                </li>
                <li class="level-two">
                  <dl>
                    <dt><span class="sr-only">Level </span>2</dt>
                    <dd>Individual leaders own day-to-day processes and deliver product roadmap</dd>
                    <dd>Project managers not consistently following industry best practices</dd>
                    <dd>Cross-functional project teams not optimized for efficiency</dd>
                    <dd>Innovation leaders starting to emerge and introduce change</dd>
                  </dl>
                </li>
                <li class="level-one">
                  <dl>
                    <dt><span class="sr-only">Level </span>1</dt>
                    <dd>No cross-functional organization focused on innovation</dd>
                    <dd>Decision making by executive leadership only</dd>
                    <dd>Informal project leadership</dd>
                    <dd>Execution and product launches happen slow and steady</dd>
                    <dd>Unclear connection/hand-offs throughout commercialization process</dd>
                  </dl>
                </li>  
              </ul>
              <div class="form-group current">
                <p>Current</p>
                <input type="hidden" name="cpp" id="cpp" value="1" required="required" />
              </div>          
              <div class="form-group desired">
                <p>Desired</p>
                <input type="hidden" name="fpp" id="fpp" value="1" required="required" />
              </div>
            </div>   
          </fieldset>

          <fieldset id="processes" class="tab" data-tab-number="2" data-tab-enabled="false">
            <legend style="margin-bottom: 0;">Processes</legend>
            <div class="levels">
              <ul>
                <li class="level-five">
                  <dl>
                    <dt><span class="sr-only">Level </span>5</dt>
                    <dd>Fully automated and standardized processes that are easily adaptable</dd>
                    <dd>Portfolio metrics evolved to include competitive and environmental impact scores</dd>
                    <dd>Projects killed early and often during portfolio reviews</dd>
                    <dd>Voice of the customer captured on an ongoing basis</dd>
                    <dd>Continuous learning loop well established</dd>
                  </dl>
                </li>
                <li class="level-four">
                  <dl>
                    <dt><span class="sr-only">Level </span>4</dt>
                    <dd>Fully implemented gated process across multiple teams</dd>
                    <dd>Gaining courage killing underperforming projects</dd>
                    <dd>Portfolio metrics expanded to include resource capacity</dd>
                    <dd>Strategic alignment and channel impact considered</dd>
                    <dd>Capturing voice of the customer with caution</dd>
                    <dd>Governance process becoming efficient and streamlined</dd>
                  </dl>
                </li>
                <li class="level-three">
                  <dl>
                    <dt><span class="sr-only">Level </span>3</dt>
                    <dd>Documented and validated gated commercialization process in place</dd>
                    <dd>Regular portfolio reviews conducted</dd>
                    <dd>Voice of the customer becoming more formalized</dd>
                    <dd>Governance workflow not yet consistently repeatable</dd>
                  </dl>
                </li>
                <li class="level-two">
                  <dl>
                    <dt><span class="sr-only">Level </span>2</dt>
                    <dd>Metrics for evaluating innovation are inconsistent</dd>
                    <dd>Informal process for innovation and idea flow</dd>
                    <dd>No process to collaborate across the organization</dd>
                    <dd>Early realization of silo inefficiency and value of gated processes with cross-functional participation</dd>
                  </dl>
                </li>
                <li class="level-one">
                  <dl>
                    <dt><span class="sr-only">Level </span>1</dt>
                    <dd>Processes are departmentally focused but not documented</dd>
                    <dd>No formal gated process or templates for product development</dd>
                    <dd>Limited visibility into actuals, forecasts, post-mortem assessment, or roadmaps</dd>
                    <dd>Processes surrounding ideation, roadmap development, and portfolio reviews do not exist</dd>
                  </dl>
                </li>  
              </ul>
              <div class="form-group current">
                <p>Current</p>
                <input type="hidden" name="cpr" value="1" id="cpr" required="required" />
              </div>
              <div class="form-group desired">
                <p>Desired</p>
                <input type="hidden" name="fpr" value="1" id="fpr" required="required" />
              </div>   
            </div>         
          </fieldset>

          <fieldset id="tools" class="tab" data-tab-number="3" data-tab-enabled="false">
            <legend style="margin-bottom: 0;">Tools</legend>
            <div class="levels">
              <ul>
                <li class="level-five">
                  <dl>
                    <dt><span class="sr-only">Level </span>5</dt>
                    <dd>Highly functioning PPM system</dd>
                    <dd>Ideation collected for collaboration</dd>
                    <dd>Product roadmap tied to project execution and corporate strategy</dd>
                    <dd>Product catalog managed via PPM application</dd>
                    <dd>Configurable reports and metrics delivered across the organization</dd>
                  </dl>
                </li>
                <li class="level-four">
                  <dl>
                    <dt><span class="sr-only">Level </span>4</dt>
                    <dd>Project Portfolio Management (PPM) system in place automating the commercialization process</dd>
                    <dd>Resource capacity planning, roadmapping, and financial forecasting done within the PPM application</dd>
                    <dd>Formalized tool for capturing voice of the customer</dd>
                    <dd>Executive and project-level reporting and analytics are available and modifiable</dd>
                  </dl>
                </li>
                <li class="level-three">
                  <dl>
                    <dt><span class="sr-only">Level </span>3</dt>
                    <dd>Manual portfolio management</dd>
                    <dd>Soon to automate the commercialization process</dd>
                    <dd>Ideation centralized but not using a purpose built tool</dd>
                    <dd>Standard library of reports exist</dd>
                  </dl>
                </li>
                <li class="level-two">
                  <dl>
                    <dt><span class="sr-only">Level </span>2</dt>
                    <dd>Moving to shared spreadsheets in central location</dd>
                    <dd>Ideation matured to being captured and prioritized</dd>
                    <dd>Projects managed but not shared</dd>
                    <dd>Roadmap communicated but rarely updated</dd>
                    <dd>Reporting and analytics starting to be shared</dd>
                  </dl>
                </li>
                <li class="level-one">
                  <dl>
                    <dt><span class="sr-only">Level </span>1</dt>
                    <dd>Manual decentralized, un-integrated spreadsheets and basic project tracking tools</dd>
                    <dd>Only one or two centralized applications required</dd>
                    <dd>New ideas for improvements captured informally</dd>
                    <dd>Reporting inconsistent and roadmapping rare</dd>
                  </dl>
                </li>  
              </ul>
              <div class="form-group current">
                <p>Current</p>
                <input type="hidden" name="ct" value="1" id="ct" required="required" />
              </div>
              <div class="form-group desired">
                <p>Desired</p>
                <input type="hidden" name="ft" value="1" id="ft" required="required" />
              </div>  
            </div>             
          </fieldset>

          <fieldset id="contact" class="tab" data-tab-number="4" data-tab-enabled="false">
            <div id="customer-chart"></div>

                                    <input id="MTC_KEY" type="hidden" value="EF30EA63-C343-4934-A65D-B00368852CB1" name="MTC_KEY" />
                    <input id="MTC_ID" type="hidden" value="6938" name="MTC_ID" />
                    <input id="MTC_GROUP" type="hidden" value="409" name="MTC_GROUP" />
                    <input id="Redirect" type="hidden" value="<?php IM3_ROOT_URI; ?>?5/" name="Redirect" />
                    <input id="MTC_SERVER" type="hidden" value="stats.manticoretechnology.com" name="MTC_SERVER" />
                    <input id="ProspectPageID" type="hidden" value="907" name="ProspectPageID" />
                    <input id="SendToCRM" type="hidden" value="true" name="SendToCRM" />
                    <input id="ListID" type="hidden" name="ListID" value="12463" />
                    <input id="Tactic__c" name="Tactic__c" type="hidden" value="Web" />
                    <input id="Tactic_Code__c" name="Tactic_Code__c" type="hidden" value="101CF00100" />
                    <input id="Market__c" name="Market__c" type="hidden" value="" />
                    <input id="Product__c" name="Product__c" type="hidden" value="" />
                    <input id="Asset_Score__c" name="Asset_Score__c" type="hidden" value="8" />
                    <input id="Source_Campaign__c" type="hidden" name="Source_Campaign__c" value="Planview.com Contact Portlets" />
                    <input id="Activity_Type__c" type="hidden" name="Activity_Type__c" value="Form" />
                    <input id="RC_Collateral_Request__c" type="hidden" name="RC_Collateral_Request__c" value="Contact Us" />

                    <!-- begin SmartForms fields -->
                    <input type="hidden" name="Confidence_Level__c" id="Confidence_Level__c" value="" />
                    <input type="hidden" name="Matched_Company_Name__c"      id="Matched_Company_Name__c" value="" />
                    <input type="hidden" name="Matched_Address1__c"     id="Matched_Address1__c" value="" />
                    <input type="hidden" name="Matched_Address2__c"     id="Matched_Address2__c" value="" />
                    <input type="hidden" name="Matched_City__c"      id="Matched_City__c" value="" />
                    <input type="hidden" name="Matched_State__c"        id="Matched_State__c" value="" />
                    <input type="hidden" name="Matched_Zip__c"       id="Matched_Zip__c" value="" />
                    <input type="hidden" name="Matched_Country__c"       id="Matched_Country__c" value="" />
                    <input type="hidden" name="Matched_Phone__c"     id="Matched_Phone__c" value="" />
                    <input type="hidden" name="Matched_Trade_Name__c"     id="Matched_Trade_Name__c" value="" />
                    <input type="hidden" name="Matched_State_Code__c"      id="Matched_State_Code__c" value="" />
                    <input type="hidden" name="Matched_Country_Code__c"     id="Matched_Country_Code__c" value="" />
                    <input type="hidden" name="Matched_Employee_Count__c"       id="Matched_Employee_Count__c" value="" />
                    <input type="hidden" name="Matched_Annual_Revenue__c"       id="Matched_Annual_Revenue__c" value="" />
                    <input type="hidden" name="Matched_SIC__c"       id="Matched_SIC__c" value="" />
                    <input type="hidden" name="Matched_SIC_Name__c"   id="Matched_SIC_Name__c" value="" />
                    <input type="hidden" name="Matched_NAICS__c"     id="Matched_NAICS__c" value="" />
                    <input type="hidden" name="Matched_NAICS_Name__c" id="Matched_NAICS_Name__c" value="" />
                    <input type="hidden" name="Matched_URL__c"       id="Matched_URL__c" value="" />
                    <input type="hidden" name="Matched_Location_Type__c"       id="Matched_Location_Type__c" value="" />
                    <input type="hidden" name="HQ_Company__c"      id="HQ_Company__c" value="" />
                    <input type="hidden" name="HQ_Address1__c"     id="HQ_Address1__c" value="" />
                    <input type="hidden" name="HQ_Address2__c"     id="HQ_Address2__c" value="" />
                    <input type="hidden" name="HQ_City__c"      id="HQ_City__c" value="" />
                    <input type="hidden" name="HQ_State__c"        id="HQ_State__c" value="" />
                    <input type="hidden" name="HQ_Zip__c"       id="HQ_Zip__c" value="" />
                    <input type="hidden" name="HQ_Country__c"       id="HQ_Country__c" value="" />
                    <input type="hidden" name="HQ_Phone__c"     id="HQ_Phone__c" value="" />
                    <input type="hidden" name="HQ_Trade_Name__c"     id="HQ_Trade_Name__c" value="" />
                    <input type="hidden" name="HQ_State_Code__c"      id="HQ_State_Code__c" value="" />
                    <input type="hidden" name="HQ_Country_Code__c"     id="HQ_Country_Code__c" value="" />
                    <input type="hidden" name="HQ_Employee_Count__c"       id="HQ_Employee_Count__c" value="" />
                    <input type="hidden" name="HQ_Annual_Revenue__c"       id="HQ_Annual_Revenue__c" value="" />
                    <input type="hidden" name="HQ_SIC_Field__c"       id="HQ_SIC_Field__c" value="" />
                    <input type="hidden" name="HQ_SIC_Name__c"   id="HQ_SIC_Name__c" value="" />
                    <input type="hidden" name="HQ_NAICS__c"     id="HQ_NAICS__c" value="" />
                    <input type="hidden" name="HQ_NAICS_Name__c" id="HQ_NAICS_Name__c" value="" />
                    <input type="hidden" name="HQ_URL__c"       id="HQ_URL__c" value="" />
                    <input type="hidden" name="HQ_Location_Type__c"       id="HQ_Location_Type__c" value="" />
                    <input type="hidden" name="DHQ_Company__c"      id="DHQ_Company__c" value="" />
                    <input type="hidden" name="DHQ_Address1__c"     id="DHQ_Address1__c" value="" />
                    <input type="hidden" name="DHQ_Address2__c"     id="DHQ_Address2__c" value="" />
                    <input type="hidden" name="DHQ_City__c"      id="DHQ_City__c" value="" />
                    <input type="hidden" name="DHQ_State__c"        id="DHQ_State__c" value="" />
                    <input type="hidden" name="DHQ_Zip__c"       id="DHQ_Zip__c" value="" />
                    <input type="hidden" name="DHQ_Country__c"       id="DHQ_Country__c" value="" />
                    <input type="hidden" name="DHQ_Phone__c"     id="DHQ_Phone__c" value="" />
                    <input type="hidden" name="DHQ_Trade_Name__c"     id="DHQ_Trade_Name__c" value="" />
                    <input type="hidden" name="DHQ_State_Code__c"      id="DHQ_State_Code__c" value="" />
                    <input type="hidden" name="DHQ_Country_Code__c"     id="DHQ_Country_Code__c" value="" />
                    <input type="hidden" name="DHQ_Employee_Count__c"       id="DHQ_Employee_Count__c" value="" />
                    <input type="hidden" name="DHQ_Annual_Revenue__c"       id="DHQ_Annual_Revenue__c" value="" />
                    <input type="hidden" name="DHQ_SIC__c"       id="DHQ_SIC__c" value="" />
                    <input type="hidden" name="DHQ_SIC_Name__c"   id="DHQ_SIC_Name__c" value="" />
                    <input type="hidden" name="DHQ_NAICS__c"     id="DHQ_NAICS__c" value="" />
                    <input type="hidden" name="DHQ_NAICS_Name__c" id="DHQ_NAICS_Name__c" value="" />
                    <input type="hidden" name="DHQ_URL__c"       id="DHQ_URL__c" value="" />
                    <input type="hidden" name="DHQ_Location_Type__c"       id="DHQ_Location_Type__c" value="" />
                    <input type="hidden" name="GHQ_Company__c"      id="GHQ_Company__c" value="" />
                    <input type="hidden" name="GHQ_Address1__c"     id="GHQ_Address1__c" value="" />
                    <input type="hidden" name="GHQ_Address2__c"     id="GHQ_Address2__c" value="" />
                    <input type="hidden" name="GHQ_City__c"      id="GHQ_City__c" value="" />
                    <input type="hidden" name="GHQ_State__c"        id="GHQ_State__c" value="" />
                    <input type="hidden" name="GHQ_Zip__c"       id="GHQ_Zip__c" value="" />
                    <input type="hidden" name="GHQ_Country__c"       id="GHQ_Country__c" value="" />
                    <input type="hidden" name="GHQ_Phone__c"     id="GHQ_Phone__c" value="" />
                    <input type="hidden" name="GHQ_Trade_Name__c"     id="GHQ_Trade_Name__c" value="" />
                    <input type="hidden" name="GHQ_State_Code__c"      id="GHQ_State_Code__c" value="" />
                    <input type="hidden" name="GHQ_Country_Code__c"     id="GHQ_Country_Code__c" value="" />
                    <input type="hidden" name="GHQ_Employee_Count__c"       id="GHQ_Employee_Count__c" value="" />
                    <input type="hidden" name="GHQ_Annual_Revenue__c"       id="GHQ_Annual_Revenue__c" value="" />
                    <input type="hidden" name="GHQ_SIC__c"       id="GHQ_SIC__c" value="" />
                    <input type="hidden" name="GHQ_SIC_Name__c"   id="GHQ_SIC_Name__c" value="" />
                    <input type="hidden" name="GHQ_NAICS__c"     id="GHQ_NAICS__c" value="" />
                    <input type="hidden" name="GHQ_NAICS_Name__c" id="GHQ_NAICS_Name__c" value="" />
                    <input type="hidden" name="GHQ_URL__c"       id="GHQ_URL__c" value="" />
                    <input type="hidden" name="GHQ_Location_Type__c"       id="GHQ_Location_Type__c" value="" />
                    <input type="hidden" name="Matched_Company_XID__c" id="Matched_Company_XID__c" value="" />
                    <input type="hidden" name="Matched_Employee_Here__c" id="Matched_Employee_Here__c" value="" />
                    <input type="hidden" name="Matched_Subsidiary__c" id="Matched_Subsidiary__c" value="" />
                    <input type="hidden" name="HQ_Company_XID__c" id="HQ_Company_XID__c" value="" />
                    <input type="hidden" name="HQ_Employee_Here__c" id="HQ_Employee_Here__c" value="" />
                    <input type="hidden" name="HQ_Subsidiary__c" id="HQ_Subsidiary__c" value="" />
                    <input type="hidden" name="DHQ_Company_XID__c" id="DHQ_Company_XID__c" value="" />
                    <input type="hidden" name="DHQ_Employee_Here__c" id="DHQ_Employee_Here__c" value="" />
                    <input type="hidden" name="DHQ_Subsidiary__c" id="DHQ_Subsidiary__c" value="" />
                    <input type="hidden" name="GHQ_Company_XID__c" id="GHQ_Company_XID__c" value="" />
                    <input type="hidden" name="GHQ_Employee_Here__c" id="GHQ_Employee_Here__c" value="" />
                    <input type="hidden" name="GHQ_Subsidiary__c" id="GHQ_Subsidiary__c" value="" />
                    <input type="hidden" name="GHQ_Duns_Industry__c" id="GHQ_Duns_Industry__c" value="" />
                    <input type="hidden" name="Matched_Company_Duns_Industry__c" id="Matched_Company_Duns_Industry__c" value="" />
                    <input type="hidden" name="my_geoIP_cityID__c" id="my_geoIP_cityID__c" value="" />
                    <input type="hidden" name="my_geoIP_countryID__c" id="my_geoIP_countryID__c" value="" />
                    <input type="hidden" name="my_geoIP_stateID__c" id="my_geoIP_stateID__c" value="" />
                    <!-- end SmartForms fields -->

            <legend>Contact Information</legend>

            <div class="form-group">
              <label for="FirstName">First Name</label>
              <input id="FirstName" name="FirstName" class="form-control" type="text" placeholder="First Name">
            </div>

            <div class="form-group">
              <label for="last-name">Last Name</label>
              <input id="last-name" name="LastName" class="form-control" type="text" placeholder="Last Name">
            </div>

            <div class="form-group">
              <label for="EmailAddress">Email</label>
              <input id="EmailAddress" name="EmailAddress" class="form-control" type="text" placeholder="Email">
            </div>

            <div class="form-group">
              <label for="WorkPhone">Phone</label>
              <input type="text" name="WorkPhone" id="WorkPhone" class="form-control" required="required" placeholder="Phone" />
            </div>

            <div class="form-group">
              <label for="Company">Company Name</label>
              <input id="Company" name="Company" class="form-control" type="text" placeholder="Company Name">
            </div>

            <div class="form-group">
              <span class="radio-title" style="width: 60%;">Current Customer?</span>
              <fieldset class="radios-inner" style="width: 40%;">
              <input type="radio" name="Current_Customer__c" id="Current_Customer__c_01" value="Yes" tabindex="6" required="required" />
              <label for="Current_Customer__c_01">Yes</label>
              <input type="radio" name="Current_Customer__c" id="Current_Customer__c_02" value="No" tabindex="7" required="required" />
              <label for="Current_Customer__c_02">No</label></fieldset>
            </div>

            <div class="form-group">
              <label for="industry">Industry</label>
              <select class="form-control" name="industry" id="industry">
                <option value="">Please Select Your Industry</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
                <option value="5">Option 5</option>
                <option value="6">Option 6</option>
                <option value="7">Option 7</option>
                <option value="8">Option 8</option>
                <option value="9">Option 9</option>
              </select>
            </div>

            <div class="form-group">
              <label for="Region">State / Province</label>
              <select name="Region" id="Region"  class="form-control" required="required" >
              <option value="">Select state/province</option>
              <optgroup label="United States">
                  <option value="AL">AL Alabama</option>
                  <option value="AK">AK Alaska</option>
                  <option value="AZ">AZ Arizona</option>
                  <option value="AR">AR Arkansas</option>
                  <option value="CA">CA California</option>
                  <option value="CO">CO Colorado</option>
                  <option value="CT">CT Connecticut</option>
                  <option value="DE">DE Delaware</option>
                  <option value="DC">DC District Of Columbia</option>
                  <option value="FL">Fl Florida</option>
                  <option value="GA">GA Georgia</option>
                  <option value="HI">HI Hawaii</option>
                  <option value="ID">ID Idaho</option>
                  <option value="IL">IL Illinois</option>
                  <option value="IN">IN Indiana</option>
                  <option value="IA">IA Iowa</option>
                  <option value="KS">KS Kansas</option>
                  <option value="KY">KY Kentucky</option>
                  <option value="LA">LA Louisiana</option>
                  <option value="ME">ME Maine</option>
                  <option value="MD">MD Maryland</option>
                  <option value="MA">MA Massachusetts</option>
                  <option value="MI">MI Michigan</option>
                  <option value="MN">MN Minnesota</option>
                  <option value="MS">MS Mississippi</option>
                  <option value="MO">MO Missouri</option>
                  <option value="MT">MT Montana</option>
                  <option value="NE">NE Nebraska</option>
                  <option value="NV">NV Nevada</option>
                  <option value="NH">NH New Hampshire</option>
                  <option value="NJ">NJ New Jersey</option>
                  <option value="NM">NM New Mexico</option>
                  <option value="NY">NY New York</option>
                  <option value="NC">NC North Carolina</option>
                  <option value="ND">ND North Dakota</option>
                  <option value="OH">OH Ohio</option>
                  <option value="OK">OK Oklahoma</option>
                  <option value="OR">OR Oregon</option>
                  <option value="PA">PA Pennsylvania</option>
                  <option value="RI">RI Rhode Island</option>
                  <option value="SC">SC South Carolina</option>
                  <option value="SD">SD South Dakota</option>
                  <option value="TN">TN Tennessee</option>
                  <option value="TX">TX Texas</option>
                  <option value="UT">UT Utah</option>
                  <option value="VT">VT Vermont</option>
                  <option value="VA">VA Virginia</option>
                  <option value="WA">WA Washington</option>
                  <option value="WV">WV West Virginia</option>
                  <option value="WI">WI Wisconsin</option>
                  <option value="WY">WY Wyoming</option>
              </optgroup>
              <optgroup label="Canada">
                  <option value="AB">AB Alberta</option>
                  <option value="BC">BC British Columbia</option>
                  <option value="MB">MB Manitoba</option>
                  <option value="NB">NB New Brunswick</option>
                  <option value="NL">NL Newfoundland and Labrador</option>
                  <option value="NT">NT Northwest Territories</option>
                  <option value="NS">NS Nova Scotia</option>
                  <option value="NU">NU Nunavut</option>
                  <option value="ON">ON Ontario</option>
                  <option value="PE">PE Prince Edward Island</option>
                  <option value="QC">QC Quebec</option>
                  <option value="SK">SK Saskatchewan</option>
                  <option value="YT">YT Yukon Territory</option>
              </optgroup>
              <option value="Other">Other</option>
          </select>
            </div>

            <div class="form-group">
              <label for="Country">Country</label>
                                      <select name="Country" id="Country" tabindex="9" required="required" >
                            <option value="">Select country</option>
                            <option value="US">United States</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Aland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua And Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BQ">Bonaire, Saint Eustatius And Saba</option>
                            <option value="BA">Bosnia And Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CD">Congo, Democratic Republic of</option>
                            <option value="CG">Congo, Republic of</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Cote D'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CW">Curacao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="UK">England</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island And Mcdonald Islands</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle Of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia</option>
                            <option value="MD">Moldova</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="AN">Netherlands Antilles</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="KP">North Korea</option>
                            <option value="UK">Northern Ireland</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestinian Territory</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">RÃ©union</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="BL">Saint Barthelemy</option>
                            <option value="SH">Saint Helena, Ascension And Tristan Da Cunha</option>
                            <option value="KN">Saint Kitts And Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="MF">Saint Martin (French Part)</option>
                            <option value="PM">Saint Pierre And Miquelon</option>
                            <option value="VC">Saint Vincent And The Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome And Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="UK">Scotland</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SX">Sint Maarten (Dutch Part)</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia And The South Sandwich Islands</option>
                            <option value="KR">South Korea</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard And Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad And Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks And Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="UK">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VA">Vatican City State</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands, British</option>
                            <option value="VI">Virgin Islands, U.S.</option>
                            <option value="UK">Wales</option>
                            <option value="WF">Wallis And Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
            </div>

            <input type="submit" value="See How You Stack Up &raquo;" class="btn btn-lg btn-primary" />
          </fieldset>

          <section id="results" class="tab" data-tab-number="5" data-tab-enabled="false">
            <h2 id="results-title"></h2>

            <div id="customer-chart-2"></div>

            <div id="industry-chart"></div>

            <p id="results-info"></p>
          </section>

          <nav id="tab-nav">
            <ul>
              <li><a href="" class="tab-nav prev btn">Previous</a></li>
              <li><a href="" class="tab-nav next btn">Next</a></li>
            </ul>
          </nav>
      	</form>
      </div>

<?php include(IM3_ROOT_DIR . 'inc/views/footer.php');