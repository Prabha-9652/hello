<?php
$conn=mysqli_connect("localhost","root","","travelmate");
echo"<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>";
if(!$conn)
	echo"data base problem".msqli_connect_error();
if(isset($_POST['t'])){
	$t=$_POST['t'];
	// echo"submit(t)";
}
else{
	echo"Not Submit(t)";
}
if(empty($t)){
	echo"Enter time";	
}
else{
	$query="Select name,vnum,time,email from `rider` where time>=$t";
	$result=mysqli_query($conn,$query);
	if($result){
		echo"<table id='table_test' border='1'>";
		echo"<tr><th>Name</th><th>Veh_num</th><th>Time</th><th>Email</th></tr>";
	while($details=mysqli_fetch_array($result,MYSQLI_NUM)){
		echo"<tr>";
		echo "<td>".$details['0']."</td><td>".$details['1']."</td><td>".$details['2']."</td><td>  ".$details['3']."</td>";
		echo"</tr>";
		echo"<br>";
		 
	}
	echo"</table>";	
	
	mysqli_close($conn);
	}
	else{
		echo"Something went wrong";
	}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
   $(function() {
  $("#table_test").find("tr").each(function() {
    $(this).click(function() {
    var a,b,c,d;
    a=$(this).text();
    b=$(this)[1].text();
    c=$(this)[2].text();
    d=$(this)[3].text();	
	  document.getElementById("demo").innerHTML =
	  "Name"+ a+"Phone number: "+ b+"Vehicle number: "+ c+"time: "+d;
		}
	});
  });
</script>
</head> 
<body>
	<h4><p id="demo1"></p></h4>
<h3><p id="demo"></p></h3>
</body>
</html>