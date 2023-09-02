<doctype html>
<html>
    <head>
        <title>car_showroom_connection</title>
    </head>
    <body>
        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "carshowrrom";
        $conn mysqli_connect($host, $username, $password, $database);
        if (!$conn) {
            die("Connection failed: ". mysqli_connect_error());
        }
        //get the data from index form
        $fname = $_REQUEST['$fname'];
        $fname = $_REQUEST['$pnumber'];
        $fname = $_REQUEST['$email'];
        $fname = $_REQUEST['$subject'];
        $fname = $_REQUEST['$message'];
        
        $sqli = "INSERT INTO contact_form VALUES ('$fname','pnumber','email','subject','message')";
        if(mysqli_query($conn, $sql)){
            echo "Your Record has been Submitted";
        }
        else{
            echo "ERROR: Please Filled all input Properly $sql." . mysqli_error($conn);
        }
        // Close Connection
        mysqli_close($conn);
        
        ?>
    </body>
</html>