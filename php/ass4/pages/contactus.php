<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $pagetitle="Contact us Page";
    include '../templates/head.php';
    ?>
    
</head>
<body>
    <!--Header Section Start -->
    <?php
    include '../templates/header.php';
    ?>
 <!--Header Section End -->

    <!--Form Section Start -->
    <section class="con_form">
        <h1>Contact us using this form</h1>
        <form action="action.php" method="post" enctype="multipart/form-data">
            <label for="f_name" >First Name</label><br>
            <input type="text" name="f_name" id="f_name" class="field1" required><br>
            <label for="l_name">Last Name</label><br>
            <input type="text" name="l_name" id="l_name" class="field1" required><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" class="field1" required><br>
            <label for="phone">Phone Number</label><br>
            <input type="tel" name="phone" id="phone" class="field1" required><br>
            <label for="message">Your Message</label><br>
            <textarea name="message" id="message" cols="79" rows="10"></textarea><br>
            <input type="submit">
        </form>
    </section>    
    <!--Form Section End -->


    <!--Footer Section Start -->
    <?php
    include '../templates/footer.php';
    ?>
<!--Footer Section End -->
</body>
</html>