<?php
class Employee extends Connection
{
private $employee_id;
private $full_name;
private $username;
private $email;
private $password;
private $address;
private $phone_number;
private $citizenship_number;
private $status;




		public function setEmployee_id($id)
		{
			$this->employee_id=$id;
		
		}
		
		public function setFull_name($full_name)
		{
			$this->full_name=$full_name;
		
		}
		
		public function setUsername($username)
		{
			$this->username=$username;
		
		}	

		public function setEmail($email)
		{
			$this->email=$email;
		
		}
		public function setPassword($password)
		{
			$this->password=$password;
		
		}
		public function setAddress($address)
		{
			$this->address=$address;
		
		}
		public function setPhone_number($phone_number)
		{
			$this->phone_number=$phone_number;
		
		}
		public function setCitizenship_number($citizenship_number)
		{
			$this->citizenship_number=$citizenship_number;
		
		}
		public function setStatus($status)
		{
			$this->status=$status;
		
		}
 public function addEmployee()
		{
			$this->sql="INSERT INTO employee(full_name,username,email,password,address,phone_number,citizenship_number) VALUES('$this->full_name','$this->username','$this->email','$this->password','$this->address','$this->phone_number','$this->citizenship_number')";
			//echo $sql;
			//die();
			$res=mysqli_query($this->connection,$this->sql) or die(mysqli_error($this->connection));
			$this->affectedRows=mysqli_affected_rows($this->connection);//integer
			if($this->affectedRows>0)
			{
				
				return true;	
			}
			else
			{
				return false;
			}
		
		}
	public function viewEmployees()
	{
		
		$this->sql="select * from employee";
		$this->res=mysqli_query($this->connection,$this->sql)or die(mysqli_error($this->connection));
		$this->numRows=mysqli_num_rows($this->res);
		if($this->numRows>0)
		{
			while($row=mysqli_fetch_assoc($this->res))
			{
			array_push($this->data,$row);
			}
		}	
		
	return $this->data;

	}
	
	public function deleteEmployee()
	{
		$this->sql="delete from employee where employee_id='$this->employee_id'";
		$this->res=mysqli_query($this->connection,$this->sql) or die(mysqli_error($this->connection));
		$this->affectedRows=mysqli_affected_rows($this->connection);
		if($this->affectedRows>0)
		{
			return true;			
		}
		else
		{
			return false;
		}
			
	}
	
	public function updateEmployee()
	{
				$this->sql="UPDATE employee SET  full_name='$this->full_name',username='$this->username',email='$this->email',password='$this->password',address='$this->address',phone_number='$this->phone_number',citizenship_number='$this->citizenship_number',status='$this->status' where employee_id='$this->employee_id'";
				//echo $ordernumber;
				//echo $productcode;
				//die();
				//echo $this->categoryNumber;
				//echo $this->sql;
				$this->res=mysqli_query($this->connection,$this->sql) or die(mysqli_error($this->connection));
				$this->affectedRows=mysqli_affected_rows($this->connection);//integer
				if($this->affectedRows>0)
				{
					return true;				
				}
				
				else
				{
					return false;				
				}	
	}
	
}
?>