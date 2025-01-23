<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $pagetitle = "Salary Generator";
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
     <!-- PHP Salary calculator start here -->
    <?php 
    $salary = "";
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

    <!-- PHP Salary calculator End here -->

    <h2 class="numbercheck">Salary calculator with over time</h2>
    
    <!-- Salary calculator with over time -->
    <form action="" method="POST">
        <label for="hours">Please enter your Worked hours</label><br>
        <input type="text" name="hours" id="hours" required value="<?php echo $hours;?>"><br>
        <label for="rate">Please enter your Hour Rate</label><br>
        <input type="text" name="rate" id="rate" required value="<?php echo $rate;?>"><br>
        <input type="submit" name="submit"><br>
        <!-- PHP start here -->
            <?php 
        if (isset($_POST["submit"])){
            echo"<h2>Your salary is $$salary</h2>";
        }

        ?>
        <!-- PHP End here -->
    </form>

    <!-- Salary calculator with over time End here -->


    <!-- Number Check program  -->


    <!-- PHP Number Check program start here -->
    <?php 
    $number = "";
    $answer = "";
    if (isset($_POST["numbersubmit"])){
        $number = $_POST["number"];
        if($number >0){
            $answer = "Your Number is Positive";
            }
        else if ($number <0) {
            $answer = "Your Number is Negative";
        } 
        else{
            $answer = "Your Entered Zero";
        }

    }


    ?>
    <!-- PHP Number Check program END here -->
    <h2 class="numbercheck">Number Check program starts here</h2>

    <form action="" method="POST">
        <label for="number">Please Enter Number</label><br>
        <input type="text" name="number" id="number" required value="<?php echo $number; ?>"><br>
        <input type="submit" name="numbersubmit"><br>

    <!-- PHP start here -->
            <?php 
        if (isset($_POST["numbersubmit"])){
            echo"<h2>$answer</h2>";
        }

        ?>
    <!-- PHP End here -->
    </form>

         <!-- PHP Grade program start here -->
    <?php 
    $marks = "";
    $result= "";

    if (isset($_POST["markssubmit"])){

        $marks = (int)$_POST["marks"];
        switch (true) {
            
            case $marks>=90:
                $result= "A+ Grade";
                break;
            case $marks>=80:
                $result= "A Grade";
                break;    
            case $marks>=70:
                $result= "B+ Grade";
                break; 
            case $marks>=60:
                $result= "B Grade";
                break;   
            case $marks>=50:
                $result= "C Grade";
                break; 
            case $marks>=40:
                $result= "D Grade";
                break; 
            default:
                $result= "You are Fail";
                break; 
              
        }
    }


    ?>
    <!-- PHP END here -->

        <!-- Grade program Start here -->

        <h2 class="numbercheck">Grade program starts here</h2>
    <form action="" method="POST">
        <label for="marks">Please Enter Your Marks</label><br>
        <input type="text" name="marks" id="marks" required value="<?php echo $marks; ?>"><br>
        <input type="submit" name="markssubmit"><br>
        <!-- Grade program End here -->

         <!-- PHP start here -->
         <?php 
        if (isset($_POST["markssubmit"])){
            echo"<h2>$result</h2>";
        }

        ?>

    <!-- PHP End here -->
    </form>


    <!-- PHP DAY QUOTES program start here -->
    <?php 
    $day = "";
    $quote= "";
    if (isset($_POST["daysubmit"])){
        $day = $_POST["day"];
        $day = strtolower( $day );
        $dayprocess = strtolower( $day );
        switch ($dayprocess) {
            
            case 'monday':
                $quote = "Monday is a fresh start!";
                break;
            case 'tuesday':
                $quote = "Tuesday is just another day to be amazing!";
                break;    
            case 'wednesday':
                $quote = "Wednesdays will either make you or break you.";
                break; 
            case 'thursday':
                $quote = "As the sun rises on Thursday morning, so does your potential for greatness.";
                break;   
            case 'friday' :
                $quote = "Let Friday show you where the smiles are in life.";
                break; 
            case 'saturday' :
                $quote = "Saturday is the perfect day to relax and enjoy the weekend!";
                break; 
            case  'sunday':
                $quote = "Sundays are for adventure, exploration, and creating beautiful memories";
                break;     
            default:
                $quote= "You Entered invalid";
                break; 
              
        }
    }


    ?>
    <!-- PHP DAY QUOTES END here -->

        <!-- DAY QUOTES program Start here -->

        <h2 class="numbercheck">Day Quotes program starts here</h2>
    <form action="" method="POST">
        <label for="day">Please Enter Day</label><br>
        <input type="text" name="day" id="day" required value="<?php echo $day; ?>"><br>
        <input type="submit" name="daysubmit"><br>
        <!-- DAY QUOTES program End here -->

         <!-- PHP start here -->
         <?php 
        if (isset($_POST["daysubmit"])){
            echo"<h2>$quote</h2>";
        }

        ?>

    <!-- PHP End here -->
    </form>


    <!-- Footer Starts here -->
    <footer>
            <?php
            include "templates/footer.php";
            ?>
    </footer>
        <!-- Footer End here -->
</body>
</html>