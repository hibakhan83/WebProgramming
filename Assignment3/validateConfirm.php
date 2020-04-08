<!DOCTYPE html>
<html>
   <head>
      <title>Validation Confirm</title>
      <link href="hw3style.css" rel="stylesheet" type="text/css">

   </head>
   <body>
      
         <?php
         include 'validateUtilities.php';

         $email = $_GET['email'];
         $fname = $_GET['fname'];
         $age = $_GET['age'];
         $bday = $_GET['bday'];
         $state = $_GET['state'];
         $zip = $_GET['zip'];
         $IsValid = true;

      
         if (!fIsValidEmail($email)) {
            echo "Invalid email<br>";
            $IsValid = false;
         }
        
         if (!fIsValidLength($fname, 2, 20)) {
            echo "Enter first name (2-20 characters)<br>";
            $IsValid = false;
         }

         if (!fIsValidBday($bday)) {
            echo "Enter birthday<br>";
            $IsValid = false;
         }

         if (!fIsValidAge($age, 1, 3)) {
            echo "Enter age<br>";
            $IsValid = false;
         }

         if (!fIsValidState($state)) {
            echo "Enter 2-character state abbreviation<br>";
            $IsValid = false;
         }

         if (!fIsValidZip($zip, 5)) {
            echo "Enter a 5-digit zip code<br>";
            $IsValid = false;
         }

         echo "</p>";
         if (!$IsValid) {
            exit();
         }
            echo "<h3>All inputs have valid formats!</h3>
            Email: $email <br>
            First name: $fname <br>
            Age: $age <br>
            State: $state <br>
            Zip: $zip <br>
            ";
         ?>
      </div>
   </body>
</html>