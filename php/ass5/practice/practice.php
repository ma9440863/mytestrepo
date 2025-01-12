<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
   <!-- PHP starts Here -->  
    <?php
    // conditional statements
    if(isset($_POST["submit"]) ){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $drop = $_POST["drop"];

        switch ($drop) {
            case "add":
                $num3= $num1+$num2;
                    break;   
            case "sub":
                $num3= $num1-$num2;
                    break;
            case "multiply":
                $num3= $num1*$num2;
                    break;
            case "div":
                $num3= $num1/$num2;
                    break; 
            default:
            $num3= "Please Select operators";
        }
    } 
    ?>
    
   <!-- PHP End Here -->  


   <!-- form starts Here --> 
    <form action="index.php" method="POST">
    
    <input type="text" name="num1" placeholder="Enter Number" value="<?php echo @$num1; ?>"><br>
    <input type="text" name="num2" placeholder="Enter Number" value="<?php echo @$num2; ?>"><br>
    <select name="drop" id="drop">
       <option value="add">ADDITION</option> 
       <option value="sub">SUBSTRACTION</option> 
       <option value="multiply">MULTIPLY</option> 
       <option value="div">DIVIDE</option> 
    </select><br>
    <input type="Submit" name="submit">
       <!-- form Fields end Here --> 
    
    <h3>Your Answer</h3>
    <!-- php result here-->
     <p><?php echo @$num3; ?></p>
    <!-- php End result here-->

    </form>
   <!-- form End Here --> 


</body>
</html>
