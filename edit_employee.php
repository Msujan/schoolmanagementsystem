<?php 
require_once('../classes/connection.class.php');
require_once('../classes/employee.class.php');
$obj=new Employee();
$employee=array();
$id=isset($_GET['id'])?$_GET['id']:'';
$sql="select * from employee where employee_id='$id'";
$res=mysqli_query($obj->connection,$sql);
$numRows=mysqli_num_rows($res);
if($numRows>0)
{
			while($row=mysqli_fetch_assoc($res))
			{
			array_push($employee,$row);
			}
}	
print_r($employee);
foreach($employee as $key=>$employeeValue)
{
?>
<h3>Add Employee</h3>
<form id="form1" name="form1" method="post" action="../process/process_edit_employee.php">
  <table width="40%" border="1">
    <tr>
      <td width="50%" scope="col"><strong>Full Name:</strong></td>
      <td width="50%" scope="col"><input type="text" name="full_name" id="full_name" value="<?php echo $employeeValue['full_name']; ?>"/></td>
    </tr>
    <tr>
      <td><strong>Username:</strong></td>
      <td><input type="text" name="username" id="username" value="<?php echo $employeeValue['username']; ?>"/></td>
    </tr>
    <tr>
      <td><strong>Email:</strong></td>
      <td><input type="text" name="email" id="email" value="<?php echo $employeeValue['email']; ?>"/></td>
    </tr>
    <tr>
      <td><strong>Password:</strong></td>
      <td><input type="text" name="password" id="password" value="<?php echo $employeeValue['password']; ?>" /></td>
    </tr>
    <tr>
      <td><strong>Address:</strong></td>
      <td><input type="text" name="address" id="address" value="<?php echo $employeeValue['address']; ?>" /></td>
    </tr>
    <tr>
      <td><strong>Phone Number:</strong></td>
      <td><input type="text" name="phone_number" id="phone_number"  value="<?php echo $employeeValue['phone_number']; ?>"/></td>
    </tr>
    <tr>
      <td><strong>Status:</strong></td>
      <td><select name="status" id="status">
        <option value="1">Active</option>
        <option value="0">Inactive</option>
      </select></td>
    </tr>
    <tr>
      <td><strong>Citizenship Number:</strong></td>
      <td><input type="text" name="citizenship_number" id="citizenship_number"  value="<?php echo $employeeValue['citizenship_number']; ?>"/></td>
    </tr>
<tr>
 <td ><input type="hidden" name="id" id="id" value="<?php echo $employeeValue['employee_id']; ?>" /></td>    
      <td ><input type="submit" name="Add Employee" id="Add Employee" value="Submit" /></td>
    </tr>
  </table>
</form>
<?php }?>