
</form>
<?php
require_once('../classes/connection.class.php');
require_once('../classes/employee.class.php');

$obj=new Employee();
$view=$obj->viewEmployees();
?>

<body bgcolor="#666666" >
<h2 style="color:#00CC99; text-align:center;"><a href="add_employee.php">Add Employee<a></h2>
<form name="form1" method="post" action="">
  <table width="80%" border="1" bgcolor="#CCCCCC" align="center">
    <tr>
      <th width="12%" scope="col">Employee ID</th>
      <th width="12%" scope="col">Full Name</th>
      <th width="7%" scope="col">mero Email</th>
      <th width="9%" scope="col">UserName</th>
      <th width="9%" scope="col">Password</th>
      <th width="14%" scope="col">Phone Number</th>
      <th width="19%" scope="col">Citizenship Number</th>
      <th width="6%" scope="col">Status</th>
      <th width="4%" scope="col">Edit</th>
      <th width="8%" scope="col">Delete</th>
    </tr>
    <?php
    if(sizeof($view>0))
    {
    	foreach($view as $key=>$value)
        {?>
    <tr>
      <td>&nbsp;<?php echo $value['employee_id']; ?></td>
      <td>&nbsp;<?php echo $value['full_name']; ?></td>
      <td>&nbsp;<?php echo $value['email']; ?></td>
      <td>&nbsp;<?php echo $value['username']; ?></td>
      <td>&nbsp;<?php echo $value['password']; ?></td>
      <td>&nbsp;<?php echo $value['phone_number']; ?></td>
      <td>&nbsp;<?php echo $value['citizenship_number']; ?></td>
      <td>&nbsp;<?php echo $value['status']; ?></td>
      <td>&nbsp;<a href="edit_employee.php?id=<?php echo $value['employee_id']; ?>" > edit</a>
      <td>&nbsp;<a href="delete_employee.php?id=<?php echo $value['employee_id']; ?>" onclick="return confirm('Do you want to delete>')"> delete</a>
    </tr>
    	<?php }
    }
    else
    {
    ?>
    <tr>
      <td colspan="5">No Records Found</td>
    </tr>
    <?php 
	}
	?>
  </table>
</body><tr class="info">
    <td><?php echo $value['items_name'];?></td>
    <td><?php echo $value['price'];?></td>
    <td><?php echo $value['quantity'];?></td>
    <td><?php echo $value['total_price'];?></td>