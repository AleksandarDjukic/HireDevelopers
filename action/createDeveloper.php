<?php 
require_once('../functions/db.php');
if (isset($_POST['createSubmit']) )
{
   if(isset($_POST['name']) && !empty($_POST['phone']) && isset($_POST['email']) && isset($_POST['price_per_hour']) && isset($_POST['location'])
    && isset($_POST['technology']) && isset($_POST['years_of_experience']) && isset($_POST['native_language']))
   {
    $name =                 $_POST['name'];
    $phone =                $_POST['phone'];
    $email =                $_POST['email'];
    $price_per_hour =       $_POST['price_per_hour'];
    $location =             $_POST['location'];
    $technology =           $_POST['technology'];
    $years_of_experience =  $_POST['years_of_experience'];
    $native_language =      $_POST['native_language'];
    $description =          $_POST['description'];
    $profile_picture =      $_POST['profile_picture'];
    $linkedin_url =         $_POST['linkedin'];
   }
}
   $prepare = $con->prepare("INSERT INTO developers 
   (name, phone, email, location, profile_img, price, technology, description, years_of_experience, native_language, linkedin) 
   VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
   $prepare->bind_param("sssssssssss",  $name, $phone, $email, $location, $profile_picture, $price_per_hour, $technology, $description, $years_of_experience, $native_language, $linkedin_url);
   $prepare->execute();
   if(!$prepare->error)
   {	
       header("Refresh:0; url=../createDeveloper.php?success=true");
   }
   else
   {
        header("Refresh:0; url=../createDeveloper.php?success=false");
   }
?>