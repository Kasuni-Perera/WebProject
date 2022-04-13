<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shop Page</title>
    <link rel="stylesheet" href="shoppage_style.css">
</head>
<body style="background-color: black";>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"> &nbsp ಠ_ಠ  ФИLIИΞ SΓФЯΞ</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="Home.php">HOME</a></li>
                    <li><a href="shoppage.php">SHOP</a></li>
                    <li><a href="pro.php">PRODUCTS</a></li>
                    <li><a href="ContactUs.php">CONTACT</a></li>
                    <li><a href="Home.php" >Log out</a></li>

                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>	
			<br>
		</div>
		<br>
		<br>
		<p class="title">SHOP</p>
		<div class="row">
			<br>
			<div class="column">
				<div style="margin-left: 20px;">
					<p class="p1" style="color: aliceblue;">FILTER BY DEPARTMENT</p>

					<br>
					<div class="box">
					<form>
					<br>
					<p class="p1">Product</p>
					<select class="p1" name="Product">
						<option value="computers">Computers</option>
						<option value="speakers">Speakers</option>
						<option value="televisions">TVs</option>
						<option value="Phones">Phones</option>
					</select>
					<br>
					<br>
					<p class="p1">Brand</p>
					<select class="p1" name="Brand">
						<option value="Acer">Acer</option>
						<option value="Asus">Asus</option>
						<option value="MSI">MSI</option>
						<option value="Dell">Dell</option>
					</select>
					<br>
					<br>
					<div style="text-align: center;">
						<input class="btnn" type="submit" value="Search" style="background-color:rgba(156, 224, 255, 0.764);color: black;">
						<input class="btnn" type="reset" value="Reset" style="background-color:rgba(156, 224, 255, 0.764);color: black;">
					</div>
					</form>
					</div>
				</div>>
			</div>
			<br>
			<div class="column" style="text-align: center">
				<div class="box">
					<img src="Product_pages/sources\p1.png">
					<a href="p1.php">ACER A315-56-58RJ COR i5|10GN|4GB|1TB|DOS(1y)</a><br>
					<p class="p1">Availability :Yes</p>
					<p class="subtitle">Rs. 192,500.00</p>
					<form action="p1.php" method="get">
						<button class="btnn" type="submit">Add To Cart</button>
					</form>
				</div>
				<br>
				<div class="box">
					<img src="Product_pages/sources\p2.png">
					<p class="boxtitle">ACER A515-56-53LE CORE i5 11GN|4GB|1TB|W10|SIL(3y)</p>
					<p class="p1">Availability :Yes</p>
					<p class="subtitle">Rs. 180,500.00</p>
					<input class="btnn" type="submit" value="Add To Cart">
				</div>
			</div>
			<div class="column" style="text-align: center">
				<div class="box">
					<img src="Product_pages/sources\p3.png">
					<p class="boxtitle">AMD NOTEBOOK – ACER A315-R4YE 4GB/1TB/W10(3y)</p>
					<p class="p1">Availability :Yes</p>
					<p class="subtitle">Rs. 106,500.00</p>
					<input class="btnn" type="submit" value="Add To Cart">
				</div>
				<br>
				<div class="box">
					<img src="Product_pages/sources\p5.png">
					<p class="boxtitle">ACER ASPIRE 315 N5100,4GB,1TB,15.6 DOS</p>
					<p class="p1">Availability :Yes</p>
					<p class="subtitle">Rs. 99,000.00</p>
					<input class="btnn" type="submit" value="Add To Cart">
				</div>
			</div>
			<div class="column" style="text-align: center">
				<div class="box">
					<img src="Product_pages/sources\p6.png">
					<p class="boxtitle">ASUS CORE i7 X513E 8GB|512SSD|2GV|W10(2y)BLUE</p>
					<p class="p1">Availability :No</p>
					<p class="subtitle">Rs. 255,000.00</p>
					<input class="btnn" type="submit" style="background-color:	green;"value="Pre Order">
				</div>
				<br>
				<div class="box">
					<img src="Product_pages/sources\p7.png">
					<p class="boxtitle">ACER A515-45-R7EU RYZEN 7 5700U|8GB|512GB|W10|SIL(3y)</p>
					<p class="p1">Availability :Yes</p>
					<p class="subtitle">Rs. 225,000.00</p>
					<input class="btnn" type="submit" value="Add To Cart">
				</div>
			</div>
		</div>
	</div>
</body>
