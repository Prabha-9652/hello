<!DOCTYPE html>
<html>
<head>
	<title>Confirming Traveller</title>
	<style type="text/css">
		h1{

			  position: fixed;
			  z-index: 6;
			  background: rgba(98, 100, 102,0.5);
			  padding: 5px 30px;
			  border-radius: 10px;
			  left: 50%;
			  bottom: 120px;
			  transform: translate(-50%, -50%);
			  margin: 0 auto;
   			  font-size: 4em;
			  text-align: center;
			  margin-bottom: 0;
			  color: #eeeeee;
			  text-shadow: 4px 4px 5px rgba(0, 0, 0, 1);

		}
	</style>
</head>
<body>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","travelmate");
if(!$conn)
	echo"data base problem".msqli_connect_error();

if(isset($_POST['submit'])){
	$veh=$_POST['vhnum'];
	// echo"submit(t)";
}
else{
	echo"Not Submit";
}
if(empty($veh)){
	echo"Enter vehicle number:";	
}
else{
	$q="Select * from `rider` where vnum like '$veh'";
	$result1=mysqli_query($conn,$q);
	if($result1-> num_rows > 0){
		echo "result";
		$details=mysqli_fetch_array($result1,MYSQLI_NUM);
		echo "<h1>".$details['0']."</h1>";
	}
	else {
		echo "select not run ";
	}
	$query="Delete from `rider` where vnum LIKE '$veh'";
	
	$result=mysqli_query($conn,$query);
	
	if($result === true){
		echo "<h1> <center>Wait for your Mate</center></h1>";
	}
	else{
		echo "<h1>Buddy you chose alredy hired. Kindly choose another one</h1>";
	}
	
	mysqli_close($conn);
}	
?>