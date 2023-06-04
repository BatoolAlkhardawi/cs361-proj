<?php


    // database details
    // Set your connection variables
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vol";

    // Create connection
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$conn)
    {
        die("Connection failed!" . mysqli_connect_error());
    }else{
    echo "connected successfully" . "<br>";
    }
    // database and tabel are created in Xampp (PhpMyAdmin)
    // databse's name: vol
    // tabel's name: MyVol
    //select
    $sql = "SELECT id, fullname FROM MyVol";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<p> here is a list of our volunteers </p>";
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["fullname"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    // close connection
    mysqli_close($conn);

?>