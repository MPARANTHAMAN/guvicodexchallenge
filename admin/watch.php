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
if(isset($_GET['id']))
{
$id = $_GET['id'];
$q = "select name from videoup where id=$id';
$query =mysqli_query($con,$q);
while($row = mysqli_fetch_assoc($query))
{
$name = $row['name'];
}
echo"you are watching ".$name."<br">;
echo"video width='400' controls><source src='videos/".$name."' type='video/webm'></video>";
}
else
{
echo"error!";
}
?>
</body>
</html>