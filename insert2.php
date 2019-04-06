<?php //for update table
include ("dbConnection.php");


$data2 =$_POST['data2'];

 		/*
	$sql ="UPDATE student SET (name,mobile,dob,gender,state, games,address) VALUES ('".$data2['modalname']."','".$data2['modalmobileno']."','".$data2['dob']."','".$data2['gender']."','".$data2['modagender']."','".$data2['modalstate']."','".$data2['modalgames']."','".$data2['modaladdress']."') WHERE id='$id'";
*/
	 $sql =" UPDATE student SET name='".$data2['modalname']."',mobile='".$data2['modalmobileno']."',dob='".$data2['modaldob']."',gender='".$data2['modalgender']."',games='".$data2['modalgames']."',address='".$data2['modaladdress']."' WHERE id =".$data2['id'];
	


	$result = mysqli_query($con, $sql);
	if($result){
		echo 1;
	}
	else{
		echo 2;
	}

?>