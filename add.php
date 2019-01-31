<html>
<head>
	<title>Add Data</title>
</head>
<body>
<a href="deptdetails.php">deptdetails</a>
	<form action="add.php" method="POST" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Dep name</td>
				<td><input type="text" name="dname"/></td>
			</tr>
			<tr>
				<td>Dep id</td>
				<td><input type="text" name="did"/></td>
			</tr>
			<tr>
				<td>Dep Descrption</td>
				<td><input type="text" name="ddesc"/></td>
			</tr>
		</table>
		<input type="submit" value="SUBMIT"/>
	</form>	
<?php

$con=mysqli_connect("localhost", "root", "") or die ('Error:' .mysql_error());
mysqli_select_db("seatarrexam", $con);

	if(isset($_POST['dname']))
	{
		$Depname = $_POST['dname'];
		$Depid  = $_POST['did'];
		$DepDescrption  = $_POST['ddesc']
		if(empty($Depname)){
			echo "<font color='orange'>Name Filed is Empty</font><br/>";
		}
		if(empty($Depid)){
			echo"<font color='orange'>Depid filed is empty</font><br/>";
		}
			if(empty($DepDescrption))
				echo"<font color='orange'>
				DepDescrption is empty</font><br/>";
				echo "<br/><a href='javascrpit.self.histroy.back();'>Go Back </a>";
			}
				else
				{
					$result= mysqli_query($mysqli,"INSERT INTO users(Dep name,Dep id,Dep Descrption)VALUES('$Depname','$Depid','$DepDescrption')");
						echo"<font color='orange'>Data added sucessfully.";
						echo"<br/><a href='depdetails.php'>View result</a>";
					}
				}
				?>
</body>
</html>