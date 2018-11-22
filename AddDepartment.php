<?php 
	require 'connection.php';
	if(isset($_POST["btnSub"]))
	{	
		
		$dname=$_POST["deptname"];
		$dDesc=$_POST["description"];			
		$insert="insert into tbl_department(DeptName,Description) values('$dname','$dDesc')";
		$result1=$con->query($insert);
		if($result1==true)
		{
			header('location:DepartmentList.php');
		}
		else
		{
			echo "Not Inserted";
		}
	}
?>
