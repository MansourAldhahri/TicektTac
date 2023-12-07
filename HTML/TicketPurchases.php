<!DOCTYPE html>
<html>

<head>
    <title>Event Booked</title> <!--this is title will show in tap you open-->
    <!--name:Mansour Ahmed Aldhahri
        ID:2036538
        SECTION: CS1

    -->
    <!--name:Musab Hassan Alsobhi
        ID:2035566
        SECTION: CS1
  
    -->
    <!--this will take the external css file-->
    <link rel="stylesheet" type="text/css" href="../CSS/global.css">
    <link rel="stylesheet" type="text/css" href="../CSS/styles.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style_event.css">
    
    
</head>
<?php
$servername = "db-mysql-fra1-42089-do-user-15327179-0.c.db.ondigitalocean.com";
$username = "doadmin";
$password = "AVNS__6ABB6CWW3pynlGAy91";
$dbname = "defaultdb";
$port = 25060;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 include '../includes/header.php'; 
 include '../includes/links.php'; 
echo "<h2>Ticket Purchases with Event and User Details</h2>";

// SQL query
$ticketQuery = "SELECT TicketPurchases.*, Events.event_name, Events.event_date, Events.event_time, Users.full_name 
                FROM TicketPurchases 
                JOIN Events ON TicketPurchases.event_id = Events.event_id 
                JOIN Users ON TicketPurchases.user_id = Users.user_id";

// Execute query and display results
$ticketResult = $conn->query($ticketQuery);

if ($ticketResult->num_rows > 0) {
    echo "<table><tr><th>Purchase ID</th><th>User Full Name</th><th>Event Name</th><th>Event Date</th><th>Event Time</th><th>Tickets Purchased</th><th>Total Price</th></tr>";
    while($row = $ticketResult->fetch_assoc()) {
        echo "<tr><td>" . $row["purchase_id"]. "</td><td>" . $row["full_name"]. "</td><td>" . $row["event_name"]. "</td><td>" . $row["event_date"]. "</td><td>" . $row["event_time"]. "</td><td>" . $row["ticket_quantity"]. "</td><td>" . $row["total_price"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No ticket purchases found.";
}

$conn->close();

include '../includes/footer.php'; 
?>

</html>
