<?php
// Include database connection file
include 'connect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST")  {
    // Retrieve form data
    $Pax = $_POST['Pax'];
    $Date = $_POST['Date'];
    $Time = $_POST['Time'];
    $name = $_POST['Name'];
    $phone_num = $_POST['Phone'];
    $email = $_POST['Email'];
    $req = $_POST['Message'];
//store data in session
    $_SESSION['Pax'] = $Pax;
    $_SESSION['Date'] = $Date;
    $_SESSION['Time'] = $Time;
    $_SESSION['Name'] = $name;
    $_SESSION['Phone'] = $phone_num;
    $_SESSION['Email'] = $email;
    $_SESSION['Message'] = $req;

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO custbooking (Pax, Date, Time, name, phone_num, email, req) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $Pax, $Date, $Time, $name, $phone_num, $email, $req);

    // Execute the query
    if ($stmt->execute()) {
        echo '<script>alert("Your booking is successful"); window.location.href = "booking.php";</script>';
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
