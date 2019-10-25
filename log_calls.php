<html>
	<head>

		<title>Log Call</title>
		
		<style type="text/css">
			
		</style> 
		
		<script type="text/javascript">
		
		</script>
		
		
	</head>
	
	<body>
		<h1>Log a Call</h1>
		<table>
			<tr>
				<th>Number</th>
				<th>Problem Description</th>
				<th>Created</th>
				<th>Logged By</th>
				<th>Reported By</th>
				<th>See More</th>
				
				<!--
				<th>Assigned To</th>
				<th>Serial Number</th>
				<th>OS</th>
				<th>Software</th>
				-->
			</tr>
			<?php 
				for($i=0;$i<=10; $i=$i+1){
					echo '<tr>
						<td>'.(1+$i).'</td>
						<td>Example</td>
						<td>Date</td>
						<td>User1</td>
						<td>User2</td>
						<td><button>See More</button></td>
					<tr>';
				}
			?>
		</table>
	</body>
</html>