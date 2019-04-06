<?php //for update table
include ("dbConnection.php");
 
   $sql ="SELECT gender, count(*) as number FROM student GROUP BY gender";


  $result = mysqli_query($con, $sql);
  while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["gender"]."', ".$row["number"]."],";
                               } 

  ?>
                     