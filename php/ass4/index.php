<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $pagetitle="Home Page";
    include 'templates/head.php';
    ?> 
</head>
<body>
    <!--Header Section Start -->
  <?php
    include 'templates/header.php';
  ?>
 <!--Header Section End -->

  <!--Banner Section Start-->
  <section class="banner">
    <img src="/ass4/assets/banner.jpg" alt="Logo" width="1500px" height="600px" >
  </section>
   <!--Banner Section End -->

   <!--Aricle Section#1 Start -->
    <section class="article1">
        <article><a href="/ass4/pages/post1.php">
            <img src="/ass4/assets/blog1.jpg" alt="blog1" width="750px" height="320px"> 
            <h1>Top Cybersecurity Threats and How to Protect Your Business</h1>  
            <p>In today’s digital world, your website is often the first point of contact with potential customers.Whether your business is a small local startup or an established brand,the way your website looks and functions can make or break a sale.That’s why responsive website design is crucial for business success.</p>
        </article></a>
    </section>
   <!--Aricle Section#1 End -->

   <!--Aricle Section#2 Start -->

    <section class="article2">
        <article><a href="/ass4/pages/post2.php">
            <img src="/ass4/assets/blog2.jpg" alt="blog1" width="750px" height="320px">  
            <h1>The Benefits of Cloud Computing for Small Businesses</h1>  
            <p>In today’s digital world, your website is often the first point of contact with potential customers.Whether your business is a small local startup or an established brand,the way your website looks and functions can make or break a sale.That’s why responsive website design is crucial for business success.</p>
        </article></a>
    </section>
    <!--Aricle Section#2 End -->

       <!--Aricle Section#3 Start -->
        
       <section class="article3">
        <article><a href="/ass4/pages/post3.php">
            <img src="/ass4/assets/blog3.jpg" alt="blog3" width="750px" height="320px"> 
            <h1>How Data Backup & RecoveryCan Save Your Business</h1>  
            <p>In today’s digital world, your website is often the first point of contact with potential customers.Whether your business is a small local startup or an established brand,the way your website looks and functions can make or break a sale.That’s why responsive website design is crucial for business success.</p>
        </article></a>
    </section>
    <!--Aricle Section#3 End -->


   <!--Footer Section Start -->
   <?php
    include 'templates/footer.php';
    ?>
<!--Footer Section End -->
</body>
</html>