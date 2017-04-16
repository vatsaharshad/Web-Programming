<?php
	$Project_title = $_POST['Ptitle'];
	$Project_abstract = $_POST['Pabs'];
	$ref1 = $_POST['Name1'];
	$ref2 = $_POST['Name2'];
	$ref3 = $_POST['Name3'];
	$ref4 = $_POST['Name4'];
	$Project_guide = $_POST['guide'];

    mysql_connect("localhost","root","");
    mysql_select_db("pooja") ;
    $select = "insert into wp1(Project_title, Project_abstract, Ref1, Ref2, Ref3, Ref4, Project_Guide) values (' ".$Project_title." ',' ".$Project_abstract." ',' ".$ref1." ', ' ".$ref2." ', ' ".$ref3." ', ' ".$ref4." ', ' ".$Project_guide." ')";
    
    $sql=mysql_query($select);
    print '<script type="text/javascript">';
    print 'alert("The data is inserted")';
    print '</script>';
    header('Location: /wp/list.php');  
    mysql_close();
?>	

