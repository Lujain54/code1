<?php
        if (isset($_POST["add"])) {
           $name = $_POST["name"];
           $email = $_POST["email"];
           $address = $_POST["address"];
           $credit = $_POST["credit"];
           $date = $_POST["date"];
           $CVV = $_POST["CVV"];
            require_once "database.php";
            $sql = "INSERT INTO user (name, email, address,Credit,expiry,CVV) VALUES ('$name', '$email', '$address','$credit','$date','$CVV')"; 
            if ($conn->query($sql) === TRUE) {
                echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
                    <link rel="stylesheet" href="style.css">
                    <title>User Dashboard</title>
                </head>
                <body>
                    <div class="container">
                        <h1>you will recive your order after 1 day</h1>
                        <a href="index1.php"> back</a>
                    </div>
                </body>
                </html>';
            } else {
                echo "Error inserting record: " . $conn->error;
            }
  
        }
        ?>
        