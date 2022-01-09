<?php 
if(!require_once('../functions/db.php'))
{
    die("File not Found 😢");
}
if (isset($_POST['editSubmit']) )
{
    if(isset($_POST['name']) && !empty($_POST['phone']) && isset($_POST['email']) && isset($_POST['price_per_hour']) && isset($_POST['location'])
    && isset($_POST['technology']) && isset($_POST['years_of_experience']) && isset($_POST['native_language']))
   {
    $id =                   $_POST['id'];
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
    $prepare = $con->prepare("UPDATE developers SET name = ?, phone = ?, email = ?, location = ?, profile_img = ?, price = ?, technology = ?, description = ?, years_of_experience = ?, native_language = ?, linkedin = ? WHERE id = ?");
    $prepare->bind_param("sssssssssssi",  $name, $phone, $email, $location, $profile_picture, $price_per_hour, $technology, $description, $years_of_experience, $native_language, $linkedin_url, $id);
    $prepare->execute();
    if(!$prepare->error)
    {	
        header("Refresh:0; url=../editDeveloper.php?success=true");
    }
    else
    {
        header("Refresh:0; url=../editDeveloper.php?success=false");
    }
} 
?>