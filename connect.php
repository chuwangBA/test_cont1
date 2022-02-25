<?php
    // your database credentials (check handout for localhost and Dal FCS server details)



# Localhost or web.cs.dal.ca

    $hostname = "db.cs.dal.ca";
    $user = "chuw";
    $password = "bZ7oAdDSnEqd7Y846i2V6XTmV";
    $database = "chuw";

    // establish connection with DB
    try{
    $con = new PDO("mysql:host=$hostname;dbname=$database", $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connected";
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
?>