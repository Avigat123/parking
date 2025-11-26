<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'owner') {
    echo "Access denied.";
    exit();
} 

$conn = new mysqli("localhost", "root", "", "parking_system");
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$owner_id = $_SESSION['user_id'];

$sql = "SELECT p.*, 
        (SELECT COUNT(*) FROM bookings 
         WHERE bookings.spot_id = p.spot_id 
         AND bookings.status = 'booked') AS booked_slots
        FROM parking_spots p
        WHERE p.owner_id = '$owner_id'";

$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>customer_dashboard</title>

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
<div class="owner-table-container">

    <h2 class="owner-table-title">Your Parking Spots</h2>

    <table class="owner-table">
        <thead>
            <tr>
             
                <th>Location</th>
                <th>Price/hr</th>
                <th>Total Slots</th>
                <th>Available</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            
                            <td>".$row['location']."</td>
                            <td>".$row['price_per_hour']."</td>
                            <td>".$row['total_slots']."</td>
                            <td>".$row['available_slots']."</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No parking spots added yet.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <br>
    <a href='owner_dashboard.php' class="btn">Back to Dashboard</a>

</div>


</section>

<!--footer-->
<section class="footer">
  <div class="box-container">
     <div class="box">
        <h3>quick links</h3>
          <a href="home.php"><i class="fas fa-angle-right"></i>
            home</a>
          <a href="about.php"><i class="fas fa-angle-right"></i>view parking</a>
          <a href="package.php"><i class="fas fa-angle-right"></i>pre book</a>
          <a href="book.php"><i class="fas fa-angle-right"></i>refund</a>
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
