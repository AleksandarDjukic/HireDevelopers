<?php 
    include "./inc/header.php";
?>
<h1 class="big-heading">Add new developer</h1>
<div class="container">
    <form action="action/createDeveloper.php" method="post" class="createDev">
        <label>Name</label>
        <input type="text" name="name" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Phone</label>
        <input type="text" name="phone" required>
        <label>Price per hour</label>
        <input type="text" name="price_per_hour" required>
        <label>Location</label>
        <input type="text" name="location" required>
        <label>Profile picture (url)</label>
        <input type="text" name="profile_picture">
        <label>Technology</label>
        <select name="technology" class="select">
            <option value="PHP">PHP</option>
            <option value="Python">Python</option>
            <option value="Flutter">Flutter</option>
            <option value=".NET">.NET</option>
            <option value="Java">Java</option>
            <option value="Javascript">Javascript</option>
        </select>
        <label>Description</label>
        <textarea name="description"></textarea>
        <label>Years of expirience</label>
        <input type="number" name="years_of_experience" required>
        <label>Native Language</label>
        <select name="native_language" class="select">
            <option value="Serbian">Serbian</option>
            <option value="Bulgarian">Bulgarian</option>
            <option value="English">English</option>
        </select>
        <label>Linkedin</label>
        <input type="text" name="linkedin" required>
        <input type="submit" name="createSubmit">
    </form>
</div>
<?php include "./inc/footer.php";
if(isset($_GET['success'])){
    $get = $_GET['success'];
    getResponse($get);
}
?>