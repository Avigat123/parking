<?php
session_start();

// Only customers allowed
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'customer') {
    echo "Access denied.";
    exit();
}

// DB Connection
$conn = new mysqli("localhost", "root", "", "parking_system");
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$customer_id = $_SESSION['user_id'];

// Fetch customer bookings
$sql = "SELECT b.booking_id, b.hours, b.status, p.location, p.price_per_hour
        FROM bookings b
        JOIN parking_spots p ON b.spot_id = p.spot_id
        WHERE b.customer_id = '$customer_id'";
        
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Bookings</title>
</head>
<body>

<h2>Your Bookings</h2>
<a href="customer_dashboard.php">Back to Dashboard</a><br><br>

<table border="1" cellpadding="6">
    <tr>
        <th>Booking ID</th>
        <th>Location</th>
        <th>Hours</th>
        <th>Price/hr</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td>".$row['booking_id']."</td>
                <td>".$row['location']."</td>
                <td>".$row['hours']."</td>
                <td>".$row['price_per_hour']."</td>
                <td>".$row['status']."</td>";

        if ($row['status'] == "booked") {
            echo "<td><a href='cancel_booking.php?booking_id=".$row['booking_id']."'>Cancel</a></td>";
        } else {
            echo "<td> - </td>";
        }

        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No bookings found</td></tr>";
}
?>
</table>

</body>
</html>
