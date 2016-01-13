<?php
	include("dataconn.php");
	
	$sess_aid=$_SESSION["aid"];
	
	$result = mysql_query("select * from admin where AD_ID = $sess_aid");
	$row = mysql_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="design.css" type="text/css" />
</head>

<body>
	<div class="main">
		<div class="cleft">
			<ul>
				<li><a href="admin_dashboard.php">Dashboard</a></li>
				<li><a href="admin_edit_profile.php">Edit Profile</a> </li>
				<li><a href="admin_add_product.php">Add New Product</a></li>
				<li><a href="admin_view_product.php">View Product</a></li>
			</ul>
		</div>
		
		<div class="cright">
			<h2>Welcome<?php echo $row["AD_NAME"]?></h2>
			
			<p>
				ID : <?php echo $row["AD_ID"]?>
			</p>
			
			<p>
				Name : <?php echo $row["AD_NAME"]?>
			</p>
			
			<p>
				Username : <?php echo $row["AD_USER"]?>
			</p>
			
			<p><input type="submit" name="logoutbtn" value="Logout" onclick="window.location='logout.php';"/></p>
		</div>
	</div>
</body>
</html>