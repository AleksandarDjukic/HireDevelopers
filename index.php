<?php include "./inc/header.php";
$result = selectAllDevelopers()
?>
<h1 class="big-heading">List od developers</h1>
<table>
    <th></th>
    <th>info</th>
    <th>Description</th>
    <th>Linkedin</th>
    <?php 
    while($row = mysqli_fetch_array($result)){?>
        <tr>
            <td>
                <div class="contact-info">
                    <img src = "<?= e($row['profile_img']); ?>" alt="profile picture" />
                    <div class="contact-info-text">
                        <p>Name: <?= e($row['name']); ?></p>
                        <p>Email: <?= e($row['email']); ?></p>
                        <p>Phone: <?= e($row['phone']); ?></p>
                        <p>Price: <?= e($row['price']); ?>$/hour</p>
                    </div>
                </div>
            </td>
            <td>
                <div class="info-text">
                    <p>Location: <?= e($row['location']); ?></p>
                    <p>Technology: <?= e($row['technology']); ?></p>
                    <p>Years of experience: <?= e($row['years_of_experience']);?></p>
                    <p>Native language: <?= e($row['native_language']); ?></p>
                </div>
            </td>
            <td>
                <div class="description">
                    <p><?= e($row['description']); ?></p>
                </div>
            </td>
            <td>
                <div class="linkedin">
                    <a href="<?= e($row['linkedin']); ?>"><img src="./uploads/linkedin-logo.png"/></a>
                </div>
            </td>
        </tr>
<?php }?>
</table>
<?php include "./inc/footer.php";?>
