<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <link rel="stylesheet" href="style.css"> 
    <title>products</title>
</head>
<body> 
    <header>
        <a href="#" class="logo">Locate Me</a> 
        <nav class="navigation"> 
            <a href="index1.php">Home</a> 
            <a href="About.php">About</a>
            <a href="products.php">Products</a> 
            <a href="contact.php">Contact Us</a>  
          
            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i>
           <span class="quantity">0</span>
     
          
        </a> 
        </nav>
       
    </header>
 

    <section class="cards" id="Products"> 
        <h2 class="title">Products</h2> 
        <div class="content">  
        <?php
require_once "database.php";
session_start();
$query = "SELECT ID, image, title, price, dis, fav FROM products";
$result = mysqli_query($conn, $query);
$email = $_SESSION["users"];
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="card1">';
    echo '<div class="image">';
    echo '<img src="' . $row["image"] . '">';
    echo '</div>';
    echo '<div class="info">';
    echo '<h3>' . $row["title"] . '</h3>';
    echo '<span>' . $row["price"] . ' SAR</span>';
    echo '<p>' . $row["dis"] . '</p>';
    echo '</div>';
    echo '<div class="bay">';
    echo '<form method="POST" action="">';
    echo '<input type="hidden" name="id" value="' . $row['ID'] . '">';
    echo '<input type="hidden" name="title" value="' . $row['title'] . '">';
    echo '<input type="hidden" name="image" value="' . $row['image'] . '">';
    echo '<input type="hidden" name="dis" value="' . $row['dis'] . '">';
    echo '<input type="hidden" name="price" value="' . $row['price'] . '">';
    echo '<input type="hidden" name="email" value="' . $email . '">';
    echo '<button type="submit" name="buy">Buy Now</button>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
}

if (isset($_POST['buy'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $image = $_POST['image'];
    $dis = $_POST['dis'];
    $price = $_POST['price'];
    $uEmail = $_POST['email'];
    $sql = "INSERT INTO favtable ( title, image, dis, price,uEmail) VALUES ( '$title', '$image', '$dis', '$price','$uEmail')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>window.location.href = "cart.php";</script>';
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}
?>
 
        </div>
    </section>
  
  

  
    <footer class="footer">
        <p class="footer-title">Locate Me,  <span>Here to help you</span></p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>

    <script>
    // Function to display the alert dialog
    function showAlert() {
      var message = "Do you need to buy now?";
      var result = window.confirm(message);

      if (result) {
        // OK button is clicked
        window.location.href = "cart.php";
      }
    }

function executePHP() {
            <?php 
               
                ?>
        }
    </script>
</body>
</html>
 

