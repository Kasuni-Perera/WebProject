<html>
<html>
<head>
<meta charset='utf-8'>
<style>
h1{
	color:#FF7F50;
	margin-top:20px;
	margin-left:550px;
	 font-family:cursive;
	 font-size:50px;
}
td{
	color:#DFFF00;
	font-size:30px;
}
table,td{
	margin-left:550px;
	margin-top:100px;
}
background{
	optacity:0.7;
}
input[type="submit"]{
	color:green;
	background color:green;
}
img{

width:200px;}

</style>


</head>
<body style="background:url(new.jpg);">
<img src="wwe.gif"></img>
<h1><b>Enter Your Details</h1>
<table>
<form action="assign4.php" method='post'>
<tr>
<td>First Name:</td>
<td><label for='fname'>
<input type="text" name='fname' id='fname' required></label></td>
</tr>
<tr>
<td><label for='lname'>Last Name:</label></td>
<td><input type="text" name='lname' id='lname' required></td>
</tr>
<tr>
<td><label for='age'>Age:</label></td>
<td><input type="text" name='age' id='age'></td>
</tr>
<tr>
<td><label for='mnum'>Mobile Number:</label></td>
<td><input type="text" name='mnum' id='mnum'></td>
</tr>
<tr>
<td><label for='email'>Email:</label></td>
<td><input type="text" name='email' id='email'></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio" name="sex" value="Male" id="male">
<label for="male">Male</label>
<input type="radio" name="sex" value="Female" id="female">
<label for="female">Female</label></td>
</tr>
<tr><td><input type="submit" naeme='submit' id='submit'value="Submit"></td>
<td><input type="reset" value="Clear"></td></tr>




</html>