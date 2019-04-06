<?php  //For registration Table
include ("dbConnection.php");


$data1 =$_POST['data1'];	

//print_r($data1);
	
	$sql ="INSERT INTO student (name,email,pswd,mobile,dob,gender,state, games,address) VALUES ('".$data1['name']."','".$data1['email']."','".$data1['pswd']."','".$data1['mobile']."','".$data1['dob']."','".$data1['gender']."','".$data1['state']."','".$data1['games']."', '".$data1['address']."');";


	$result = mysqli_query($con, $sql);
	if($result){
		echo 1;
	}
	else{
		echo 2;
	}

?>