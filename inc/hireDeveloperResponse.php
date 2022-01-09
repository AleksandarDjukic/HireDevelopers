<?php
require '../functions/functions.php';
if (isset($_POST['ids'])) {
    $ids = $_POST['ids'];
    if(count($ids)<2){
        echo "<p class='dev-selected-text'>You selected 1 developer</p>";
    }
    else{
        echo "<p class='dev-selected-text'>You selected team of developers</p>";
    }
}
?>
<h4 class="period-heading">Please select period</h4>
<form action="../action/hireDevelopers.php" method="POST">
    <div class="form-group">
        <label for="hireFrom">Start day</label>
        <input type="date" id="hireFrom" name="hireFrom">
    </div>
    <div class="form-group">
        <label for="hireTo">Finish day</label>
        <input type="date" id="hireTo" name="hireTo">
    </div>
</form>
