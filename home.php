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




    form, h2 {
      width: 300px;
      margin: 0 auto;
      color: white;
    }

    

    label,
    input,
    textarea {
      display: block;
      margin-bottom: 10px;
      color: white;
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
  <br><br>
  
  <div class="text-center">
    
  <img src="Primary-LogoB.png" class="rounded" alt="Rishton Academy">
  

  </div>




<div class="container-fluid mt-3">

  <h3> Welcome </h3>

  <p>Welcome to Rishton Academy Primary School, where we provide a warm and nurturing environment for our students to learn and grow. Our school is dedicated to creating a positive and inclusive community that values diversity, excellence, and collaboration. With a team of experienced and passionate educators, we strive to inspire our students to become lifelong learners who are confident, creative, and compassionate. At Rishton Academy Primary School, we believe that every child has unique talents and abilities, and we are committed to helping them reach their full potential. We invite you to explore our website and learn more about our curriculum, facilities, and programs. Thank you for considering Rishton Academy Primary School as your partner in your child's education.</p>

  <h2>Login</h2>
  <form methof="post" action="home.php">
        <label> Username </label>
        <input type="text" name="user">
        <label> Password </label>
        <input type="text" name="pass">

        <button type="submit" name="Submit">Submit</button>


    </form>

    <?php
        
        
        $user = "damota";
        $password = "pass1337";

            
                $x = $_POST['user'];
                $z = $_POST['pass'];
                
                if(!empty($x)){
                if ($x === $user && $z === $password)
                
                {
                        echo "Successfull";
                        header("Location: student.php");
                        exit();
                }
                
                else
                {
                        echo "Wrong Username or Password";
                }
            }
          

    ?>

</div>

</body>

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


