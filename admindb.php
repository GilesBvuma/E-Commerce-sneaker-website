<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "shoe_website";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $shoe_id = isset($_POST['shoe_id']) ? intval($_POST['shoe_id']) : null;
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $image = $_POST['image'];

    if ($shoe_id) {
        // Update existing shoe
        $stmt = $conn->prepare("UPDATE products SET name = ?, price = ?, stock = ?, image = ? WHERE id = ?");
        $stmt->bind_param("sdisi", $name, $price, $stock, $image, $shoe_id);
    } else {
        // Add new shoe
        $stmt = $conn->prepare("INSERT INTO products (name, price, stock, image) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sdis", $name, $price, $stock, $image);
    }

    if ($stmt->execute()) {
        echo "Shoe data saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
header("Location: admin.php"); // Redirect back to admin page
exit();
?>