 <?php  
 $connect = mysqli_connect("localhost", "root", "", "student_info");  
 $query = "SELECT games, count(*) as number FROM student GROUP BY games";  
 $result = mysqli_query($connect, $query);  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>bootstrap practice</title>
	<meta charset="utf-8">
	
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	body{
		background-color: gray;
		text-align: center;
		padding-top: 10px;
		padding-left: 10px;
		text-orientation: left;

	}
	body h1{
		background-color: white;

	}
</style>
<title> Make Simple Pie Chart by Google Chart API with PHP Mysql</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Games', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["games"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                          title: 'Percentage of games played by students',
                      is3D:true,  
                      //pieHole: 0.4

                     }; 

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  

</head>
<body>
	<div class="container">
		<h1>Home</h1>
		<p>we are providing online plateform for the shopkeepers, who want to sell their goods online in their areas.</p>
		
	</div>
	<br /><br />  
           <div style="width:900px;">  
                <h3 id="h3" align="center" style="background-color: white;">Make Simple Pie Chart by Google Chart API with PHP Mysql</h3>  
                <br />  
                <div align="center" id="piechart" style="width: 900px; height: 500px;"></div>  
           </div> 

</body>
</html>