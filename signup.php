<?php
session_start();
// signup.php
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

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['signUp'])) {
    $user_name = $_POST["username"];
    $email = $_POST["email"];
    $pass_word = $_POST["password"];
    $re_password = $_POST["re-password"];
    $checkbox = filter_input(INPUT_POST, "signup-checkbox", FILTER_VALIDATE_BOOL);

if ( ! preg_match("/[0-9]/", $pass_word)){
    die("Password must contain at least one number");
}

if ( $pass_word !== $re_password){
    die("Passwords do not match.");
}

$passcode = password_hash($pass_word, PASSWORD_DEFAULT);

if (!$checkbox) {
    die("Terms must be checked");
}

    // Check if username or email already exists
    $stmt = $conn->prepare("SELECT * FROM user_details WHERE user_name = ? OR email = ?");
    $stmt->bind_param("ss", $user_name, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        die("Username or email already exists.");
    }

    // Insert the new user into the database
    $stmt = $conn->prepare("INSERT INTO user_details (user_name, email, pass_word, checkbox) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $user_name, $email, $passcode, $checkbox);

    if ($stmt->execute()) {
        header("Location: index.php?signup=success"); // Change to your desired page
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
