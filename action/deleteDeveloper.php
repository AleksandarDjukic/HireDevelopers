<?php 
require_once('../functions/db.php');
if (isset($_POST['deleteSubmit']) )
{
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        $prepare = $con->prepare("DELETE FROM developers WHERE id = ?");
        $prepare->bind_param("i", $id);
        $prepare->execute();
        if(!$prepare->error)
        {	
            header("Refresh:0; url=../deleteDeveloper.php?success=true");
        }
        else
        {
            header("Refresh:0; url=../deleteDeveloper.php?success=false");
        }
    }
} 
?>