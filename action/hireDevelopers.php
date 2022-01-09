<?php
global $idCheck ;
$idCheck = true;
require '../functions/db.php';
if(isset($_POST['ids'])){
    $hireFrom = $_POST['hireFrom'];
    $hireTo = $_POST['hireTo'];
    $ids = $_POST['ids'];
    foreach($ids as $id){
        $sql = "SELECT * FROM hired WHERE id =".$id;
        $result =  mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($result)){
            if(
                $hireFrom > $row['hiredFrom'] && $hireFrom < $row['hiredTo'] || 
                $hireTo > $row['hiredFrom']  && $hireTo < $row['hiredTo'] || 
                $hireFrom < $row['hiredFrom']  && $hireTo > $row['hiredTo'] ||
                $hireTo < $hireFrom
                ){
                $idCheck = false;
            }
        }
    }
    if($idCheck){
        foreach($ids as $id){
            $prepare = $con->prepare("INSERT INTO hired (id, hiredFrom, hiredTo) VALUES ( ?, ?, ?)");
            $prepare->bind_param("iss",  $id, $hireFrom, $hireTo);
            $prepare->execute();
        } 
        ?>
        <div class='hired-success'>
            <p>You successfully hired selected developers !</p>
        </div>
        <?php
    }
    else{
        ?>
        <div class='hired-error'>
            <p>Developer is hired in that period, please select other developer</p>
        </div>
        <?php
    }
}
else{?>
    <div class="hired-error">
        <p>Please select developer !</p>
    </div>
<?php    
}