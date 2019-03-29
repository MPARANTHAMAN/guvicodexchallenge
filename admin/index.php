<html>
<head>
<meta charset="ytf-8"/>
<boby>
<a href="video.php">video</a><br/>
<from method="post" enctype="multipart/from-data">
<input type="file" name="file"/>
<input type="submit" name="submit" value="upload"/>
</from>
<?php>
$con=mysql_connect("localhost","root","","multi_login");
if(isset($_POST['submit']))
{
$name=$_FILES['file']['name'];
if(isset($_POST['submit']))
{
$name=$_FILES['file']['name'];
$temp=$_FILES['file']['tmp_name'];
move_uploaded_file($temp,"videos/".$name);
$q ="INSERT INTO 'videoup'('id','name') VALUES('','$name')";
if(mysql_query($con,sq))
{
echo "submitted to database...";
}
echo"<br>".$name." has been uploaded.";
}
?>
</body>
</html>