<?php
    $servername = "db.cs.dal.ca";
    $username = "chuw";
    $password = "bZ7oAdDSnEqd7Y846i2V6XTmV";
    $dbname = "chuw";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $email = $_POST['email'];

    $sql = "SELECT name, symptoms FROM healthform WHERE email = '$email' ORDER BY form_id DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "Your Recent Inquiries:". "<br>";
        while($row = mysqli_fetch_assoc($result)) {
          echo "Name: " . $row["name"]. "---Reported Symptoms: " . $row["symptoms"]. "<br>";
        }
      } else {
        echo "You haven't submit any inquiries. Redirecting to Home Page...";
        header('refresh:2.0;url=index.html');
      }
      
      mysqli_close($conn);
	 
?>
