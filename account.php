<?php   
$ruser = 'aksNqFtfwR';
$rpass = 's3BRhNUQXv';
$rdb = 'aksNqFtfwR';

if(! $rdatabase = new mysqli('remotemysqli.com',$ruser, $rpass,$rdb))
{
    echo("no stable database connection");
}


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