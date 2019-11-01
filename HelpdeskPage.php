<!DOCTYPE html>
<html lang="en">
	<head>

		<title>Helpdesk Operator</title>
		
        <link href="Users.css" rel="stylesheet">
		
	</head>
	
	<body>
		<div class="navbar">
			<a href="#title">Home</a>
			<a href="#log_call">Log Call</a>
			<a href="#active_problems">Active Problems</a>
			<a href="#news">Solved Problems</a>
			<a href="#specialist">Specialists</a>
			<a id = "logout" href="http://team017.sci-project.lboro.ac.uk/group_project/LoginPage.html">Log Out</a>
		</div>
		<div class="header">
			<a class="anchor" id="title"></a>
			<h1>Helpdesk Operator Page</h1>
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
		
		<div class="container">
			<a class="anchor" id="specialist"></a>
			<h2>Specialists</h2>
			<table class="specialist">
				<thead><tr><th>Specalist Name</th><th>Speciality</th><th>Assigned Jobs</th></tr></thead>
				<tbody>
					<?php 
						for($i=0;$i<=10; $i=$i+1){
							echo '<tr>
								<td>Name'.(1+$i).'</td>
								<td>IT</td>
								<td>'.(($i+1)*7).'</td>
							</tr>';
						}
					?>
				</tbody>
			</table>

		</div>
        
        


        <div class="log_call_container">
			<a class="anchor" id="log_call"></a>
			<h2>Log a Call</h2>
			<style type="text/css">
                #newDiv{
                  display: none;
                }
                #modifyDiv{
                  display: none;
                }
                #otherDiv{
                  display: none;
                }
            </style> 	
            <div id="callDiv">
                Caller Name: <input type="text" name="caller"><br>
                Ext Num: <input type="text" name="ExtNum"><br>
    <!--        Operator: <input type="text" name="operator"><br>
                Time:<input type="text" name="time"><br> 
                ^^^-- these can be done automaticallly by the system-->

    <!--        When the operator specifies the purpose it displays the corresponing form-->
                Purpose Of Call: <select id="Purpose" onchange="showDiv()">
                <option value="">Select...</option>
                <option value="new">New Problem</option>
                <option value="old">Old Problem</option>
                <option value="other">Other</option>
                </select><br>          
            </div>

            <div id="otherDiv">
                <form action="other.php" method="post">
                    <br><br>
        <!--        If the caller is  calling about something else (not sure where to submit this data if at all)-->
                    Notes: <input type="text" name="notes"><br>
                    <input type="submit"><br>
                </form>
            </div>

            <div id="newDiv">
                <form action="new_problem.php" method="post">
        <!--        If the operator needs to add a new problem (caller doesn't specify a previous problem ID)-->
                    <br><br>
                    New Problem: <br>
                    Description: <input type="text" name="caller"><br>
                    Problem Type: <select name="problemType">
                    <option value="">Select...</option>
                    <option value="hardware">Hardware</option>
                    <option value="software">Software</option>
                    <option value="network">Network</option>
                    </select><br>
                    Hardware Serial: <input type="text" name="serial"><br>
                    OS: <input type="text" name="OS"><br>
                    Software: <input type="text" name="software"><br>
                    Specialist: <select name="specialist">
                    <option value="">Select...</option>
                    <option value="bert">Bert</option>
                    <option value="clara">Clara</option>
                    </select><br>
                    Notes: <textarea name="notes" rows="5" cols="30"></textarea><br>
                    <input type="submit"><br>
                </form>
            </div>

            <div id="modifyDiv">
                <form action="modify_problem.php" method="post">
        <!--        If the operator needs to modify an existing problem (caller specifies their problem ID) then that
                    corresponding problem data fills the input things and the operator can change them and resubmit it to
                    the DB-->
                    <br><br>
                    Modify Problem: <br>
                    Problem Num: <input type="text" name="num"><br>
                    Description: <input type="text" name="caller"><br>
                    Problem Type: <select name="problemType">
                    <option value="">Select...</option>
                    <option value="hardware">Hardware</option>
                    <option value="software">Software</option>
                    <option value="network">Network</option>
                    </select><br>
                    Hardware Serial: <input type="text" name="serial"><br>
                    OS: <input type="text" name="OS"><br>
                    Software: <input type="text" name="software"><br>
                    Specialist: <select name="specialist">
                    <option value="">Select...</option>
                    <option value="bert">Bert</option>
                    <option value="clara">Clara</option>
                    </select><br>
                    Notes: <input type="text" name="notes"><br>
                    <input type="submit"><br>
                </form>
            </div>

            <script>
                function showDiv() {
                  var selector = document.getElementById("Purpose");
                  var value = selector[selector.selectedIndex].value
                  var New = document.getElementById("newDiv");
                  var Modify = document.getElementById("modifyDiv");
                  var Other = document.getElementById("otherDiv");
                  if (value=="new"){
                      New.style.display = "none";
                      Modify.style.display = "none";
                      Other.style.display = "none";
                      New.style.display = "block";
                  }
                  else if (value == "old"){
                      New.style.display = "none";
                      Modify.style.display = "none";
                      Other.style.display = "none";
                      Modify.style.display = "block";
                  }
                  else if (value == "other"){
                      New.style.display = "none";
                      Modify.style.display = "none";
                      Other.style.display = "none";
                      Other.style.display = "block";
                  }
                  else if (value == ""){
                      New.style.display = "none";
                      Modify.style.display = "none";
                      Other.style.display = "none";
                  }
                  }
            </script>

		</div>
		
	</body>
</html>
