<?php
function fIsValidLength($input, $minLength, $maxLength) {
   $input = trim($input);
   $IsValid = (strlen($input) >= $minLength && strlen($input) <= $maxLength);
   return $IsValid;
}

function fIsValidEmail($email) {
   $email = trim($email);
   if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
      return false;
   else
      return true;
}

function fIsValidState($state) {
   $ValidAbbr = array("AL", "AK", "AZ", "AR", "CA", "CO", "CT", "DE", "FL",
       "GA", "HI", "ID", "IL", "IN", "IA", "KS", "KY", "LA", "ME", "MD", "MA", "MI", "MN", "MS", "MO", "MT", "NE", "NV", "NH", "NJ", "NM", "NY", "NC", "ND", "OH", "OK", "OR", "PA", "RI", "SC", "SD", "TN", "TX", "UT", "VT", "VA", "WA", "WV", "WI", "WY");

   $state = trim(strtoupper($state));

   return in_array($state, $ValidAbbr);
}

function fIsValidZip($zip) {
   $zip = preg_replace($zip);
   return ((strlen($zip) == (5)) && is_numeric($zip));
}

function fIsValidAge($age) {
   $age = preg_replace($age);
   return ((strlen($age) == (1, 3)) && is_numeric($age));
}


function fIsValidBday($bday) {
   $bday = str_replace('-', '/', $bday);
   $test_arr = explode('/', $bday);
      if (count($test_arr) == 3 &&
           is_numeric($test_arr[0]) &&
           is_numeric($test_arr[1]) &&
           is_numeric($test_arr[2])) {
      
      if (checkdate($test_arr[1], $test_arr[2], $test_arr[0])) {
         return true;
      } 
      else {
         return false; 
      }
   } 
   else {
      return false; 
}
?>

