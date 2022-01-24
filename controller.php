<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crypto_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["username"]) && isset($_POST["password"])){
    $username =  $_POST["username"];
    $password = $_POST["password"];

    if($username =="admin" && $password =="admin1234")
        echo true;
    else 
        echo false;
}
if(isset($_POST["post_type"])){
    $post_type = $_POST["post_type"];
    
    if($post_type == "new_crypto"){
        if(!isset($_POST["name"])){
            echo false;
            exit;
        }
        if(!isset($_POST["price"])){
            echo false;
            exit;
        }
        if(!isset($_POST["total"])){
            echo false;
            exit;
        }
        if(!isset($_POST["marketcap"])){
            echo false;
            exit;
        }
        if(!isset($_POST["logo"])){
            echo false;
            exit;
        }

        $name = $_POST['name'];
        $price = $_POST['price'];
        $total = $_POST['total'];
        $marketcap = $_POST['marketcap'];
        $logo = $_POST['logo'];

        $sql = "INSERT INTO tokens (name, price, total_supply,market_cap, logo) VALUES ('$name', '$price', '$total','$marketcap', '$logo')";
        if ($conn->query($sql) === TRUE) {
            echo true;
        } else {
            echo false;
        }
        exit;

    }

    if($post_type == "edit_crypto"){
        if(!isset($_POST["name"])){
            echo false;
            exit;
        }
        if(!isset($_POST["price"])){
            echo false;
            exit;
        }
        if(!isset($_POST["total"])){
            echo false;
            exit;
        }
        if(!isset($_POST["marketcap"])){
            echo false;
            exit;
        }
        if(!isset($_POST["logo"])){
            echo false;
            exit;
        }
        if(!isset($_POST["id"])){
            echo false;
            exit;
        }
        $name = $_POST['name'];
        $price = $_POST['price'];
        $total = $_POST['total'];
        $marketcap = $_POST['marketcap'];
        $logo = $_POST['logo'];
        $id = $_POST['id'];
        $sql = "UPDATE tokens SET name='$name', price='$price', total_supply='$total', market_cap='$marketcap', logo='$logo' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo true;
        } else {
            echo false;
        }
        exit;

    }

    if($post_type == "remove_crypto"){
        if(!isset($_POST["id"])){
            echo false;
            exit;
        }
        $id = $_POST["id"];

        $sql = "DELETE FROM tokens WHERE id = $id";
        if ($result = $conn->query($sql)==TRUE) {
            echo true;
        } else {
            echo false;
        }
        exit;

    }
}
?>