<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $pagetitle="Registration Form";
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
        <h1>Registration form</h1>
        <form action="action.php" method="post" enctype="multipart/form-data">
            <label for="f_name" >First Name</label><br>
            <input type="text" name="f_name" id="f_name" class="field1" required><br>
            <label for="l_name">Last Name</label><br>
            <input type="text" name="l_name" id="l_name" class="field1" required><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" class="field1" required><br>
            <label for="phone">Phone Number</label><br>
            <input type="tel" name="phone" id="phone" class="field1" required><br>
            <label for="date">Date of Birth</label><br>
            <input type="date" name="date" id="date" class="field1" required><br>
            <label for="country">Country</label><br>
            <select name="country" id="country" class="field1">
                <option value="">Pakistan</option>
                <option value="">India</option>
                <option value="">Iran</option>
                <option value="">Iraq</option>
                <option value="">Australia</option>
                <option value="">Bangladesh</option>
                <option value="">Sirilanka</option>
                <option value="">syria</option>
                <option value="">usa</option>
                <option value="">uk</option>
            </select><br>
            <label for="gnder">Gender</label><br>
            <input type="radio" name="gnder" id="gnder"  required>
            <label for="gnder">Male</label>
            <input type="radio" name="gnder" id="gnder" required>
            <label for="gnder">Female</label><br>
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username" class="field1" required><br>
            <label for="Password">Password</label><br>
            <input type="password" name="Password" id="Password" class="field1" required><br>
            <input type="submit" value="Register">
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