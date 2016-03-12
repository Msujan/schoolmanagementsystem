<?php
function goback()
{
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
}

?>
<body  bgcolor="#666666">

<h2 style="text-align:center; color:#099;">Employee Registration</h2>
<form id="form1" name="form1" method="post" action="../process/process_add_employee.php">
  <table width="40%" border="1" align="center" bgcolor="#CCCCCC">
    <tr>
      <td width="50%" height="58" scope="col"><strong>Full Name:</strong></td>
      <td width="50%" scope="col"><input type="text" name="full_name" id="full_name" /></td>
    </tr>
    <tr>
      <td height="47"><strong>Username:</strong></td>
      <td><input type="text" name="username" id="username" /></td>
    </tr>
    <tr>
      <td height="47"><strong>Email:</strong></td>
      <td><input type="text" name="email" id="email" /></td>
    </tr>
    <tr>
      <td height="54"><strong>Password:</strong></td>
      <td><input type="password" name="password" id="password" /></td>
    </tr>
    <tr>
      <td height="47"><strong>Address:</strong></td>
      <td><input type="text" name="address" id="address" /></td>
    </tr>
    <tr>
      <td height="51"><strong>Phone Number:</strong></td>
      <td><input type="text" name="phone_number" id="phone_number" /></td>
    </tr>
    <tr>
      <td height="45"><strong>Citizenship Number:</strong></td>
      <td><input type="text" name="citizenship_number" id="citizenship_number" /></td>
    </tr>
    <tr>
      <td height="45">Status</td>
      <td><select name="status" size="1" id="status">
        <option value="0">Inactive</option>
      </select></td>
    </tr>
    <tr>
      <td height="59" ><input type="submit" name="Add Employee" id="Add Employee" value="Submit" /></td>
      <td height="59" ><a href="javascript:history.go(-1)";>Back </a></td>

    </tr>
  </table>
</form>
</body>