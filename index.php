<?php 
require "vendor/autoload.php";
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\DNSCheckValidation;

if(isset($_POST['submit_btn']))
{
   $email = $_POST['email'];

   $validator = new EmailValidator();
   $result = $validator->isValid($email, new DNSCheckValidation()); 
   if($result==false)
   {
    echo "Invalid Email Address";
   }
   else 
   {
    echo "Valid Email Address";
   }
}
?>
<form action="index.php" method="post">
  <input type="text" name="email" >
  <input type="submit" name="submit_btn" id="">
</form>

