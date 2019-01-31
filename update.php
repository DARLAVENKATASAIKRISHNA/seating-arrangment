<?php
if(isset($_POST['update']))
$Dep name =$_POST['Dep name'];
$Dep id   =$_POST['Dep id'];
$Dep Descrption =$_POST['Dep Descrption'];
if(empty($Dep name)||empty($Dep id)||empty($Dep Descrption)){
	if(empty($Dep name)){
		echo "<font color='orange'>Dep nameFiled is empty</font></br>";
	}
	
		if(empty($Dep Descrption)){
			echo"<font color='orange'>
			Dep Descrption is empty</font><br/>";
		}
    }else{
    	$result = mysqli__query($mysqli,"UPDATE users SET Dep name='$Dep name',Dep Descrption='$Dep Descrption,WHERE id=$id");
    	header("Location:despt.php");
    }

}
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="depst.html">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="depst.php">
        <table border="0">
            <tr> 
                <td>Dep Name</td>
                <td><input type="text" name="Dep name" value="<?php echo $Dep name;?>"></td>
            </tr>
            <tr> 
                <td>Dep id</td>
                <td><input type="text" name="Dep id" value="<?php echo $Dep id;?>"></td>
            </tr>
            <tr> 
                <td>Dep</td>
                <td><input type="text" name="Dep Descrption" value="<?php echo $Dep Descrption;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="Dep id" value=<?php echo $_GET['Dep id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>



