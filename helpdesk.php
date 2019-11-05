<html>
	<head>

		<title>Helpdesk Operator</title>
		
        <link href="helpdesk.css" rel="stylesheet">
		
		<script type="text/javascript">
		
		</script>
		
		
	</head>
	
	<body>
		<h1>Helpdesk Operator Page</h1>
        <div>
        <form class='box'>
        <input type="button" onclick="location.href='http://google.com';" value="Log Call"/>
        <input type="button" onclick="location.href='http://google.com';" value="Active Problems"/>
        <input type="button" onclick="location.href='http://google.com';" value="Solved Problems"/>
        <input type="button" onclick="location.href='http://google.com';" value="Specialists"/>
        <input type="button" onclick="location.href='http://google.com';" value="Quit"/>
        </form>
		</div>
        
        <div class="btn-group">
            
        </div>
		<div>
			<table>
				<tr><th>Specalist Name</th><th>Speciality</th><th>Assigned Jobs</th></tr>
				<?php 
					for($i=0;$i<=10; $i=$i+1){
						echo '<tr>
							<td>Name'.(1+$i).'</td>
							<td>IT</td>
							<td>'.(($i+1)*7).'</td>
						<tr>';
					}
				?>
			</table>
		</div>
	</body>
</html>
