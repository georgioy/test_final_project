
<?php

require_once('../../DAL/DAL.class.php');

 class Admin_doctors
 {
	function getAllActiveDoctors()
	{
		$sql="select * from doctors join users on doctors.user_id=users.user_id WHERE users.status=1 order by doctor_id desc";
		$db= new DAL();
		
		$rows= $db->getData($sql);
		
		return $rows;	
	}
	function getAllInactiveDoctors()
	{
		$sql="select * from doctors join users on doctors.user_id=users.user_id WHERE users.status=0 order by doctor_id desc";
		$db= new DAL();
		
		$rows= $db->getData($sql);
		
		return $rows;	
	}
	function getDoctors($val)//search users
	{
		$sql="select * from doctors ";
		if($val!=""){
			$where="where first_name like'$val%'";
			$sql.=$where;
		}
		$db= new DAL();
		
		$rows= $db->getData($sql);
		
		return $rows;		
	}
	function getDoctorByID($id)
	{
		$sql="select * from doctors where doctor_id=$id";		
		$db= new DAL();
		
		$rows= $db->getData($sql);
		
		return $rows;	
		
	}

	function deactivateUser($id)
	{		
		$sql="update users set status='0' where user_id=$id";
		$db= new DAL();
		$rows= $db->getData($sql);
		if(is_null($rows))
		return 1;
			else{
				
				return -1;

			}
		
	}
	function reactivateUser($id)
	{		
		$sql="update users set status='1' where user_id=$id";
		$db= new DAL();
		$rows= $db->getData($sql);
		if(is_null($rows))
		return 1;
			else{
				
				return -1;

			}
		
	}
 }

?>
