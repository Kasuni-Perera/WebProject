
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
echo "Connnected successfully";

$conn->close();

?>



 <!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage Design</title>
    <link rel="stylesheet" href="Home.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"> &nbsp ಠ_ಠ  ФИLIИΞ SΓФЯΞ</h2>
            </div>

            <div class="menu">
                <ul>
                        <li><a href="Home.html">HOME</a></li>
                        <li><a href="shoppage.html">SHOP</a></li>
                        <li><a href="pro_1.html">PRODUCTS</a></li>
                        <li><a href="Buy&Sell.html">BUY/SELL</a></li>
                        <li><a href="ContactUs.html">CONTACT</a></li>
                </ul>
            </div>

            <!--<div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>-->

        </div> 
        <div class="content">
            <h1><br><br><br><br><span>𝕎𝕖 𝕊𝕖𝕝𝕝 𝕃𝕚𝕗𝕖𝕤𝕥𝕪𝕝𝕖.</span></h1>
            <p class="par">ᗩᒪᗯᗩƳᔕ ᗪᗴᒪIᐯᗴᖇ ᗰᗝᖇᗴ 丅ᕼᗩᑎ Ƴᗝᑌ ᗴ᙭ᑭᗴᑕ丅ᗴᗪ.</p>

                <!--<button class="cn"><a href="#">JOIN US</a></button>-->

                <div class="form">
				<form class="form1" name="myform" method="POST" action="register.php" onsubmit="validateform()">
                    <h2>Login Here</h2>
                    <input type="email" name="email" id="email" placeholder="Enter Email Here">
                    <input type="password" name="password" id="password" placeholder="Enter Password Here" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="please provide a strong password with alphabet, numeric and symbol" required>
                    <button class="btnn"><a href="#">Login</a></button>
                    </form>
                    <p class="link">
                    <a href="Register.html">Sign up </a></p>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="https://www.facebook.com/wwwlaptop.lk"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="https://www.instagram.com/laptop.lk/"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="https://twitter.com/onlineshopping"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="https://www.ubuy.com.lk/en/brand/google"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
						<a href="https://www.linkedin.com/company/online-stores-inc/"><ion-icon name="logo-linkedin"></ion-icon></a>
						
                    </div>

                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
	 <script>
            function validateform(){  
                
                var email1=document.forms["myform"]["email"].value;
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if(!mailformat.test(email1))
                {
                alert("â€œPlease provide valid email address!");
               return false;
                }
              
                var password1=document.forms["myform"]["password"].value;
                let plength = password1.length;
                if(plength<8){
                alert("You have to provide 8-character password");
                return false;
                }
               
				return true;
            }  
            function validatenumber(){
                
            }
	</script>
</body>
</html>