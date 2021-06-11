<?php 
		$email=$_POST['emailid'];

	$server="localhost:3306";
	$dbname="web-dev";
	$username="root";
	$password="";

	$sFalg=0;
	$conn=mysqli_connect($server,$username,$password,$dbname);
	if(!$conn) {
		echo 'Server Connection Failure';
		$sFlag=0;
	} else {
		echo 'Server Connection Authorised';
		$sFlag=1;
	}
	echo '<br/>';
	if($sFlag==1) {

		// Step-4a: Create SQL Injection according to the database
		// create an SQL Injection to insert data into the table
		$sql="INSERT INTO email_form (email_id) VALUES('".$emailid."');";

		//echo $sql;

		// Step-4b: Query the Server through injection
		// query the database server
		$a=mysqli_query($conn,$sql);

		if($a) {
			echo "Data Inserted Successfully";
		} else {
			echo $conn->error;
		}

	}

?>
