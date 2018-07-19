<!DOCTYPE html>

<html>

<head>
    
    <title>Thank You</title>
    
    <link href="css/signin.css" rel="stylesheet">
    
    <?php
    
	   // add the new student to the students table of the database
       // this is a C-for CRUD move, so use INSERT INTO
    
       // 1.) import connection script
       require_once("conn/conn.php");
    
       // 2.) grab the incoming POST variables from the form  
       $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $startDate = $_POST['startDate'];
    
       // 3.) write the query string using INSERT INTO
        $query = "INSERT INTO students(firstName, lastName, email, phone, startDate) VALUES('$firstName', '$lastName', '$email', '$phone', '$startDate')";
    
       // 4.) execute the query
        mysqli_query($conn, $query);   
    
       // 5.) return to signin.php and click secret link (logo) to load all records from students table, and see if your new student appears!
       // records load into table at signin-list.php
    
    ?>
    
</head>

<body>
    
    <div class="thankyou">

         <h1 align="center">Thanks for signing in!</h1>
        <!-- put JS code directly into the onclick, so no script required -->
         <button onclick="goBack()">BACK</button>
        
    </div>
<!--
    
	<script>
        //
        // emulate browser back button (return to cached page)
		function goBack() {
			window.history.back();
		}
        
	</script>
-->
    
</body>
    
</html>