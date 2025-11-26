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
<html>
<head>
    <title>Book Parking</title>
</head>
<body>

<h2>Book Parking Spot</h2>

<p><strong>Location:</strong> <?php echo $spot['location']; ?></p>
<p><strong>Price per hour:</strong> <?php echo $spot['price_per_hour']; ?></p>
<p><strong>Available Slots:</strong> <?php echo $spot['available_slots']; ?></p>

<form action="book_parking_process.php" method="POST">

    <input type="hidden" name="spot_id" value="<?php echo $spot_id; ?>">

    <label>Hours:</label><br>
    <input type="number" name="hours" min="1" required><br><br>

    <button type="submit">Confirm Booking</button>
</form>

<br>
<a href="view_parking_customer.php">Back</a>

</body>
</html>
