<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $pagetitle = "PHP_calculator";
    include "templates/head.php";
    ?>
</head>
<header>
    <!-- Header Starts here -->
<?php
    include "templates/header.php";
    ?>
</header>
    <!-- Header End here -->
<body>
    <!-- PHP Start here -->
    <?php 
    if (isset($_POST["submit"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $drop = $_POST["drop"];

        if ($drop == "add") {
            $num3= $num1+$num2;
        }

        else if ($drop == "sub") {
            $num3= $num1-$num2;
        }
        else if ($drop == "mul") {
            $num3= $num1*$num2;
        }
        else if ($drop == "div"){
            $num3= $num1/$num2;
        }  
        else{
            $num3= "Please Select operators";
        }
    } 
    ?>
    <!-- PHP End here -->  

    <!-- form start here -->
    <form action="index.php" method="POST" class="form">
    <label for="num1">Enter First number</label><br>   
    <input type="number" name="num1" value="<?php echo @$num1; ?>" required><br>
     <label for="num2">Enter Second number</label><br>   
    <input type="number" name="num2" value="<?php echo @$num2; ?>" required><br>
    <label for="num2">PLease Select One</label><br> 
    <select name= "drop" id="drop">
        <option value="">Please select operator</option>
        <option value="add">Addition</option>
        <option value="sub">Substraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select><br>
    <input type="submit" name="submit" class="submit">
    <h3>Your Answer:</h3>
    <p><?php echo @$num3;?></p>

    </form>

    <!-- form End here -->

    <!-- Footer Starts here -->
<footer>
    <?php
    include "templates/footer.php";
    ?>
    <!-- Footer End here -->
</footer>
</body>
</html>