
<?php 

if(isset($_POST['add']))
{
$dateValue=$_POST['dd'];

$month = date("m",strtotime($dateValue));
$time=strtotime($dateValue);
// $month=date("00",$time);
$year=date("Y",$time);

echo $month;
echo $year;
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>

<form method="post" action="">
	<input type="date" name="dd" >
	<input type="submit" name="add" value="add">

</form>
</body>
</html>