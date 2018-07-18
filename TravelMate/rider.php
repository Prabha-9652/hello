<?php
$conn=mysqli_connect("localhost","root","","travelmate");
if(!$conn)
	echo"data base problem".msqli_connect_error();

if(! isset($_POST['submit'])) {
$name=$_POST['fname'];
$phn=$_POST['phn'];
$email=$_POST['email'];
$vnum=$_POST['vnum'];
$start=$_POST['start'];
$ttime=$_POST['mins'];
if(empty($name) || empty($phn) || empty($email)|| empty($vnum)|| empty($start)|| empty($ttime)){
    echo '<script type="text/javascript">alert("Please Enter valid details");</script>';
}
else{
	$query="INSERT INTO `rider` (`Name`, `phn`, `email`, `vnum`, `start`, `time`) VALUES ('$name', '$phn', '$email', '$vnum', '$start', '$ttime')";
if(mysqli_query($conn,$query)){
		
		header("Location: index-new.html");
		
}
else{
	header("Location: riderend.html");
}
}
}
?>

