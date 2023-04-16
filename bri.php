<!DOCTYPE html>
<html>
<body>
<?php
$cities = array("Nairobi","Mombasa","Kisumu","Eldoret","Nakuru",);
$position = array_search("Kisumu",$cities);
if($position !== false)
{
echo"Kisumu is at position $position in the array";
}
else{
echo"Kisumu was not found in the array.";
}
?>
<p>hello</p>
</body>
</html>