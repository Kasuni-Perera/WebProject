<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

//Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

//Check connection
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}
//Insert values into the database
mysqli_select_db($conn,"project");
$sql = "INSERT INTO feedback(full_Name,email,subject,message) VALUES('$_POST[full_Name]','$_POST[email]','$_POST[subject]','$_POST[message]')";
if(!mysqli_query($conn,$sql))
{
    die("error".mysqli_error($conn));
}
else
{
	   echo "<div style='margin:20% 30%;'><h4>New record Created successfully</h4></div>";
         header('Refresh:2; URL=home.php');
}
$conn->close();
?>