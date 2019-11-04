<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Specialist Page</title>
    <link href="Users.css" rel="stylesheet">
</head>
<script>

</script>
    
    <body>
		<div class="navbar">
			<a href="#title">Home</a>
			<a href="#active_problems">Active Problems</a>
			<a href="#solved_problems">Solved Problems</a>
			<a id = "logout" href="http://team017.sci-project.lboro.ac.uk/group_project/LoginPage.html">Log Out</a>
		</div>
		
		<div class="header">
			<a class="anchor" id="title"></a>
			<h1>Specialist Page</h1>
		</div>
    
       <div class="container">
			<a class="anchor" id="active_problems"></a>
			<h2>Active Problems</h2>
			<table class="active_problems">
				<thead>
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
				</thead>
				<tbody>
					<?php 
						for($i=0;$i<=10; $i=$i+1){
							echo '<tr>
								<td>'.(1+$i).'</td>
								<td>Example</td>
								<td>01/01/2020</td>
								<td>User1</td>
								<td>User2</td>
								<td><button>See More</button></td>
							</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
		
		<div class="container">
			
			<a class="anchor" id="solved_problems"></a>
			<h2>Solved Problems</h2>
			<table class="active_problems">
				<thead>
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
				</thead>
				<tbody>
					<?php 
						for($i=0;$i<=10; $i=$i+1){
							echo '<tr>
								<td>'.(1+$i).'</td>
								<td>Example</td>
								<td>01/01/2020</td>
								<td>User1</td>
								<td>User2</td>
								<td><button>See More</button></td>
							</tr>';
						}
					?>
				</tbody>
			</table>
			
		</div>
		
    </body>
</html>