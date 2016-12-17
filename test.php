<!-- TEST PAGE USING BOOTSTRAP -->
<!DOCTYPE html>
<html>
<head>
	<title> Bootstrap Test </title>
	<link rel='stylesheet' href='css/bootstrap.min.css'>
</head>
<body>
	<section class='centainer-fluid'>
		<section style='text-align:center;' class='jumbotron'>
			<h1> Bootstrap Example </h1>
			<?php
				//!important ---- require the config file and the Pagination class
				require "config.php";
				include "Pagination.class.php";
				//initialize PDO connection and save object to $db
				$db=new PDO(dsn,user,pass);
				//pass the pdo object,the number of listings per page, and the table name to the class. 
				$paginate = new Pagination($db,3,"customers");
				//call the paginate methods
				$test =$paginate->paginate();
				//print out the returned result
				echo $test;
			?>

		</section>
	</section>
</body>
</html>

	

