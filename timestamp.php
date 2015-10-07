<?php
$timestamp = date("Y-m-d:h:i:sa");
echo "The time is " . $timestamp;
?>

<form method="post" action="upload-pics.php" enctype="multipart/form-data">

<label>Choose File to Upload:</label><br />

<input type="hidden" name="id" />

<input type="file" name="uploadimage" /><br />

<input type="submit" value="upload" />

</form> 
