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
	$query="Delete from `rider` where vnum LIKE '$veh'";
	
	$result=mysqli_query($conn,$query);
	
	if($result === true){
		echo "Wait for your buddy";
	}
	else{
		echo "Buddy you chose alredy hired. Kindly choose another one";
	}
	$q="Select * from `rider` where vnum like '$veh'";
	$result1=mysqli_query($conn,$q);
	if($result1-> num_rows > 0){
		echo "result";
		$details=mysqli_fetch_array($result1,MYSQLI_NUM);
		echo $details['0'];
	}
	else {
		echo "select not run ";
	}
	mysqli_close($conn);
}	
?>