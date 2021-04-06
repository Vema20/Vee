<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<?php include ('nav.php')?>

		<div class="row">
			<div class="col-3">
				<h3 style="font-size: 50px; font-family: monospace; color: blue">My Shop</h3>
				
			</div>
		</div>
		
		</div>
		<div class="row">
		
			<div class="col-6">
		
			<?php
	 require_once('dbConnect.php');

	 $sql = "SELECT *FROM  customer";
	 $result = mysqli_query($conn,$sql);
	 if ($result) {
	 	$rows = mysqli_num_rows($result);
	 	if ($rows>0) {
	 		while ($record=mysqli_fetch_assoc($result)) {
	 			//echo $record['name'].'Price Ksh'.$record['cost'];
	 			//echo "<br>";
	 			

	 			# code...
	 		}
	 		# code...
	 	}else{
	 		echo '<div class="alert alert-primary" role="alert">
	  No products available
	</div>';
	echo "<a href='addproducts.php' class='btn btn-primary'>Add Products</a>";
	 	}
	  	# code...
	  }else{
	  	echo "something went wrong".mysqli_error($conn);
	  } 



	?>

			
	</div>


	<div class="col-6">
	
			<img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="img-fluid">
			
		
	</div>
</div>

	
	

</body>
</html>