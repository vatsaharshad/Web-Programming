<!DOCTYPE html>

<html>

<title>List</title>

<head>
<style>
table{ 	
	font-family:arial,sans-serif;
	border-collapse:collapse;
	width:100%;
     }
td,th{
	border:1px solid;
	text-align:center;
	padding:8px;
     }	
tr:nth-child(even){
			background-color:green;
		  }
</style>
</head>

<body>
<hr>

<img src="dbit.png" alt="none" width="1350">
<h1><center><i> Department Of Information Technology </i></center></h1>
<style>
a{color:white;}
</style>
<hr>
<br>
<div style="background-color:black; color:black; height:75px; width:1350px; ">
<nav>
<center>
<a href="addproject1.html">Add Project</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="list.php">List</a>

&nbsp;&nbsp;&nbsp;&nbsp;
<a href="approved.php">Approval</a>&nbsp;&nbsp;&nbsp;&nbsp;

</nav>
</div>
</center>
<br>
<hr>
<h1><center>LIST</cente></h1>

<center>
<?php
		$con = mysql_connect("localhost","root","");
		mysql_select_db("pooja",$con);
		$sql = "SELECT * FROM wp1";
		$myData = mysql_query($sql,$con);
		echo "<table>
		<tr>
		<th>Project Title</th>
		<th>Project Abstract</th>
		<th>Project Guide</th>
		<th>Reserve</th>
		</tr>";
		while ($record = mysql_fetch_array($myData)) {
			echo "<tr>";
			echo"<td>".$record['Project_title']."</td>";
			echo"<td>".$record['Project_abstract']."</td>";
			echo"<td>".$record['Project_Guide']."</td>";
			echo "<td> <input type='button' name='reserve' value='Reserve'></td>";
			echo "</tr>";	
		}
		echo "</table>";
		mysql_close($con)
	?>
</center>
</body>

</html>

