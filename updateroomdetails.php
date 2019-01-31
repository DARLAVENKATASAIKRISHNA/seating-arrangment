<?php
if(isset($_POST['update']))
$Dep name =$_POST['Room no'];
$Dep id   =$_POST['No of desks'];
$Dep Descrption =$_POST['No of benchs'];
if(empty($ Room no)||empty($No of desks)||empty($No of benchs)){
	if(empty($No of desks)){
		echo "<font color='orange'>Room no Filed is empty</font></br>";
	}
		if(empty($No of benchs)){
			echo"<font color='orange'>
			Dep Descrption is empty</font><br/>";
		}
    }else{
    	$result = mysqli__query($mysqli,"UPDATE users SET Room no='$Room no',No of desks='$No of benchs,WHERE Roomno=$Roomno");
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
                <td><input type="text" name="Room no" value="<?php echo $Room no;?>"></td>
            </tr>
            <tr> 
                <td>Dep id</td>
                <td><input type="text" name="No of desks" value="<?php echo $No of desks id;?>"></td>
            </tr>
            <tr> 
                <td>Dep</td>
                <td><input type="text" name="No of benchs" value="<?php echo $No of  benchs;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="Room no" value=<?php echo $_GET['Room no'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>



