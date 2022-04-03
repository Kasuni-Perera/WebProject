<html>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
$conn=mysqli_connect("localhost","root",'',"web") or die("Connection failed".mysqli_connect_error());
if(isset($_POST["fname"]) &&isset($_POST["lname"])&&isset($_POST["age"])&&isset($_POST["mnum"]) &&isset($_POST["email"])&&isset($_POST["sex"])){
$fname=$_POST["fname"];
$lname=$_POST["lname"];

$age=$_POST['age'];

$mnum=$_POST['mnum'];

$email=$_POST['email'];

$sex=$_POST['sex'];
$sql="INSERT INTO'pro'('fname','lname','age','mnum','email','sex') VALUES('$fname','$lname','$age','$mnum','$email','$sex')";
//$query=mysqli_query($conn,$sql);
if($conn->connect-error){
//echo 'Entry Succesful';
die("Connection failed:".$conn->connect_error);
}
else{
echo "connect succsful";
}

}

}
?>
</body>



</html>