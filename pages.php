<html>
<head>
<title>basic CMS</title>

</head>
<body>
	<table width='1000' border='2' align='center'>
<!--Header Starts-->
<tr>
	<td><?php include("includes/header.php"); ?></td>
</tr>
<!--Navigation bar Starts-->
<tr>
<td><table border='0'>
	<tr>
		<?php
include("includes/db.php");

$query = "select * from menus";

$run = mysql_query($query);

while($row=mysql_fetch_array($run)){

	$m_title = $row[1];

	echo "<td bgcolor='yellow' width='100' align='center'><a href='pages.php?pages=$m_title'>$m_title</a></td>";
}

		?>
	</tr>
</table>
</td>
</tr>
<!--main content Starts-->
<tr>
<td>
	<table> <border='0' width='800' align='center'>
		<tr>
			<?php
			$page = $_GET['pages'];
			$query = "select * from pages where p_title='$page'";
			$run = mysql_query($query);
			while ($row=mysql_fetch_assoc($run)){
				echo "<td bgcolor='aqua'>" . "<h2>" . $row['p_title']. "</h2>" . "<br>". $row['p_desc'] . "</td>" ;
			}
			?>
		</tr>
	</table>

</td>
</tr>
<!--footer Starts-->
<tr>
<td bgcolor='yellow' height='60' align='center'>
<h2>Created by: srsy.in</h2></td>
</tr>
</table>
</body>
</html>