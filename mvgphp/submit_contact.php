<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $phno = htmlspecialchars($_POST['phno']);
    $company = htmlspecialchars($_POST['company']);
    $message = htmlspecialchars($_POST['message']);

    // Validate input (you can add more validation as per your requirements)
    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($phno) && !empty($company) && !empty($message)) {
        // Database credentials
        $servername = "localhost";  // Replace with your server name
        $username = "chaithanya";     // Replace with your MySQL username
        $password = "Chay@2314";     // Replace with your MySQL password
        $dbname = "company";        // Replace with your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to insert data into table
        $sql = "INSERT INTO details (fname, lname, email, phno, company, message) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $fname, $lname, $email, $phno, $company, $message);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "All fields are required";
    }
} else {
    echo "Error: Method not allowed";
}
?>
