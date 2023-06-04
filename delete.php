<?php
    if(isset($_POST['delete']))
    {
        $emailaddress = $_POST['emailaddress'];
    }

    // database details
    // Set your connection variables
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vol";

    // Create connection
    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "connected successfully" . "<br>";
    }

        $sql = "DELETE FROM MyVol WHERE emailaddress ='$emailaddress'";
        if(mysqli_query($conn, $sql)) {
            echo "Record deleted successfully";
        } else {
            echo "Record failed to be deleted ";
        }
    
    
mysqli_close($conn);
?>