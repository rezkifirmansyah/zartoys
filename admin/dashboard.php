<?php
include 'head.php';
?>
<div id="content">

<h1>Kamu login sebagai <?php echo $_SESSION['user']; ?> ! <a href="dashboard.php?logout=1">Logout?</a></h1>

<center>
<table border='1'>
		<tr>
			<th colspan='6'>Daftar Admin</th>
		</tr>
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama Lgkp</th>
			<th>Alamat</th>
			<th>No HP</th>
		</tr>

		<?php
		$i = 1;
		$q = mysql_query("SELECT * FROM admin");
		while($row = mysql_fetch_array($q)){
			echo "<tr>";
				echo "<td>$i</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td>".$row[3]."</td>";
				echo "<td>".$row[4]."</td>";
				echo "<td>".$row[5]."</td>";
			echo "</tr>";
			$i++;
		}

		?>
</table>
</center>
</div>
<?php
include 'foot.php';
?>
