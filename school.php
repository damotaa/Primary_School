<?php

$username = "root";
$password = "";
$domain = "localhost";
$database = "School";

// Stablishing connection //

$connect = mysqli_connect($username, $password, $domain, $database);

// Check Connection

    if (!$connect){
        die ("Connection failed:  " . mysqli_connect_error());
    }

    echo "Connected successfully";



// View database // 


				
			
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT sid, Sname,Lname  FROM Student");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['Student_id']}</th>
				<th>{$row['Sname']}</th>
                <th>{$row['Lname']}</th>
			</tr>";
			}
			
            



// Inserting data to the database // 

$sname = $_POST['studentName'];
$lname = $_POST['LName'];

$succe = "Values are successfuly INSERTED (Sname, Lname) Values ('$sname' , '$lname')";

if(mysqli_querry == true);{
    echo $succe;
}

else {
    echo "Error, data not stored correctly!";
}

?>

