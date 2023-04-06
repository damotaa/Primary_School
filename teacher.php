<!DOCTYPE html>
<html lang="en">

<head>
  <title>School Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

  
<body>
    
<style>

html, body{
    margin: 0;
    left: 0;
    position: flex;
    background-color: #2d6d7d;

}

h3{

color:white;
}


form {
      width: 300px;
      margin: 0 auto;
      color: white;
    }

    label,
    input,
    textarea {
      display: block;
      margin-bottom: 10px;
    }

    label {
      font-weight: bold;
    }

    input,
    textarea {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
    }

    textarea {
      height: 100px;
    }

    .btn{
      background-color: #32a852;
      color: #fff;
      padding: 10px;
      border: none;
      cursor: pointer;
    }

    input[type="submit"] {
      background-color: #32a852;
      color: #fff;
      padding: 10px;
      border: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #42f584;
    }

</style>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Rishton Academy Primary School</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="student.php">Students</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="parents.php">Parents</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="teacher.php">Teachers</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>

        

      </ul>
    </div>
  </nav>

  <div class="container-fluid mt-3">
  
    <?php
		
      $connect = mysqli_connect("localhost", "root", "", "School");
      // Check connection
      if ($connect === false) {
        die("Connection failed: ");
      }
		
    ?>

    <!--Displays Teachers Information-->

<h3>See All Teachers:</h3>
	
		<table>
		
			<tr>
				<th width="250px">SName<br><hr></th>
				<th width="250px">Address<br><hr></th>
				<th width="250px">Email<br><hr></th>
				<th width="250px">Anual_Salary<br><hr></th>
				<th width="250px">Background_Check<br><hr></th>
        <th width="250px">Teacher_id<br><hr></th>

        



			</tr>
				
          <?php

				// Displays Teachers details //


          
		  
		  $sql = mysqli_query($connect, "SELECT sName, Address, Email, Anual_Salary, Background_Check, Teacher_id  FROM Teachers");
          while ($row = $sql->fetch_assoc()){
          echo "

            <th>{$row['sName']}</th>
            <th>{$row['Address']}</th>
            <th>{$row['Email']}</th>
            <th>{$row['Anual_Salary']}</th>
            <th>{$row['Background_Check']}</th>
            <th>{$row['Teacher_id']}</th>

        
          </tr>";
          
          }
          

          ?>

      </table>

      <br><br>  

      <hr>

      <!--ADD new Parents Information-->

		<h3>Add a New Teacher:</h3>
	
    <br>
		<form method="post" action="teacher.php">
		
			<label>Full Name:</label>
			<input type="text" name="f_name">

      <label>Email:</label>
			<input type="text" name="s_email">

      <br><br>
      
      <label>Address:</label>
			<input type="text" name="s_address" maxlenght = "150" style="width: 300px; height: 100px;">

      <br><br>

      <label>Phone Number:</label>
			<input type="text" name="s_phone">

      <label>Anual Salary:</label>
			<input type="text" name="s_anualSalary">
      
      <br>

      <label>Background Check:</label>
			
      <select type="text" name="s_bCheck">
          
          <option value = "Yes"> Yes </option>
          <option value = "No"> No </option>

      </select>
          <br>
            <!-- Selecting Classes Year -->
            <label>Select Year:</label>
			  
        <select name="Class_id">
          
         <?php 
         
         // Chase classe information from the data base
         $sql = mysqli_query($connect, "SELECT Class_id, ClassName FROM Classes;");
         while ($row = $sql->fetch_assoc()){
         echo "<option value=" . $row['Class_id'] . ">" . $row['ClassName'] ."</option>";
         
         }
         
         ?>
         </select>
         <br>

      <input type="submit" name="addteacher" class="btn">

    
      
		
		</form>

    <br>
		



		<?php
   
    
    /// -------Erro Report------------ ///

  error_reporting(1);

   
   /// --------Error Report End--------- ///
		
   if (isset($_POST['addteacher'])) {

      // Hold information typed from user input

      $f_name = $_POST['f_name'];
      $s_email = $_POST['s_email'];
      $s_address = $_POST['s_address'];
      $s_phonenumber = $_POST['s_phone'];
      $s_anual_salary = $_POST['s_anualSalary'];
      $s_background_check = $_POST['s_bCheck'];
      $className = $_POST['Class_id'];


			// Insert Information into database //
			$sql = "INSERT INTO Teachers (sName, Email, Address, Phone_Number, Anual_Salary, Background_Check, Class_id) VALUES ('$f_name', '$s_email', '$s_address', '$s_phonenumber', '$s_anual_salary', '$s_background_check', '$className')";
      echo $sql;

      
      if (mysqli_query($connect, $sql)) {
			  echo "New record created successfully";
			} else {
			  echo "Error adding record ";
			}


      
		
     // Close database connection
     mysqli_close($connect);
     
     
    

		}
    
    ?>

    <hr>

      <!--Delete Teachers Information-->
      
      
      <h3>Delete Teacher By ID:</h3>
      <br>
	
        <th>
        <form action="teacher.php" method="POST">
            
            <label for="row_id">Enter Teachers ID to delete:</label>
            <input type="text" name="row_id" id="row_id">
            <br>
            <button type="submit" name="delete_teacher" class="btn">Delete</button>
            <br>
        </form>

   <?php
   // Check if form is submitted
   if (isset($_POST['delete_teacher'])) {
   
     // Get row ID to delete
     $row_id = $_POST['row_id'];
   
     // Delete row from database
     $sql = "DELETE FROM Teachers WHERE Teacher_id = $row_id";
   
     if (mysqli_query($connect, $sql)) {
       echo "Teacher deleted successfully.";
     } else {
       echo "Error deleting row: " . mysqli_error($connect);
     }
   
     // Close database connection

  
     $connect->close();
    }
     
    ?>

      <!------- Update Students Details --------->

      <h3>Update Teachers Details:</h3>
        
        <th>
        <form action="teacher.php" method="POST">
          
          <label>Insert ID:</label>
          <input type="text" name="update_id">
          <br>

          <label>Email:</label>
          <input type="text" name="update_email">

          <br><br>
          
          <label>Address:</label>
          <input type="text" name="update_address" maxlenght = "150" style="width: 300px; height: 100px;">

          <br><br>

          <label>Phone Number:</label>
          <input type="text" name="update_number">

          <br>
          <button type="submit" name="update_teachers" class="btn">Update</button>
          <br>
        
          </form>

          <?php
            
              // Check if form is submitted
                if (isset($_POST['update_teachers'])) {
              
                // Get row ID to update
                $update_email = $_POST['update_email'];
                $update_address = $_POST['update_address'];
                $update_number = $_POST['update_number'];
                $teacherid = $_POST ['update_id'];
              
                // Update ID row from database
                $sql = "UPDATE Teachers SET Email = '$update_email', Phone_Number = '$update_number', Address = '$update_address' where Teacher_id = '$teacherid' ";
                //echo $sql;
              
                if (mysqli_query($connect, $sql)) {
                  echo "Student Updated successfully.";
                } else {
                  echo "Error updating row: " . mysqli_error($connect);
                }
              
                // Close database connection

            
                $connect->close();
          
              }
          
          
          ?>

</div>

</body>

<br>

<style>
footer {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
  position: relative;
  bottom: 0;
  width: 100%;
}

.classid {
  max-width: 960px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav li {
  margin-left: 20px;
}

nav a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s ease-in-out;
}

nav a:hover {
  color: #ccc;
}

</style>


<footer>
  <div class="classid">
    <p>&copy; 2023 RISHTON ACADEMY. All rights reserved.</p>
    <nav>
      <ul>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </nav>
  </div>
</footer>
</html>


