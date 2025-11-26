<?php
session_start();

// Only customers allowed
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'customer') {
    echo "Access denied.";
    exit();
}

// Check if spot_id is provided
if (!isset($_GET['spot_id'])) {
    echo "Invalid request.";
    exit();
}

$spot_id = $_GET['spot_id'];

// DB Connect
$conn = new mysqli("localhost", "root", "", "parking_system");
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Fetch parking spot data
$sql = "SELECT * FROM parking_spots WHERE spot_id='$spot_id'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "Parking spot not found.";
    exit();
}

$spot = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>book parking</title>

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

  <div class="heading" style="background:url(images/booking_parking.png) no-repeat">
    <h1>pre-booking</h1>
  </div>
<section class="booking-section">

  <div class="booking-card">

    <h2 class="booking-title">Book Parking Spot</h2>

    <div class="booking-details">
      <p><strong>Location:</strong> <?php echo $spot['location']; ?></p>
      <p><strong>Price per hour:</strong> ₹<?php echo $spot['price_per_hour']; ?></p>
      <p><strong>Available Slots:</strong> <?php echo $spot['available_slots']; ?></p>
    </div>

    <form action="book_parking_process.php" method="POST" class="booking-form">

      <input type="hidden" name="spot_id" value="<?php echo $spot_id; ?>">

      <label>Hours:</label>
      <input type="number" name="hours" min="1" required placeholder="Enter hours">

      <button type="submit" class="booking-btn">Confirm Booking</button>
    </form>

    <a href="view_parking_customer.php" class="booking-back">← Back</a>
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
