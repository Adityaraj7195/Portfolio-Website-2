<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contactNo = $_POST["contact_no"];

    
    echo "Data Collected:<br>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Contact Number: " . $contactNo . "<br>";
} else {
    echo "Invalid request.";
}
?>
