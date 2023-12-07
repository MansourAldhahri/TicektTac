
    <!--name:Mansour Ahmed Aldhahri
        ID:2036538
        SECTION: CS1
    -->
    <!--name:Musab Hassan Alsobhi
        ID:2035566
        SECTION: CS1
        
    -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback_db";
$port = 3307;



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if email exists
$email = $_POST['email'];
$sql = "SELECT id FROM form WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Error: Email already exists.";
} else {
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO form (firstName, lastName, email, phone, rating, content, design, performance, improvement, comments) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiiiiss", $firstName, $lastName, $email, $phone, $rating, $content, $design, $performance, $improvement, $comments);

    // Set parameters and execute
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $rating = $_POST['rating'];
    $content = isset($_POST['Content']) ? 1 : 0;
    $design = isset($_POST['Design']) ? 1 : 0;
    $performance = isset($_POST['Performance']) ? 1 : 0;
    $improvement = $_POST['improvement'];
    echo "Improvement: " . $_POST['improvement'];
    $comments = $_POST['comments'];

    $stmt->execute();

    echo "New records created successfully";
    $stmt->close();
}

$conn->close();
?>
