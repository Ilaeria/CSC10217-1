<?php
/* functions to validate user information. */

include_once 'validEmail.php';
include_once 'connectdb.php';

function validateUserForm ($formdata) { // for join.php

   if(!validateName($formdata)) {
      print "<div class = \"infomessage\">
            Error in \"Last Name\" or \"Other Names\".<br>
            Go <a href=\"javascript:history.back()\">back</a> to fix this problem.</div>";

   }
   else if(!validateContactMethod($formdata)) {
      print "<div class = \"infomessage\">Error in \"Preferred Communication Method\": you have not provided the details of the method you have chosen. <br> 
            Go <a href=\"javascript:history.back()\">back</a> to fix this problem.</div>";
   }
   else if(!validateMobile($formdata)) {
      print "<div class = \"infomessage\">Error in \"Contact Details - Mobile\": you have not provided the correct format for your number.<br> 
            Go <a href=\"javascript:history.back()\">back</a> to fix this problem.</div>";
   }         
   else if(!validatePhone($formdata)) {
      print "<div class = \"infomessage\">Error in \"Contact Details - Phone\": you have not provided the correct format for your number.<br> 
            Go <a href=\"javascript:history.back()\">back</a> to fix this problem.</div>";
   }
   else if(!validateEmail($formdata)) {
      print "<div class = \"infomessage\">Error in \"Contact Details - Email\": you have not provided a valid email address.<br> 
            Go <a href=\"javascript:history.back()\">back</a> to fix this problem.</div>";
   }
   else if(!validateOccup($formdata)) {
      print "<div class = \"infomessage\">Error in \"Occupation\": you have not selected an occupation.<br> 
            Go <a href=\"javascript:history.back()\">back</a> to fix this problem.</div>";
   }
   else if(!checkMagazine($formdata)) {
      print "<div class = \"infomessage\">Error in \"Address\": you have chosen to have our magazine delivered but have not provided all of your address information.<br>
             Go <a href=\"javascript:history.back()\">back</a> to fix this problem.</div>";
   }
   else if(!checkAddress ($formdata)) {
      print "<div class = \"infomessage\">Error in \"Address\": the information provided in the address is not in the format requested.<br>
            Go <a href=\"javascript:history.back()\">back</a> to fix this problem.</div>";
   }   
   else if(!validateUsername($formdata)) {
      print "<div class = \"infomessage\">Error in \"Username and Password\": your Username must be between 6 and 10 characters.<br>
             Go <a href=\"javascript:history.back()\">back</a> to fix this problem.</div>";
   }
   else if(usernameAlreadyExists($formdata)) {
      print "<div class = \"infomessage\">Error in \"Username and Password\": the Username you have entered is already in use.<br>
             Go <a href=\"javascript:history.back()\">back</a> to fix this problem.</div>";
   }
   else if(!validateUserPass($formdata)) {
      print "<div class = \"infomessage\">Error in \"Username and Password\": the Password you have entered is in the wrong format.<br>
             Go <a href=\"javascript:history.back()\">back</a> to fix this problem.</div>";
   }
   else if(!validatePasswdMatch($formdata)) {
      print "<div class = \"infomessage\">Error in \"Username and Password\": the Passwords you have entered do not match.<br>
             Go <a href=\"javascript:history.back()\">back</a> to fix this problem.</div>";
   }  
   else
      return true;
}

// check name fields and num chars
function validateName($formdata) {
    // Why is this here? Because Safari and Android do not support HTML5 required
    $nameValid = true;

    //Check it isn't blank or too big 
    if($formdata['lastname'] == "" && strlen($formdata['lastname']) < 50){
        $nameValid = false;
    }
    //Check it isn't blank or too big
    if($formdata['othernames'] == "" && strlen($formdata['othernames']) < 60){
        $nameValid = false;
    }
    return $nameValid;
} 
    //Make sure the selected contact method isn't blank
function validateContactMethod($formdata){
    $contactValid = true;
    if ($formdata['communicationmethod'] == 'mobile' && $formdata['mobile'] == ""){
        $contactValid = false;
    }else if ($formdata['communicationmethod'] == 'phone' && $formdata['phone'] == ""){
        $contactValid = false;
    }else if ($formdata['communicationmethod'] == 'email' && $formdata['email'] == ""){
        $contactValid = false;
    }
    else 
       return true;
}
// check format of mobile
function validateMobile($formdata) {
   //  If contact methods aren't empty make sure they are in valid format
   if($formdata['mobile'] != "")
      if(!preg_match('/^[0]{1}[4-5]{1}[0-9]{2}\s[0-9]{3}\s[0-9]{3}$/', $formdata['mobile']))
         return false;
   return true;
}

// check format of phone
function validatePhone($formdata) {
   //  If contact methods aren't empty make sure they are in valid format
   if($formdata['phone'] != "")
      if(!preg_match('/^[(]{1}[0]{1}[2-36-9]{1}[)]{1}\s[0-9]{8}$/', $formdata['phone']))
         return false;
   return true;
}

// check 50 characters and if is valid email domain (via validEmail.php) 
function validateEmail ($formdata) {
   if($formdata['email'] != "")
      if(!validEmail($formdata['email'])) 
         return false;
   if(strlen($formdata['email']) > 50) 
      return false;
   return true;
}

// check occupation chosen
function validateOccup($formdata) {
   if($formdata['occupation'] == "blank")
      return false;
   return true;
}

// is a username there?\ and between 6 & 10 chars
function validateUsername($formdata){
   if($formdata['username'] == "")
      return false;
   if(strlen($formdata['username']) < 6 || strlen($formdata['username']) > 10)
      return false;      
   return true;
}

 //Check to see if username is already taken
function usernameAlreadyExists($formdata){
   $alreadyExists = false;
   
   $db = getDBConnection();
   $members = $db->query("SELECT username FROM member");

   //Check each one
    foreach ($members as $member){
      //If the username is already in the DB stop looking
      if($formdata['username'] == $member['username']){
         $alreadyExists = true;
         break; //
        }
    }
   //DB connection closed when PDO object isn't referenced
   //ie setting $db to null closes the connection
   $db = null;

    return $alreadyExists;
}

//validate the password entered....
function validateUserPass($formdata){
   //print $formdata['userpass']."<br>"; // - debug
   //Check that the password isn't blank or too long
   if($formdata['password1'] == "")
      return false;
   else if(! preg_match('/^\S{4,10}$/', $formdata['password1']))
      return false;  //first white space and 4 to 10 chars
   else if(! preg_match('/\d/', $formdata['password1']))
      return false;  // next is there a digit
   else if(! preg_match('/[A-Z]/', $formdata['password1']))
      return false;  // next is there an upper case
   else if(! preg_match('/[a-z]/', $formdata['password1']))
      return false;  // next is there a lower case  
   else if(! (preg_match('/\W/', $formdata['password1']) || preg_match('/_/', $formdata['password1']))) {
      // \W is a non-word char i.e. NOT a-z, A-Z, 0-9, including the _ (underscore) 
      // hence the OR to get the _ (underscore) char 
      return false;  
   }
   else
      return true;      
}

//match passwords
function validatePasswdMatch($formdata){

   if($formdata['password1'] != $formdata['password2']){
      return false;
   }
   return true;
}

// if magazine checked need address
function checkMagazine($formdata) {
   if(isset($formdata['magazinesubscription']))
      if($formdata['street'] == "" || $formdata['state'] == ""
       || $formdata['postcode'] == "")  
         return false;
   return true;         
}

//basic check of format of address 
function checkAddress ($formdata) { 
 
  //if some of address there need it all
  if($formdata['street'] != "" || $formdata['state'] != "" || $formdata['postcode'] != "") {
   
   if(!preg_match('/[A-Za-z1-9\/#, -]{8,50}/', $formdata['street']))
      return false; // allows upper/lower numbers / - # , and spaces (also between 8 and 50 chars)
   
   if(!preg_match('/^[A-Za-z ]*, [A-Za-z]*$/',$formdata['state']))
      return false; //upper/lower for suburb, upper/lower for state
   
   if(strlen($formdata['state']) > 50)
      return false;
   
   if(!preg_match('/^\d\d\d\d$/',$formdata['postcode']))
      return false; // 4 digits only
  }
  return true;
}