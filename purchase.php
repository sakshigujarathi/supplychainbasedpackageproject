<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<title>Header</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;1,500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

	<div id="nav"><h1><a href="home.php">Supply Chain Based Package</a></h1>
	<ul>
		<li><a href="home.php">Home</a></li>
		<li><a href="product.php">Product</a></li>
		<li><a href="collector.php">Collector</a></li>
		<li id="hello"><a href="purchase.php">Purchase</a></li>
		<li><a href="submit_process.php">Submit_Process</a></li>
		<li><a href="user.php">User</a></li>
	</ul>
	<table align="left" border="10px" style="width: 600px; line-height: 40px; font-family:'Dancing Script', cursive; color: white; font-style: normal; font-size : 20px; background-color: #40404c7a; width: 100%;
	height: 100px; text-align: center; vertical-align: middle;">

				<tr style="font-variant: small-caps;font-style: normal;color: red; font-size: 30px;">
			<th>U_ID</th>
			<th>P_ID</th>
			<th>U_P_RECEIVED</th>
			<th>L_P_S</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "company");
		if ($conn-> connect_error){
			die("connection failed:". $conn-> connect_error);
		}
		
		$sql = "SELECT u_id, p_id, u_p_received, l_p_s from purchase";
		$result =$conn-> query($sql);
		
		if($result-> num_rows >0){
			while ($row = $result-> fetch_assoc()){
			echo "<tr><td>". $row["u_id"] ."</td><td>". $row["p_id"] ."</td><td>". $row["u_p_received"] ."</td><td>". $row["l_p_s"] ."</td></tr>";
						
			}
			echo "</table>";
		}
		else {
			echo" 0 result";
		}
		
		$conn-> close();

		?>
	</table>
	</div>
	<div id="hello1">
		</div>
	<div id="hello2">
		</div>
</body>
</html>