<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Shoe Management</title>
    <link rel="stylesheet" href="./styles/style.css"/>
    <link rel="stylesheet" href="./styles/admins.css" />
</head>
<body>
<header class="main-navigation">
      <div>
        <img src="./images/logo.png" height="50px" alt="company-logo" />
      </div>
      <div class="nav-links">
        <a href="./index.php">Home</a>
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
      </div>
      <div class="nav-btns">
        <input type="search" placeholder="🔍Search" id="search-btn" />
       <a><div class="emoj"><img src="./icons/shopping_cart.svg"></div>Cart</a> 
       <a><div class="emoj"><img src="./icons/account_circle.svg"/></div>
        Profile</a>     
      </div>
    </header>
    <h1>Admin - Manage Shoes</h1>

    <form id="shoeForm" action="shoesdb.php" method="POST">
        <h2>Add or Update Shoe</h2>
        <div class="container">
        <input class="put" type="hidden" name="shoe_id" id="shoe_id" value="">
        
        <label>Shoe Name:</label>
        <input class="put" type="text" name="name" id="name" required>

        <label>Price:</label>
        <input class="put" type="number" name="price" id="price" required step="0.01">

        <label>Stock:</label>
        <input class="put" type="number" name="stock" id="stock" required>

        <label>Image Filename:</label>
        <input class="put" type="text" name="image" id="image" required>

        <button type="submit">Submit</button>
    </div>
    </form>

    <h2>Existing Shoes</h2>
    <div id="shoeList">
        <?php
        $conn = new mysqli("localhost", "root", "", "shoe_website");

        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }

        // Fetch existing shoes from the database
        $result = $conn->query("SELECT * FROM shoes");
        while ($row = $result->fetch_assoc()) {
            echo '<div class="shoe-item">';
            echo '<h4>' . htmlspecialchars($row['shoe_name']) . '</h4>';
            echo '<p>Price: $' . number_format($row['shoe_price'], 2) . '</p>';
            echo '<p>Stock: ' . $row['shoes_stock'] . '</p>';
            echo '<p>Image: ' . htmlspecialchars($row['image']) . '</p>';
            echo '<button onclick="editShoe(' . $row['id'] . ', \'' . addslashes($row['name']) . '\', ' . $row['price'] . ', ' . $row['stock'] . ', \'' . addslashes($row['image']) . '\')">Edit</button>';
            echo '</div>';
        }

        $conn->close();
        ?>
    </div>

    <script>
        function editShoe(id, name, price, stock, image) {
            document.getElementById('shoe_id').value = id;
            document.getElementById('name').value = name;
            document.getElementById('price').value = price;
            document.getElementById('stock').value = stock;
            document.getElementById('image').value = image;
        }
    </script>
</body>
</html>