<?php   
$ruser = 'aksNqFtfwR';
$rpass = 's3BRhNUQXv';
$rdb = 'aksNqFtfwR';



if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $Account_number = $_POST['Account_number'];
    $Account_type = $_POST['Account_type'];
    $Currency = $_POST['Currency'];
    $prefix = $_POST['prefix'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $cnic = $_POST['cnic'];
    $adress = $_POST['adress'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $DOB = $_POST['DOB'];
    $citizenship = $_POST['citizenship'];
    $occupation = $_POST['occupation'];
    $employer = $_POST['employer'];
    $status = $_POST['status'];
    $money = $_POST['money'];
    $joint_account = $_POST['yesno'];
    $jprefix = $_POST['jprefix'];
    $jlastname = $_POST['jlastname'];
    $jfirstname = $_POST['jfirstname'];
    $jnumber = $_POST['jnumber'];
    $jemail = $_POST['jemail'];
    $jcnic = $_POST['jcnic'];
    $jadress = $_POST['jadress'];
    $jcity = $_POST['jcity'];
    $jstate = $_POST['jstate'];
    $jzip = $_POST['jzip'];
    $jcountry = $_POST['jcountry'];
    $jDOB = $_POST['jDOB'];
    $jcitizenship = $_POST['jcitizenship'];
    $joccupation = $_POST['joccupation'];
    $jemployer = $_POST['jemployer'];
    $jstatus = $_POST['jstatus'];

        
    $rquery = "insert into account (Account_number, Account_type ,Currency,prefix,lastname,firstname,number,email,cnic,adress,city,state,zip,country,DOB,citizenship,occupation,employer,status,money,joint_account,jprefix,jlastname,jfirstname,jnumber,jemail,jcnic,jadress,jcity,jstate,jzip,jcountry,jDOB,jcitizenship,joccupation,jemployer,jstatus ) values('$Account_number','$Account_type','$Currency','$prefix','$lastname','$firstname','$number','$email','$cnic','$adress','$city','$state','$zip','$country','$DOB','$citizenship','$occupation','$employer','$status','$money','$joint_account','$jprefix','$jlastname','$jfirstname','$jnumber','$jemail','$jcnic','$jadress','$jcity','$jstate','$jzip','$jcountry','$jDOB','$jcitizenship','$joccupation','$jemployer','$jstatus')";
    mysqli_query($rdatabase,$rquery);

    header("Location: personal.php");
    die;
    
   
}

?>

<!DOCTYPE html>
<head>
    <title> SANFA Bank | Account Form </title>
        <link rel = "icon" href ="./../images/logo_img.jpg" 
        type = "image/x-icon">
        <link href = "./../css/Account_form.css" rel = "stylesheet">
        <script src="./../js/Account_form.js"></script>
</head>
<body>
    <form action="Account_form.php" method="POST">
        <img src="./../images/logo_banner.jpg" style="padding-left: 20px;">
        
        <fieldset>
            <legend class="bolder">
                Bank Account Application Form
            </legend>
            
            <input style="width: 50%;" type="text" name="Account_number" autofocus required placeholder="Your Account Number you got when you signed Up"><br>
            <label>Account Number:</label><br><br>
            <fieldset>
                <legend class="bolder">Account Details</legend>
                <p>
                    <label>Account type: </label> <br>
                    <input type="radio" name="Account_type" value="Current"> Current <br>
                    <input type="radio" name="Account_type" value="Saving"> Savings <br>
                    <input type="radio" name="Account_type" value="Business"> Business <br>
                </p> 
                
                <p>
                    <label>Currency Of Account: </label><br>
                    
                    <input type="radio" name="Currency" value="PKR"> Pakistani Rupee (PKR) <br>
                    <input type="radio" name="Currency" value="USD"> US Dollar (USD) <br>
                
                    
                </p>
            </fieldset> 
            <fieldset>
                <legend class="bolder">
                    Personal Information
                </legend>
                <p><i>The information given in this section is considered as the information of the primary account owner information.</i></p>
               <div class="rows">
                    <div>
                        <p>
                            <h3>Name:</h3>
                            <input type="text" placeholder="Mr. , Mrs. , Mss."  required name="prefix"> <br>
                            <label>Prefix: </label> <br><br>
                            
                            <input type="text" required name="lastname"> <br>
                            <label>Last Name:</label> <br><br>
                            <input type="text" required name="firstname"><br>
                            <label>First Name:</label>
                        </p>
                    </div>
                    <div class="shift">
                        <p>
                            <h3>Basic Information:</h3>
                            <input type="text" required  name="number" placeholder="Pattern: +92-334-3958850" pattern="[+][9][2][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]"> <br>
                            <label>Mobile Number </label> <br><br>

                            <input type="email" required placeholder="example@mail.com" name="email"> <br>
                            <label>Email:</label> <br><br>
                            <input type="text" placeholder="(Without Dashes)" name="cnic" required pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]"> <br>
                            <label>CNIC:</label>
                        </p>    
                    </div>

                    <div class="shift">
                        <p>
                            <h3>Adress:</h3>
                            <input type="text" name="adress" required> <br>
                            <label>Street Adress: </label> <br><br>
                            
                            <input type="text" name="city"  required> <br>
                            <label>City:</label> <br><br>
                            <input type="text" name="state" required><br>
                            <label>Province/state:</label>
                        </p>
                    </div>

                    <div class="shift">
                        <p>
                            <h3>Adress (Continued): </h3>
                            <input type="text" name="zip" required> <br>
                            <label>Postal / Zip code: </label> <br><br>
                            
                            <input type="text" list="country" required name="country">
                            <datalist id="country">
                                <option value=""> Please Select </option>
                                <option value="United States"> United States </option>
                                <option value="Afghanistan"> Afghanistan </option>
                                <option value="Albania"> Albania </option>
                                <option value="Algeria"> Algeria </option>
                                <option value="American Samoa"> American Samoa </option>
                                <option value="Andorra"> Andorra </option>
                                <option value="Angola"> Angola </option>
                                <option value="Anguilla"> Anguilla </option>
                                <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                                <option value="Argentina"> Argentina </option>
                                <option value="Armenia"> Armenia </option>
                                <option value="Aruba"> Aruba </option>
                                <option value="Australia"> Australia </option>
                                <option value="Austria"> Austria </option>
                                <option value="Azerbaijan"> Azerbaijan </option>
                                <option value="The Bahamas"> The Bahamas </option>
                                <option value="Bahrain"> Bahrain </option>
                                <option value="Bangladesh"> Bangladesh </option>
                                <option value="Barbados"> Barbados </option>
                                <option value="Belarus"> Belarus </option>
                                <option value="Belgium"> Belgium </option>
                                <option value="Belize"> Belize </option>
                                <option value="Benin"> Benin </option>
                                <option value="Bermuda"> Bermuda </option>
                                <option value="Bhutan"> Bhutan </option>
                                <option value="Bolivia"> Bolivia </option>
                                <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                                <option value="Botswana"> Botswana </option>
                                <option value="Brazil"> Brazil </option>
                                <option value="Brunei"> Brunei </option>
                                <option value="Bulgaria"> Bulgaria </option>
                                <option value="Burkina Faso"> Burkina Faso </option>
                                <option value="Burundi"> Burundi </option>
                                <option value="Cambodia"> Cambodia </option>
                                <option value="Cameroon"> Cameroon </option>
                                <option value="Canada"> Canada </option>
                                <option value="Cape Verde"> Cape Verde </option>
                                <option value="Cayman Islands"> Cayman Islands </option>
                                <option value="Central African Republic"> Central African Republic </option>
                                <option value="Chad"> Chad </option>
                                <option value="Chile"> Chile </option>
                                <option value="China"> China </option>
                                <option value="Christmas Island"> Christmas Island </option>
                                <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                                <option value="Colombia"> Colombia </option>
                                <option value="Comoros"> Comoros </option>
                                <option value="Congo"> Congo </option>
                                <option value="Cook Islands"> Cook Islands </option>
                                <option value="Costa Rica"> Costa Rica </option>
                                <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                                <option value="Croatia"> Croatia </option>
                                <option value="Cuba"> Cuba </option>
                                <option value="Curacao"> Curacao </option>
                                <option value="Cyprus"> Cyprus </option>
                                <option value="Czech Republic"> Czech Republic </option>
                                <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                                <option value="Denmark"> Denmark </option>
                                <option value="Djibouti"> Djibouti </option>
                                <option value="Dominica"> Dominica </option>
                                <option value="Dominican Republic"> Dominican Republic </option>
                                <option value="Ecuador"> Ecuador </option>
                                <option value="Egypt"> Egypt </option>
                                <option value="El Salvador"> El Salvador </option>
                                <option value="Equatorial Guinea"> Equatorial Guinea </option>
                                <option value="Eritrea"> Eritrea </option>
                                <option value="Estonia"> Estonia </option>
                                <option value="Ethiopia"> Ethiopia </option>
                                <option value="Falkland Islands"> Falkland Islands </option>
                                <option value="Faroe Islands"> Faroe Islands </option>
                                <option value="Fiji"> Fiji </option>
                                <option value="Finland"> Finland </option>
                                <option value="France"> France </option>
                                <option value="French Polynesia"> French Polynesia </option>
                                <option value="Gabon"> Gabon </option>
                                <option value="The Gambia"> The Gambia </option>
                                <option value="Georgia"> Georgia </option>
                                <option value="Germany"> Germany </option>
                                <option value="Ghana"> Ghana </option>
                                <option value="Gibraltar"> Gibraltar </option>
                                <option value="Greece"> Greece </option>
                                <option value="Greenland"> Greenland </option>
                                <option value="Grenada"> Grenada </option>
                                <option value="Guadeloupe"> Guadeloupe </option>
                                <option value="Guam"> Guam </option>
                                <option value="Guatemala"> Guatemala </option>
                                <option value="Guernsey"> Guernsey </option>
                                <option value="Guinea"> Guinea </option>
                                <option value="Guinea-Bissau"> Guinea-Bissau </option>
                                <option value="Guyana"> Guyana </option>
                                <option value="Haiti"> Haiti </option>
                                <option value="Honduras"> Honduras </option>
                                <option value="Hong Kong"> Hong Kong </option>
                                <option value="Hungary"> Hungary </option>
                                <option value="Iceland"> Iceland </option>
                                <option value="India"> India </option>
                                <option value="Indonesia"> Indonesia </option>
                                <option value="Iran"> Iran </option>
                                <option value="Iraq"> Iraq </option>
                                <option value="Ireland"> Ireland </option>
                                <option value="Israel"> Israel </option>
                                <option value="Italy"> Italy </option>
                                <option value="Jamaica"> Jamaica </option>
                                <option value="Japan"> Japan </option>
                                <option value="Jersey"> Jersey </option>
                                <option value="Jordan"> Jordan </option>
                                <option value="Kazakhstan"> Kazakhstan </option>
                                <option value="Kenya"> Kenya </option>
                                <option value="Kiribati"> Kiribati </option>
                                <option value="North Korea"> North Korea </option>
                                <option value="South Korea"> South Korea </option>
                                <option value="Kosovo"> Kosovo </option>
                                <option value="Kuwait"> Kuwait </option>
                                <option value="Kyrgyzstan"> Kyrgyzstan </option>
                                <option value="Laos"> Laos </option>
                                <option value="Latvia"> Latvia </option>
                                <option value="Lebanon"> Lebanon </option>
                                <option value="Lesotho"> Lesotho </option>
                                <option value="Liberia"> Liberia </option>
                                <option value="Libya"> Libya </option>
                                <option value="Liechtenstein"> Liechtenstein </option>
                                <option value="Lithuania"> Lithuania </option>
                                <option value="Luxembourg"> Luxembourg </option>
                                <option value="Macau"> Macau </option>
                                <option value="Macedonia"> Macedonia </option>
                                <option value="Madagascar"> Madagascar </option>
                                <option value="Malawi"> Malawi </option>
                                <option value="Malaysia"> Malaysia </option>
                                <option value="Maldives"> Maldives </option>
                                <option value="Mali"> Mali </option>
                                <option value="Malta"> Malta </option>
                                <option value="Marshall Islands"> Marshall Islands </option>
                                <option value="Martinique"> Martinique </option>
                                <option value="Mauritania"> Mauritania </option>
                                <option value="Mauritius"> Mauritius </option>
                                <option value="Mayotte"> Mayotte </option>
                                <option value="Mexico"> Mexico </option>
                                <option value="Micronesia"> Micronesia </option>
                                <option value="Moldova"> Moldova </option>
                                <option value="Monaco"> Monaco </option>
                                <option value="Mongolia"> Mongolia </option>
                                <option value="Montenegro"> Montenegro </option>
                                <option value="Montserrat"> Montserrat </option>
                                <option value="Morocco"> Morocco </option>
                                <option value="Mozambique"> Mozambique </option>
                                <option value="Myanmar"> Myanmar </option>
                                <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                                <option value="Namibia"> Namibia </option>
                                <option value="Nauru"> Nauru </option>
                                <option value="Nepal"> Nepal </option>
                                <option value="Netherlands"> Netherlands </option>
                                <option value="Netherlands Antilles"> Netherlands Antilles </option>
                                <option value="New Caledonia"> New Caledonia </option>
                                <option value="New Zealand"> New Zealand </option>
                                <option value="Nicaragua"> Nicaragua </option>
                                <option value="Niger"> Niger </option>
                                <option value="Nigeria"> Nigeria </option>
                                <option value="Niue"> Niue </option>
                                <option value="Norfolk Island"> Norfolk Island </option>
                                <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                                <option value="Northern Mariana"> Northern Mariana </option>
                                <option value="Norway"> Norway </option>
                                <option value="Oman"> Oman </option>
                                <option value="Pakistan"> Pakistan </option>
                                <option value="Palau"> Palau </option>
                                <option value="Palestine"> Palestine </option>
                                <option value="Panama"> Panama </option>
                                <option value="Papua New Guinea"> Papua New Guinea </option>
                                <option value="Paraguay"> Paraguay </option>
                                <option value="Peru"> Peru </option>
                                <option value="Philippines"> Philippines </option>
                                <option value="Pitcairn Islands"> Pitcairn Islands </option>
                                <option value="Poland"> Poland </option>
                                <option value="Portugal"> Portugal </option>
                                <option value="Puerto Rico"> Puerto Rico </option>
                                <option value="Qatar"> Qatar </option>
                                <option value="Republic of the Congo"> Republic of the Congo </option>
                                <option value="Romania"> Romania </option>
                                <option value="Russia"> Russia </option>
                                <option value="Rwanda"> Rwanda </option>
                                <option value="Saint Barthelemy"> Saint Barthelemy </option>
                                <option value="Saint Helena"> Saint Helena </option>
                                <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                                <option value="Saint Lucia"> Saint Lucia </option>
                                <option value="Saint Martin"> Saint Martin </option>
                                <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                                <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                                <option value="Samoa"> Samoa </option>
                                <option value="San Marino"> San Marino </option>
                                <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                                <option value="Saudi Arabia"> Saudi Arabia </option>
                                <option value="Senegal"> Senegal </option>
                                <option value="Serbia"> Serbia </option>
                                <option value="Seychelles"> Seychelles </option>
                                <option value="Sierra Leone"> Sierra Leone </option>
                                <option value="Singapore"> Singapore </option>
                                <option value="Slovakia"> Slovakia </option>
                                <option value="Slovenia"> Slovenia </option>
                                <option value="Solomon Islands"> Solomon Islands </option>
                                <option value="Somalia"> Somalia </option>
                                <option value="Somaliland"> Somaliland </option>
                                <option value="South Africa"> South Africa </option>
                                <option value="South Ossetia"> South Ossetia </option>
                                <option value="South Sudan"> South Sudan </option>
                                <option value="Spain"> Spain </option>
                                <option value="Sri Lanka"> Sri Lanka </option>
                                <option value="Sudan"> Sudan </option>
                                <option value="Suriname"> Suriname </option>
                                <option value="Svalbard"> Svalbard </option>
                                <option value="eSwatini"> eSwatini </option>
                                <option value="Sweden"> Sweden </option>
                                <option value="Switzerland"> Switzerland </option>
                                <option value="Syria"> Syria </option>
                                <option value="Taiwan"> Taiwan </option>
                                <option value="Tajikistan"> Tajikistan </option>
                                <option value="Tanzania"> Tanzania </option>
                                <option value="Thailand"> Thailand </option>
                                <option value="Timor-Leste"> Timor-Leste </option>
                                <option value="Togo"> Togo </option>
                                <option value="Tokelau"> Tokelau </option>
                                <option value="Tonga"> Tonga </option>
                                <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                                <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                                <option value="Tristan da Cunha"> Tristan da Cunha </option>
                                <option value="Tunisia"> Tunisia </option>
                                <option value="Turkey"> Turkey </option>
                                <option value="Turkmenistan"> Turkmenistan </option>
                                <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                                <option value="Tuvalu"> Tuvalu </option>
                                <option value="Uganda"> Uganda </option>
                                <option value="Ukraine"> Ukraine </option>
                                <option value="United Arab Emirates"> United Arab Emirates </option>
                                <option value="United Kingdom"> United Kingdom </option>
                                <option value="Uruguay"> Uruguay </option>
                                <option value="Uzbekistan"> Uzbekistan </option>
                                <option value="Vanuatu"> Vanuatu </option>
                                <option value="Vatican City"> Vatican City </option>
                                <option value="Venezuela"> Venezuela </option>
                                <option value="Vietnam"> Vietnam </option>
                                <option value="British Virgin Islands"> British Virgin Islands </option>
                                <option value="Isle of Man"> Isle of Man </option>
                                <option value="US Virgin Islands"> US Virgin Islands </option>
                                <option value="Wallis and Futuna"> Wallis and Futuna </option>
                                <option value="Western Sahara"> Western Sahara </option>
                                <option value="Yemen"> Yemen </option>
                                <option value="Zambia"> Zambia </option>
                                <option value="Zimbabwe"> Zimbabwe </option>
                            </datalist> <br>
                            <label>Country:</label> <br><br>
                            
                        </p>
                    </div>
               </div>

               <div class="rows">
                   <div class="below">
                        <p>
                            <input type="date" name="DOB" required><br>
                            <label>Date of Birth:</label><br>
                        </p>
                        <p>
                            <label>Citizenship: </label><br>
                            
                            <input type="radio" name="citizenship" value="PK"> Pakistani <br>
                            <input type="radio" name="citizenship" value="US"> US Citizen<br>
                            
                        </p>
                   </div>

                   <div class="shift below">
                    <p>
                        <input type="text" required name="occupation"> <br>
                        <label>Occupation: </label> <br><br>

                        <input type="text" name="employer" required> <br>
                        <label>Name of Employer:</label> <br><br>
                        
                        <input type="text" list="status" required name="status">
                        <datalist id="status">
                            <option>    </option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Seperated">Seperated</option>
                        </datalist><br>
                        <label>Marital Status:</label>
                    </p>
                   </div>
                   
                   <div class="shift below">
                       <p>
                        <input type="text" required name="money" placeholder="(min PKR 500)"> <br>
                        <label>Initial Diposit:</label>  
                       </p>

                   </div>
                </div>
            </fieldset>
            <fieldset>
                <legend class="bolder">Joint Account</legend>
                Would you like to Open a Joint Account?<br>
                Yes<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" value="yes" id="yesCheck"/>
                No<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" value="no" id="noCheck"/>
                <br>
                <div id="ifYes" style="visibility:hidden">If yes, please fill out the following information for the Joint Partner. <br>
                
                    <div class="rows">
                        <div>
                            <p>
                                <h3>Name:</h3>
                                <input type="text" placeholder="Mr. , Mrs. , Mss." name="jprefix"> <br>
                                <label>Prefix: </label> <br><br>
                                
                                <input type="text" name="jlastname" > <br>
                                <label>Last Name:</label> <br><br>
                                <input type="text" name="jfirstname" ><br>
                                <label>First Name:</label>
                            </p>
                        </div>
                        <div class="shift">
                            <p>
                                <h3>Basic Information:</h3>
                                <input type="text" name="jnumber" placeholder="Pattern: +92-334-3958850" pattern="[+][9][2][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]"> <br>
                                <label>Mobile Number </label> <br><br>
    
                                <input type="email"   name="jemail" placeholder="example@mail.com"> <br>
                                <label>Email:</label> <br><br>
                                <input type="text" placeholder="(Without Dashes)"  name=jcnic pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]"> <br>
                                <label>CNIC:</label>
                            </p>    
                        </div>
    
                        <div class="shift">
                            <p>
                                <h3>Adress:</h3>
                                <input type="text" name="jadress" > <br>
                                <label>Street Adress: </label> <br><br>
                                
                                <input type="text" name="jcity" > <br>
                                <label>City:</label> <br><br>
                                <input type="text" name="jstate" ><br>
                                <label>Province/state:</label>
                            </p>
                        </div>
    
                        <div class="shift">
                            <p>
                                <h3>Adress (Continued): </h3>
                                <input type="text" name="jzip" > <br>
                                <label>Postal / Zip code: </label> <br><br>
                                
                                <input type="text" name="jcountry" list="country"  >
                                <datalist id="country">
                                    <option value=""> Please Select </option>
                                    <option value="United States"> United States </option>
                                    <option value="Afghanistan"> Afghanistan </option>
                                    <option value="Albania"> Albania </option>
                                    <option value="Algeria"> Algeria </option>
                                    <option value="American Samoa"> American Samoa </option>
                                    <option value="Andorra"> Andorra </option>
                                    <option value="Angola"> Angola </option>
                                    <option value="Anguilla"> Anguilla </option>
                                    <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                                    <option value="Argentina"> Argentina </option>
                                    <option value="Armenia"> Armenia </option>
                                    <option value="Aruba"> Aruba </option>
                                    <option value="Australia"> Australia </option>
                                    <option value="Austria"> Austria </option>
                                    <option value="Azerbaijan"> Azerbaijan </option>
                                    <option value="The Bahamas"> The Bahamas </option>
                                    <option value="Bahrain"> Bahrain </option>
                                    <option value="Bangladesh"> Bangladesh </option>
                                    <option value="Barbados"> Barbados </option>
                                    <option value="Belarus"> Belarus </option>
                                    <option value="Belgium"> Belgium </option>
                                    <option value="Belize"> Belize </option>
                                    <option value="Benin"> Benin </option>
                                    <option value="Bermuda"> Bermuda </option>
                                    <option value="Bhutan"> Bhutan </option>
                                    <option value="Bolivia"> Bolivia </option>
                                    <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                                    <option value="Botswana"> Botswana </option>
                                    <option value="Brazil"> Brazil </option>
                                    <option value="Brunei"> Brunei </option>
                                    <option value="Bulgaria"> Bulgaria </option>
                                    <option value="Burkina Faso"> Burkina Faso </option>
                                    <option value="Burundi"> Burundi </option>
                                    <option value="Cambodia"> Cambodia </option>
                                    <option value="Cameroon"> Cameroon </option>
                                    <option value="Canada"> Canada </option>
                                    <option value="Cape Verde"> Cape Verde </option>
                                    <option value="Cayman Islands"> Cayman Islands </option>
                                    <option value="Central African Republic"> Central African Republic </option>
                                    <option value="Chad"> Chad </option>
                                    <option value="Chile"> Chile </option>
                                    <option value="China"> China </option>
                                    <option value="Christmas Island"> Christmas Island </option>
                                    <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                                    <option value="Colombia"> Colombia </option>
                                    <option value="Comoros"> Comoros </option>
                                    <option value="Congo"> Congo </option>
                                    <option value="Cook Islands"> Cook Islands </option>
                                    <option value="Costa Rica"> Costa Rica </option>
                                    <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                                    <option value="Croatia"> Croatia </option>
                                    <option value="Cuba"> Cuba </option>
                                    <option value="Curacao"> Curacao </option>
                                    <option value="Cyprus"> Cyprus </option>
                                    <option value="Czech Republic"> Czech Republic </option>
                                    <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                                    <option value="Denmark"> Denmark </option>
                                    <option value="Djibouti"> Djibouti </option>
                                    <option value="Dominica"> Dominica </option>
                                    <option value="Dominican Republic"> Dominican Republic </option>
                                    <option value="Ecuador"> Ecuador </option>
                                    <option value="Egypt"> Egypt </option>
                                    <option value="El Salvador"> El Salvador </option>
                                    <option value="Equatorial Guinea"> Equatorial Guinea </option>
                                    <option value="Eritrea"> Eritrea </option>
                                    <option value="Estonia"> Estonia </option>
                                    <option value="Ethiopia"> Ethiopia </option>
                                    <option value="Falkland Islands"> Falkland Islands </option>
                                    <option value="Faroe Islands"> Faroe Islands </option>
                                    <option value="Fiji"> Fiji </option>
                                    <option value="Finland"> Finland </option>
                                    <option value="France"> France </option>
                                    <option value="French Polynesia"> French Polynesia </option>
                                    <option value="Gabon"> Gabon </option>
                                    <option value="The Gambia"> The Gambia </option>
                                    <option value="Georgia"> Georgia </option>
                                    <option value="Germany"> Germany </option>
                                    <option value="Ghana"> Ghana </option>
                                    <option value="Gibraltar"> Gibraltar </option>
                                    <option value="Greece"> Greece </option>
                                    <option value="Greenland"> Greenland </option>
                                    <option value="Grenada"> Grenada </option>
                                    <option value="Guadeloupe"> Guadeloupe </option>
                                    <option value="Guam"> Guam </option>
                                    <option value="Guatemala"> Guatemala </option>
                                    <option value="Guernsey"> Guernsey </option>
                                    <option value="Guinea"> Guinea </option>
                                    <option value="Guinea-Bissau"> Guinea-Bissau </option>
                                    <option value="Guyana"> Guyana </option>
                                    <option value="Haiti"> Haiti </option>
                                    <option value="Honduras"> Honduras </option>
                                    <option value="Hong Kong"> Hong Kong </option>
                                    <option value="Hungary"> Hungary </option>
                                    <option value="Iceland"> Iceland </option>
                                    <option value="India"> India </option>
                                    <option value="Indonesia"> Indonesia </option>
                                    <option value="Iran"> Iran </option>
                                    <option value="Iraq"> Iraq </option>
                                    <option value="Ireland"> Ireland </option>
                                    <option value="Israel"> Israel </option>
                                    <option value="Italy"> Italy </option>
                                    <option value="Jamaica"> Jamaica </option>
                                    <option value="Japan"> Japan </option>
                                    <option value="Jersey"> Jersey </option>
                                    <option value="Jordan"> Jordan </option>
                                    <option value="Kazakhstan"> Kazakhstan </option>
                                    <option value="Kenya"> Kenya </option>
                                    <option value="Kiribati"> Kiribati </option>
                                    <option value="North Korea"> North Korea </option>
                                    <option value="South Korea"> South Korea </option>
                                    <option value="Kosovo"> Kosovo </option>
                                    <option value="Kuwait"> Kuwait </option>
                                    <option value="Kyrgyzstan"> Kyrgyzstan </option>
                                    <option value="Laos"> Laos </option>
                                    <option value="Latvia"> Latvia </option>
                                    <option value="Lebanon"> Lebanon </option>
                                    <option value="Lesotho"> Lesotho </option>
                                    <option value="Liberia"> Liberia </option>
                                    <option value="Libya"> Libya </option>
                                    <option value="Liechtenstein"> Liechtenstein </option>
                                    <option value="Lithuania"> Lithuania </option>
                                    <option value="Luxembourg"> Luxembourg </option>
                                    <option value="Macau"> Macau </option>
                                    <option value="Macedonia"> Macedonia </option>
                                    <option value="Madagascar"> Madagascar </option>
                                    <option value="Malawi"> Malawi </option>
                                    <option value="Malaysia"> Malaysia </option>
                                    <option value="Maldives"> Maldives </option>
                                    <option value="Mali"> Mali </option>
                                    <option value="Malta"> Malta </option>
                                    <option value="Marshall Islands"> Marshall Islands </option>
                                    <option value="Martinique"> Martinique </option>
                                    <option value="Mauritania"> Mauritania </option>
                                    <option value="Mauritius"> Mauritius </option>
                                    <option value="Mayotte"> Mayotte </option>
                                    <option value="Mexico"> Mexico </option>
                                    <option value="Micronesia"> Micronesia </option>
                                    <option value="Moldova"> Moldova </option>
                                    <option value="Monaco"> Monaco </option>
                                    <option value="Mongolia"> Mongolia </option>
                                    <option value="Montenegro"> Montenegro </option>
                                    <option value="Montserrat"> Montserrat </option>
                                    <option value="Morocco"> Morocco </option>
                                    <option value="Mozambique"> Mozambique </option>
                                    <option value="Myanmar"> Myanmar </option>
                                    <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                                    <option value="Namibia"> Namibia </option>
                                    <option value="Nauru"> Nauru </option>
                                    <option value="Nepal"> Nepal </option>
                                    <option value="Netherlands"> Netherlands </option>
                                    <option value="Netherlands Antilles"> Netherlands Antilles </option>
                                    <option value="New Caledonia"> New Caledonia </option>
                                    <option value="New Zealand"> New Zealand </option>
                                    <option value="Nicaragua"> Nicaragua </option>
                                    <option value="Niger"> Niger </option>
                                    <option value="Nigeria"> Nigeria </option>
                                    <option value="Niue"> Niue </option>
                                    <option value="Norfolk Island"> Norfolk Island </option>
                                    <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                                    <option value="Northern Mariana"> Northern Mariana </option>
                                    <option value="Norway"> Norway </option>
                                    <option value="Oman"> Oman </option>
                                    <option value="Pakistan"> Pakistan </option>
                                    <option value="Palau"> Palau </option>
                                    <option value="Palestine"> Palestine </option>
                                    <option value="Panama"> Panama </option>
                                    <option value="Papua New Guinea"> Papua New Guinea </option>
                                    <option value="Paraguay"> Paraguay </option>
                                    <option value="Peru"> Peru </option>
                                    <option value="Philippines"> Philippines </option>
                                    <option value="Pitcairn Islands"> Pitcairn Islands </option>
                                    <option value="Poland"> Poland </option>
                                    <option value="Portugal"> Portugal </option>
                                    <option value="Puerto Rico"> Puerto Rico </option>
                                    <option value="Qatar"> Qatar </option>
                                    <option value="Republic of the Congo"> Republic of the Congo </option>
                                    <option value="Romania"> Romania </option>
                                    <option value="Russia"> Russia </option>
                                    <option value="Rwanda"> Rwanda </option>
                                    <option value="Saint Barthelemy"> Saint Barthelemy </option>
                                    <option value="Saint Helena"> Saint Helena </option>
                                    <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                                    <option value="Saint Lucia"> Saint Lucia </option>
                                    <option value="Saint Martin"> Saint Martin </option>
                                    <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                                    <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                                    <option value="Samoa"> Samoa </option>
                                    <option value="San Marino"> San Marino </option>
                                    <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                                    <option value="Saudi Arabia"> Saudi Arabia </option>
                                    <option value="Senegal"> Senegal </option>
                                    <option value="Serbia"> Serbia </option>
                                    <option value="Seychelles"> Seychelles </option>
                                    <option value="Sierra Leone"> Sierra Leone </option>
                                    <option value="Singapore"> Singapore </option>
                                    <option value="Slovakia"> Slovakia </option>
                                    <option value="Slovenia"> Slovenia </option>
                                    <option value="Solomon Islands"> Solomon Islands </option>
                                    <option value="Somalia"> Somalia </option>
                                    <option value="Somaliland"> Somaliland </option>
                                    <option value="South Africa"> South Africa </option>
                                    <option value="South Ossetia"> South Ossetia </option>
                                    <option value="South Sudan"> South Sudan </option>
                                    <option value="Spain"> Spain </option>
                                    <option value="Sri Lanka"> Sri Lanka </option>
                                    <option value="Sudan"> Sudan </option>
                                    <option value="Suriname"> Suriname </option>
                                    <option value="Svalbard"> Svalbard </option>
                                    <option value="eSwatini"> eSwatini </option>
                                    <option value="Sweden"> Sweden </option>
                                    <option value="Switzerland"> Switzerland </option>
                                    <option value="Syria"> Syria </option>
                                    <option value="Taiwan"> Taiwan </option>
                                    <option value="Tajikistan"> Tajikistan </option>
                                    <option value="Tanzania"> Tanzania </option>
                                    <option value="Thailand"> Thailand </option>
                                    <option value="Timor-Leste"> Timor-Leste </option>
                                    <option value="Togo"> Togo </option>
                                    <option value="Tokelau"> Tokelau </option>
                                    <option value="Tonga"> Tonga </option>
                                    <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                                    <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                                    <option value="Tristan da Cunha"> Tristan da Cunha </option>
                                    <option value="Tunisia"> Tunisia </option>
                                    <option value="Turkey"> Turkey </option>
                                    <option value="Turkmenistan"> Turkmenistan </option>
                                    <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                                    <option value="Tuvalu"> Tuvalu </option>
                                    <option value="Uganda"> Uganda </option>
                                    <option value="Ukraine"> Ukraine </option>
                                    <option value="United Arab Emirates"> United Arab Emirates </option>
                                    <option value="United Kingdom"> United Kingdom </option>
                                    <option value="Uruguay"> Uruguay </option>
                                    <option value="Uzbekistan"> Uzbekistan </option>
                                    <option value="Vanuatu"> Vanuatu </option>
                                    <option value="Vatican City"> Vatican City </option>
                                    <option value="Venezuela"> Venezuela </option>
                                    <option value="Vietnam"> Vietnam </option>
                                    <option value="British Virgin Islands"> British Virgin Islands </option>
                                    <option value="Isle of Man"> Isle of Man </option>
                                    <option value="US Virgin Islands"> US Virgin Islands </option>
                                    <option value="Wallis and Futuna"> Wallis and Futuna </option>
                                    <option value="Western Sahara"> Western Sahara </option>
                                    <option value="Yemen"> Yemen </option>
                                    <option value="Zambia"> Zambia </option>
                                    <option value="Zimbabwe"> Zimbabwe </option>
                                </datalist> <br>
                                <label>Country:</label> <br><br>
                                
                            </p>
                        </div>
                   </div>
    
                   <div class="rows">
                       <div class="below">
                            <p>
                                <input type="date" name="jDOB"><br>
                                <label>Date of Birth:</label><br>
                            </p>
                            <p>
                                <label>Citizenship: </label><br>
                                
                                <input type="radio" name="jcitizenship" value="PK"> Pakistani <br>
                                <input type="radio" name="jcitizenship" value="US"> US Citizen<br>
                                
                            </p>
                       </div>
    
                       <div class="shift below">
                        <p>
                            <input type="text" name="joccupation" > <br>
                            <label>Occupation: </label> <br><br>
    
                            <input type="text" name="jemployer" > <br>
                            <label>Name of Employer:</label> <br><br>
                            
                            <input type="text" list="status"  name="jstatus">
                            <datalist id="status">
                                <option>    </option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Seperated">Seperated</option>
                            </datalist><br>
                            <label>Marital Status:</label>
                        </p>    
                    </div>

                </div>
            </fieldset>
            <fieldset>
                <legend class="bolder">Signatures</legend>
                <div class="rows">
                    <div>
                        <input type="file" name="sign" required><br>
                        <label>Owner's Signature</label>
                    </div>
                    
                    <div>
                        <input type="file" name="jsign"><br>
                        <label>Joint Owner's Signature (if there is one):</label>
                    </div>
                </div>
            </fieldset>
            <div class="below">
                <input type="submit">
            </div>
        </fieldset>
    </form>
</body