
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
	$query="Select name,vnum,time,start from `rider` where time>=$t order by time;";
	$result=mysqli_query($conn,$query);
	if($result){
		echo"<table id='table_test' cellspacing='0'>";
		echo"<tr><th>Name</th><th>Veh_num</th><th>Time</th><th>Source</th></tr>";
	while($details=mysqli_fetch_array($result,MYSQLI_NUM)){
		echo"<tr>";
		echo "<td>".$details['0']." </td><td>".$details['1']." </td><td>".$details['2']." </td><td>".$details['3']." </td>";
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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
 
  $("#table_test").find("tr").each(function() {
    $(this).click(function() {
		var newResult=$(this).text();
		const output=newResult.split(" ");
		
		document.getElementById("name").innerHTML =  '<strong>'+"Name: "+'</strong>'+output[0];
		document.getElementById("vnum").innerHTML = '<strong>'+"Vehicle Number: "+'</strong>'+output[1];
		document.getElementById("time").innerHTML = '<strong>'+"Time to Reach: "+'</strong>'+output[2];
		document.getElementById("start").innerHTML = '<strong>'+"Strart Location: "+'</strong>'+output[3];
		$("#confirm").attr("disabled",false);
	});
  });
</script>

<style type="text/css">
	body{
		margin:0;
		padding:0;
		width:100%;
		font-family: sans-serif;
	}	
	#table_test{
		margin:0 auto;
		border-radius: 20px;
		width:40% !important;
	}

	th,tr,td{
		padding:30px;
		cursor: pointer;
		margin:5px;


	}
	th{
		border-bottom: 2px solid black;
		background: #424242;
		color:white;
	}
	tr:nth-child(even) {background: #cecece}
tr:nth-child(odd) {background: #eaeaea}
tr :hover {
background: #4b6faa;
}

</style>

</head> 
<body>
	<p id="name"></p>
<p id="vnum"></p>
<p id="time"></p>
<p id="start"></p>
<h6>Remember your mates vehicle number</h6>
<a href="confirm.html"><button id="confirm" type="confirm" value="confirm" action="" disabled>Confirm</button></a>
</body>
</html>