<?php
    include 'connect.php';


    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $symptoms = $_POST['symptoms'];

$okay = TRUE;  

	 	if($okay){	   
            $query = "INSERT INTO healthform(name, email, age, gender, symptoms, form_id) VALUES ('$name', '$email', '$age', '$gender', '$symptoms',last_insert_id())";
	   		try{
		 		$con -> exec($query);
		 		$con = null;
		 		echo "Form Submitteed!";
		 		header('refresh:0.2;url=history.html');
		 	}
		 	catch(PDOException $e){
		 		echo "Something went wrong! <br>".$e->getMessage();
		 	}
		}

		else {
			print '<p> Redirecting back to Home page.</p>';
			header('refresh:2.0;url=index.html');
		}
	
	
?>

