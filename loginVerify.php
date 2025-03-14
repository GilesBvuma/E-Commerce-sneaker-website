<?php
// loginVerify.php
session_start(); // Start the session

$host = "localhost";
$dbname = "shoe_website";
$username = "root";
$password = "";

// Create the connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_name = $_POST["login-userName"];
    $password = $_POST["login-passcode"];

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM user_details WHERE user_name = ?");
    $stmt->bind_param("s", $user_name);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        // Verify the password
        if (password_verify($password, $user["pass_word"])) {
            // Store user information in session
            $_SESSION["user"] = $user_name; // Store username in session
            $_SESSION["user_id"] = $user["id"]; // Assuming there's an ID field

            // Redirect to a welcome page or dashboard
            header("Location: index.php?login=success"); // Change to your desired page
            exit();
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "User not found!";
    }

    $stmt->close();
}

$conn->close();
?>