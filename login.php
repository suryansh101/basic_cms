<html>
<head>
<title>Admin Login</title>
</head>
<body>
<form action='login.php method='post'>
	<table width='400' align='center' border='5'>
		<tr>
			<td colspan='5' align='center' bgcolor='blue'>
				<h2>Admin Login</h2></td>
			</tr>

<tr>
<th align='right'> User Name:</th>
<td><input type='text' name='admin_name'></td>


</tr>
<tr>
	<th align='right'> Password</th>
	<td><input type='password' name='admin_pass'></td>

	</tr>
<tr>
<td colspan='6' align='center'><input type='submit'name='submit' value='Login'>
</td>

</tr>

	</table>
</form>
<h2><?php echo @$_GET['logout'];?></h2>
</body>
</html>
<?php
include("includes/db.php");

if(isset($_POST['submit'])){

	$admin_name = $_POST['admin_name'];
	$admin_pass = $_POST['admin_pass'];

	$query = "select * from admin_login where user_name='$admin_name' AND user_pass='$admin_pass'";
	$run = mysql_query($query);

	if(mysql_num_rows($run)==1){

		echo "<script>window.open('admin_panel.php?logged=You are logged in Successfully!','_self')</scrpt>";

	}
	else {
		echo "<script>alert('User name/Password is incorret')</script>";
	}
}








?>