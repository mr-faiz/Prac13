<?php
	require 'connection.php';
	if(isset($_POST["btnSub"]))
	{
		$rt=$_POST["roomtype"];
		$rprice=$_POST["roomprice"];
		$rc=$_POST["roomc"];
		
		$ins="insert into tbl_roomtype(RTName,RTCode,Price) values('$rt','$rc','$rprice')";
		$res=$con->query($ins);
		if($res==true)
		{
			header("location:BedList.php");
		}
		else
		{
			echo "Data Not Inserted";
		}
	}
?>
