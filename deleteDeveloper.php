<?php 
    include "./inc/header.php";
?>
<h1 class="big-heading">Delete Developer</h1>
<div class="container">
    <div class="delete-conteiner">

    </div>
    <form action="action/deleteDeveloper.php" method="post" class="deleteDev">
        <select   name="id">
            <option value="" selected disabled hidden>Choose here</option>
            <?php 
                $update = mysqli_query($con,"SELECT * FROM developers");
                while($row = mysqli_fetch_array($update))
                {
                echo "<option value='". e($row['id'])."'>".e($row['id']).' '.e($row['name'])."</option>";
                }
            ?>
        </select>
        <input type="submit" name="deleteSubmit">
    </form>
</div>
<?php include "./inc/footer.php";
if(isset($_GET['success'])){
    $get = $_GET['success'];
    getResponse($get);
}
?>