<!DOCTYPE html>
<html lang="en">

<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<style>
html, body{
    margin: 0;
    left: 0;
    position: flex;
    background-color: #2d6d7d;

}

h2{

color:white;
}


form{
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
 <br><br>
  
 
 
      <div class="backbg">
      <h2>CONTACT US</h2>
      <br>
      
      <form action="contact.php" method="post">
        
        <label for="f_name">Name:</label>
        <input type="text" id="f_name" name="f_name" required><br><br>
        
        <label for="c_email">Email:</label>
        <input type="c_email" id="c_email" name="c_email" required><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="c_message" name="c_message" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" value="Submit" class="btn">
      
      </form>

      </div>  
   
   
   
   <?php
          
          $connect = mysqli_connect("localhost", "root", "", "School");
          // Check connection
          if ($connect === false) {
            die("Connection failed: ");
          }
          
          
          
          if (isset($_POST['addstudent'])) {

    // Hold information typed from user input

    $f_name = $_POST['f_name'];
    $s_email = $_POST['c_email'];
    $message = $_POST['c_message'];
  


    // Insert Information into database *(It needs request Teachers ID and Parents ID )*
    $sql = "INSERT INTO contact('FirstName', 'Email', 'Message') VALUES ('$f_name','$s_email','$message')";
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

</div>

</body>
<br>

<style>
footer {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
  position: absolute;
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


