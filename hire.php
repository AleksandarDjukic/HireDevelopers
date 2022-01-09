<?php 
    include "./inc/header.php";
    $result = selectAllDevelopers();
?>
<h1 class="big-heading">Select developers for hire</h1>
<div class="container">
    <table>
        <th></th>
        <th>info</th>
        <th>Description</th>
        <th>Select</th>
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
                        <p>Years of experience: <?= e($row['years_of_experience']); ?></p>
                        <p>Native language: <?= e($row['native_language']); ?></p>
                    </div>
                </td>
                <td>
                    <div class="description">
                        <p><?=e($row['description']); ?></p>
                    </div>
                </td>
                <td>
                    <div class="linkedin">
                        <input type="checkbox" value="<?=e($row['id']);?>" id="<?=e($row['id']);?>" > 
                    </div>
                </td>
            </tr>
    <?php }?>
    </table>
        </div>
    <div class="btn-container">
        <button id="selectBtn" class="selectBtn">Select</button>
    </div>
    
    
    <div id="result" class="result"></div>
    <div id="response"></div>
    <div class="btn-container">
        <button id="hireDev" class="hire-developer-btn">Hire</button>
    </div>
    
</div>

<script src="./js/selectDevelopers.js"></script>
<script src="./js/hireDevelopers.js"></script>
<script src="./js/effects.js"></script>
<?php include "./inc/footer.php";?>
