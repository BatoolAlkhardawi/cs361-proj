<?php
    // getting info from form
    if(isset($_POST['submit']))
    {
        $fullname = $_POST['fullname'];
        $emailaddress = $_POST['emailaddress'];
        $phonenumber = $_POST['phonenumber'];
    }
    echo "<p> Thank your for volunteering with us.</p> <p> We will contact you on your email soon. </p>";

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
    //insert
    $sql = "INSERT INTO MyVol (fullname, emailaddress, phonenumber) VALUES ('$fullname', '$emailaddress', '$phonenumber')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }   

    // close connection
    mysqli_close($conn);

?>
