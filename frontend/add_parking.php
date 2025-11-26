<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>owner</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <section class="header">
    <a href="home.php" class="logo">parking.</a>
    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">view parking</a>
      <a href="package.php">pre-book</a>
      <a href="book.php">refund</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
  </section>

  <div class="heading" style="background:url(images/heading-bg-2.png) no-repeat">
    <h1>pre-booking</h1>
  </div>
<section class="owner-container">

    <div class="owner-left">
        <div class="owner-welcome-text">
            <h1>WELCOME TO <span>PARKING OWNER PANEL</span></h1>
            <p>Manage your parking spaces, slot availability and rates easily in one dashboard.</p>
        </div>
    </div>

    <div class="owner-right">
        <h2 class="owner-form-title">Add Parking Spot</h2>

        <form action="add_parking_process.php" method="POST" class="owner-form">

            <div class="owner-input-group">
                <label>Location:</label>
                <input type="text" name="location" required>
            </div>

            <div class="owner-input-group">
                <label>Price per hour:</label>
                <input type="number" name="price" step="0.01" required>
            </div>

            <div class="owner-input-group">
                <label>Total Slots:</label>
                <input type="number" name="total_slots" required>
            </div>

            

            <input type="hidden" name="owner_id" value="<?php echo $_SESSION['user_id']; ?>">

            <a href="owner_dashboard.php"><button type="submit" class="owner-btn">Add Parking</button></a>
        </form>
    </div>

</section>


<!--footer-->
<section class="footer">
  <div class="box-container">
     <div class="box">
        <h3>quick links</h3>
          <a href="home.php"><i class="fas fa-angle-right"></i>
            home</a>
          <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
          <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
          <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
     </div>
      <div class="box">
        <h3>extra links</h3>
          <a href="#"><i class="fas fa-angle-right"></i>
            ask questions</a>
             <a href="#"><i class="fas fa-angle-right"></i>
            about</a>
             <a href="#"><i class="fas fa-angle-right"></i>
            privacy policy</a>
             <a href="#"><i class="fas fa-angle-right"></i>
            terms of use</a>
          
     </div>
       <div class="box">
        <h3>contact info</h3>
          <a href="#"><i class="fas fa-phone"></i>
            +869-977-1214</a>
             <a href="#"><i class="fas fa-phone"></i>
            +869-977-1214</a>
              <a href="#"><i class="fas fa-envelope"></i>
            vansshbhargav@gmail.com </a>
              <a href="#"><i class="fas fa-map"></i>chandigarh , india</a>
  </div>

   
       <div class="box">
        <h3>follow us</h3>
          <a href="#"><i class="fas fa-instagram"></i>
            instagram</a>
             <a href="#"><i class="fas fa-x"></i>
            X</a>
             <a href="#"><i class="fas fa-linkedin"></i>
            linkedin</a>
           
            </div>
  </div>
  <div class="credit"> </div>
</section>




  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  
  <script src="js/script.js"></script>
</body>
</html>
