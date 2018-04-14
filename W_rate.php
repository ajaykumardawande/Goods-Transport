<?php
	include('connect1.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name = "viewport" content = "width=device-width, initial-scale = 1">
  	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		#tabledata {
			position: relative;
			top: 75px;
			left: 40px;
			border: 2px solid;
		}
		th {
			color: #cb4335;
			border: 5px solid #dddddd;
			padding: 6px;
		}
		td {
			border: 5px solid #dddddd;
			padding: 6px;
		}
		
		
	</style>
	<script>
		function showorder() {
			var x = document.getElementById("orderdata");
			x.style.visibility = 'visible';
		}
		
	</script>
	
</head>
<body>
	
	<form method = "post">
		<div class = "form-group">
			<button type="button" onclick = "showorder()">Show Order</button>
			<button type = "button" onClick="window.location.href = 'mybill.php'">Generate Bill</button>
		</div>
	</form>
	
		<div id = "orderdata" style = "visibility : hidden">
			<table id = "tabledata">
				<tr>
				<th>Bill Id</th>
				<th>Order Id</th>
				<th>Fast Delivery</th>
				<th>Date</th>
				<th>Options</th>
			</tr>	
			<?php 
				
				while ($row = mysqli_fetch_array($resultm)) {?>
					<tr>
						<td><?php echo $row['billid']; ?></td>
						<td><?php echo $row['orderid']; ?></td>
						<td><?php echo $row['fastdelivery']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td>
							<a href = "rate1.php?delete=<?php echo $row['billid']; ?>"><font color = "red">Delete</font></a>
						</td>
					</tr>
			<?php } ?>
		</table>
	</div>
	
</body>
<html>
