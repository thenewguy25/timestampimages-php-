<?php


$con=mysqli_connect("localhost","root","","time"); //Change it if required

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM image_table " );


while($row = mysqli_fetch_array($result))
{
echo '<img src="' . $row['image'] . '" width="200" /><br>';
echo $row['time'];
echo'<br /><br />';  
}


mysqli_close($con);

?>