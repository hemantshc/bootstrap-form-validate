<?php //For Data table
include ("dbConnection.php");
$data=array();
$result = array();
$sql = "SELECT * FROM student ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = array(
                        'id'=>$row['Id'],
        				'name'=>$row['name'],
        				'email'=>$row['email'],
        				'pswd'=>$row['pswd'],
        				'mobile'=>$row['mobile'],
        				'dob'=>$row['dob'],
        				'gender'=>$row['gender'],
        				'state'=>$row['state'],
        				'games'=>$row['games'],
        				'address'=>$row['address'],


        			);
    }
	$result = array("code"=>101,"message"=>"success","data"=>$data);
} 
else {
    $result = array("code"=>102,"message"=>"Data not found","data"=>$data);
}
echo json_encode($result);
?>