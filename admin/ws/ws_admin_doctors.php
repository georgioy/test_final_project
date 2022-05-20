<?php

	require_once('../class/admin_doctors.class.php');
	$doctors= new Admin_doctors();
	$op=0;
	if(isset($_GET['op'])){
		$op = $_GET['op'];
	}

	switch ($op) {
		case 0:
			$result=$doctors->getAllActiveDoctors();
			break;	
		
			
		case 1://search for doctors by name
			try{
				 $val="";
				 if(isset($_GET["srh"]))
				 $val=$_GET["srh"];
				 $result=$doctors->getDoctors($val);
				}catch(Exception $ex)
				{
					UTILS::write_log($ex->getMessage());
				}
				break;

		case 2://deactivate doctor (change status to 0)
			try{
				if(isset($_GET['id']))
				$id=$_GET['id'];
				  
				$result=$doctors->deactivateUser($id);
			}catch(Exception $ex)
			{
				UTILS::write_log($ex->getMessage());
			}
			break;
			
		case 3:
				$result=$doctors->getAllInactiveDoctors();
				break;	
			
		case 4://deactivate doctor (change status to 0)
					try{
						if(isset($_GET['id']))
						$id=$_GET['id'];
						  
						$result=$doctors->reactivateUser($id);
					}catch(Exception $ex)
					{
						UTILS::write_log($ex->getMessage());
					}
					break;
		default:
		
			break;
	}	
	header("Content-type:application/json");
	echo json_encode($result);
	

?>

