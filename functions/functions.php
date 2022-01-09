<?php
function selectAllDevelopers(){
    global $con;
    return mysqli_query($con, "SELECT * FROM developers");
}
function makeQuery($ids){
    $newIds = '';
    foreach($ids as $id) {
        $newIds .= $id.",";
        $finalIds = substr($newIds, 0, -1);
    }
    $sql = "SELECT * FROM `developers` WHERE id != '' AND id in (".$finalIds.")";
    return $sql;
}
function e($string){
    global $con;
    return htmlspecialchars($string);
}
function getResponse($get){
    if($get == 'true'){
        echo "<script>alert('Operation successfully completed !')</script>";
    }
    elseif ($get == 'false') {
        echo "<script>alert('Operation failed !')</script>";
    }
}