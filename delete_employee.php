<?php 
require_once('../classes/connection.class.php');
require_once('../classes/employee.class.php');
$id=isset($_GET['id'])?$_GET['id']:'';
$obj=new Employee();
$obj->setEmployee_id($id);
$delete=$obj->deleteEmployee();

if($delete==true)
{
echo"your record is successfully deleted";
header('location:view_employee.php');
	
}
else
{
echo"record couldnt be deleted";	
}
?>