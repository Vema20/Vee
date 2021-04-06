<!DOCTYPE html>
<html>
<head>
	<title>Add Products</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<?php include('nav.php')?>
		
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-4">
				<img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="img-fluid">
			</div>
			<div class="col-6">
			<form method="POST" action="">
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Product Name</label>
			    <input type="text" class="form-control" name="product_name" id="exampleInputEmail1" aria-describedby="emailHelp">
			    
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Product Desc</label>
			    <input type="text" class="form-control" name="product_desc" id="exampleInputEmail1" aria-describedby="emailHelp">
			    
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Product Cost</label>
			    <input type="number" class="form-control" name="product_cost" id="exampleInputEmail1" aria-describedby="emailHelp">
			    
			  </div>

			  <button type="submit" name="save" class="btn btn-primary">Save</button>

			</form>

			<?php

			  require('dbConnect.php');
			  
			if (isset($_POST['save'])) {

				$productName = $_POST['product_name'];
				$productDesc = $_POST['product_desc'];
				$productCost = $_POST['product_cost'];
				
				//echo "$productName,$productDesc,$productCost";
				$sql = "INSERT INTO product(name,description,cost)VALUES(?,?,?)";
			//prepare query
			if ($stmt = mysqli_prepare($conn,$sql)) {
				//echo "Successful query";
				# code...
				mysqli_stmt_bind_param($stmt,"ssd",$param_name,$param_desc,$param_cost);
				//binding

				$param_name = $productName;
				$param_desc = $productDesc;
				$param_cost = $productCost;

				
				//execute stmt
				if (mysqli_stmt_execute($stmt)) {
					echo "<h4 style='color:green'>Saved product successfully</h4>";
					# code...
				}else{
					echo "<h4 style='color:red'>Oops! Something went wrong</h4>";
				}
			}
			else{
				echo "There's a problem with the query";
			}

				# code...
			}

			

			?>


			
		</div>


		
			  
			  
			
		</div>
		
	</div>
	

</body>
</html>