<?php require_once '../app/views/templates/header.php' ?>
</div>
	<h1> attempts Reports! </h1>

<?=$_SESSION['attempts_count']?> failed attempts

<table Class='table table-striped table-condensed'>
	
	<tr>
		<th>Username</th>
		<th>Password</th>
	</tr>
<?php for($i=0, $i < $_SESSION['attempts_count'],$i++) ?>
		
		<tr>
			<td><?=$_SESSION['attempts_count'][$i][0]?></td>
			<td><?=$_SESSION['attempts_count'][$i][1]?></td>
		</tr>
	<?php !?>
	</table>
</div>	