<?php
$con = mysqli_connect("localhost","root","","multi_logic");
?>
<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1//DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http_equiv="content_type" content="text/html; charset=iso-8859-1"/>
<title> video </title>
</head>
<body>
<?php
$q="select*from videoup";
$query =mysqli_query($con,$q);
 while($row=mysqli_fetch_assoc($query))
 {
 $id = $row['id'];
 $name = $row['name'];
 echo"<a href='watch.php?id=$id'>$name</a><br>';
 }
 ?>
 </body>
 </html>