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
		<a href="#modifyProblem">Modify Problem</a>
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
		

	<div class="log_call_container">
		<a class="anchor" id="modifyProblem"></a>
		<h2 style="text-align: center;">Modify Problem</h2>

		<style type="text/css">
                #modifyDiv{
                  display: none;
                }
        </style> 

		<div id="callDiv">
            <input type="button" value="Modify Problem" onclick="showDiv()"><br>
        </div>

		<div id="modifyDiv">
				<form action="modify_problem.php" method="post">
		<!--        If the specialist needs to modify an existing problem (caller specifies their problem ID) then that
					corresponding problem data fills the input things and the operator can change them and resubmit it to
					the DB-->
					
					<h2>Modify Problem: </h2><br>
					Problem Num: <input type="text" name="num"><br>
					Description: <input type="text" name="caller"><br>
					Problem Type: <select name="problemType">
					<option value="">Select...</option>
					<optgroup label="Hardware">
						<option value="printer">Printer</option>
						<option value="printerJam">&nbsp;--Jammed</option>
						<option value="printerRefill">&nbsp;--Needs more paper / ink</option>
						<option value="phone">Phone</option>
					</optgroup>
					<optgroup label="Software">
						<option value="renewal">Need renewal</option>
						<option value="update">Update</option>
					</optgroup>
					<optgroup label="Network">
						<option value="wifi">Wifi Down</option>
					</optgroup>
					</select><br>
					Hardware Serial: <input type="text" name="serial"><br>
					OS: <input type="text" name="OS"><br>
					Software: <input type="text" name="software"><br>
					Specialist: <select name="specialist">
					<option value="">Select...</option>
					<option value="bert">Bert</option>
					<option value="clara">Clara</option>
					</select><br>
					Existing Notes: <textarea name="notes" rows="5" cols="30" readonly></textarea><br><br><br><br><br><br>
                    Add Notes: <textarea name="notes" rows="5" cols="30"></textarea><br><br><br><br><br><br>
					<input type="checkbox" name="solved" value="solved">Solved?  <br>
					<input type="button" value="Close" onclick="hideDiv()"> 
					<input type="submit"><br>
				</form>
			</div>
		</div>

		<script>
                function showDiv() {
					var Modify = document.getElementById("modifyDiv");
                    Modify.style.display = "block";
				}
				function hideDiv() {
					var Modify = document.getElementById("modifyDiv");
                    Modify.style.display = "none";
				}
        </script>

    <div class="container">
			
			<a class="anchor" id="solved_problems"></a>
			<h2>Solved Problems</h2>
            <span class="white">Search: </span><input type="text" name="search">  
			<span class="white">Created: </span><select><option>before</option><option>after</option></select><input type="date">
			<input type="button" value="Search">
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