<html>
	<head>Registration Page</head>
	<body>
		<?php 
			session_start();
			require("connection.php");
			require("functions.php");
			if(isset($_POST["submit"])){
				$name=$_POST["nameBox"];
				$mobile=$_POST["mobileBox"];
				if($name=="" && $word==""){
					echo "Please Enter Name and Mobile Number for Registration";
				}
				elseif($name==""){
					echo "Please Enter Name";
				}
				elseif($mobile==""){
					echo "Please Enter Mobile Number";
				}
				else{
					$regsql = "INSERT INTO registration(Name,MobileNo) VALUES(".$name.", ".$mobile.")";
					mysqli_query($conn,$regsql) or die(mysql_error());				
				}
			}
		?>
	<form action="login.php" method="POST">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="textbox" name="nameBox">
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="textbox" name="mobileBox">
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Registration">
			</tr>
		</table>
	</form>
	</body>
</html>
/*** Registration file with name and mobile no ***/
