<!DOCTYPE html>
<html>
<head>
	<title>View Products</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
	<?php include('nav.php')?>
	<h4>My Products</h4>
	<div class="col-5">
	<table class="table">
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Cost</th>
		</tr>
	<?php
	 require_once('dbConnect.php');

	 $sql = "SELECT *FROM  product";
	 $result = mysqli_query($conn,$sql);
	 if ($result) {

	 	$rows = mysqli_num_rows($result);
	 	if ($rows>0) {

	 		while ($record = mysqli_fetch_assoc($result)) {
	 			//echo $record['name'].'Price Ksh'.$record['cost'];
	 			//echo "<br>";
	 			echo "<tr>";
	 			echo "<td>".$record['name']."</td>";
	 			echo "<td>".$record['description']."</td>";
	 			echo "<td>".$record['cost']."</td>";

	 			echo "</tr>";

	 			# code...
	 		}
	 		# code...
	 	}else{
	 		echo '<div class="alert alert-primary" role="alert">
	  No products available
	</div>';
	 	}
	  	# code...
	  }else{
	  	echo "something went wrong".mysqli_error($conn);
	  } 



	?>
</table>
</div>

</body>
</html>