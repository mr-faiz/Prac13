<?php 
	require 'connection.php';
	function role()
	{ 
		$output='';
		$c=mysqli_connect("localhost", "root", "", "db_hospital");
		$dFet="select * from tbl_role order by RoleName";
		$res=$c->query($dFet);
		if($res==true)
		{
			while($row=$res->fetch_assoc())
			{
				$output .= '<option value="'.$row["RoleId"].'">'.$row["RoleName"].'</option>';
			}
		}
		echo $output;
	}
?>
