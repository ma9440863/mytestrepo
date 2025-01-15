<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator with over time</title>
</head>
<body>

<!-- PHP start here -->
    <?php 
    $salary = "";
    $overtime = "";
    $rate = "";
    $hours = "";
    if (isset($_POST["submit"])){
        $hours = $_POST["hours"];
        $rate = $_POST["rate"];
        if($hours <= "40"){
            $salary = $hours*$rate;
        }
        else{
            $salary = $hours*$rate + ($hours-40)*1.5*$rate;
        }
    
    
    }
    ?>

<!-- PHP End here -->

<!-- HTML Salary calculator with over time -->
 <form action="" method="POST">
    <label for="hours">Please enter your Worked hours</label><br>
    <input type="text" name="hours" id="hours" required><br>
    <label for="rate">Please enter your Hour Rate</label><br>
    <input type="text" name="rate" id="rate" required><br>
    <input type="submit" name="submit"><br>
 </form>

<!-- HTML Salary calculator with over time End here -->
<!-- PHP start here -->
<?php 
if (isset($_POST["submit"])){
    echo"<h2>Your salary is $$salary</h2>";
}

?>
<!-- PHP End here -->

</body>
</html>