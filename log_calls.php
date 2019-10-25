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
		<form action="welcome.php" method="post">
            Name: <input type="text" name="caller"><br>
<!--        Operator: <input type="text" name="operator"><br>
            Time:<input type="text" name="time"><br> these can be done automaticallly by the system-->
            Purpose Of Call: <input type="text" name="purpose"><br>
<!--if purpose of call is to report a problem then by selecting "Problem" they can fill in the details of the problem-->
            Notes: <input type="text" name="notes"><br>
            
<!--        If the operator needs to add a new proble (caller doesn't specify a previous problem ID)-->
            Problem Type: <input type="text" name="operator"><br>
            Hardware Serial: <input type="text" name="serial"><br>
            OS: <input type="text" name="OS"><br>
            Software: <input type="text" name="software"><br>
            Specialist: <input type="text" name="operator"><br>
            <input type="submit">
<!--        If the operator needs to modify an existing problem (caller specifies their problem ID)-->
            
            
            
        </form>

	</body>
</html>