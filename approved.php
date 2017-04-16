<!DOCTYPE html>
<html>
<title>Approval</title>
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
<h1><center>Approval</center></h1>
<?php
		$con = mysql_connect("localhost","root","");
		mysql_select_db("pooja",$con);
		$sql = "SELECT * FROM wp1";
		$myData = mysql_query($sql,$con);
		echo "<table>
		<tr>
		<th>Project Title</th>
		<th>Project Abstract</th>
		<th>Group Details</th>
		<th>Approval</th>
		</tr>";
		while ($record = mysql_fetch_array($myData)) {
			echo "<tr>";
			echo"<td>".$record['Project_title']."</td>";
			echo"<td>".$record['Project_abstract']."</td>";
			echo"<td>".$record['Ref1']."<hr>".$record['Ref2']."<hr>".$record['Ref3']."<hr>".$record['Ref4']."<hr></td>";
			echo "<td> <input type='button' name='approve' value='Approve'><hr><input type='button' name='disapprove' value='Disapprove'></td>";
			echo "</tr>";	
		}
		echo "</table>";
		mysql_close($con)
	?>

</body>
</html>


