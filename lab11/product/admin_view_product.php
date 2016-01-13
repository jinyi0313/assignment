<?php
	include("dataconn.php");
	$sess_aid = $_SESSION["aid"];
	$result = mysql_query("select * from product");
?>
<!DOCTYPE html>
<html>
	<head><title>Admin View Product</title>
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
			<table border="1" width="500px">
				<tr>
					<th>ID</th>
					<th>Description</th>
					<th>Price</th>
					<th>Quantity</th>
				</tr>
			<?php
				while($row = mysql_fetch_assoc($result))
				{
				?>
				<tr>
					<td><?php echo $row["PROD_ID"];?></td>
					<td><?php echo $row["PROD_DESC"];?></td>
					<td><?php echo $row["PROD_PRICE"];?></td>
					<td><?php echo $row["PROD_QTY"];?></td>
				</tr>
				
			<?php
				}
			?>
			</table>
		</div>
	</div>
</body>
</html>