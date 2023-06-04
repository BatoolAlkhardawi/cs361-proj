<?php
    if(isset($_POST['update']))
    {
        $fullname = $_POST['fullname'];
        $emailaddress = $_POST['emailaddress'];
        $phonenumber = $_POST['phonenumber'];
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

        $sql = "UPDATE MyVol SET fullname = '$fullname', emailaddress ='$emailaddress', phonenumber='$phonenumber' WHERE emailaddress='$emailaddress'";
        if(mysqli_query($conn, $sql)) {
            echo "data updated successfully";
        } else {
            echo "data failed to be updated ";
        }
    
    
mysqli_close($conn);
?>