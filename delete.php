<?php
$Dep id=$_GET['Dep id'];
$db->users->remove(array('_id" => new MongoId($id)));
	header("Location:index.php");
?>