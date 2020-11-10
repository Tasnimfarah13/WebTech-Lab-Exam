<?php include "ValiLog.php" ?>
<html>
<head>
	<title>Login</title>
</head>
<body>
    <form action="" method="post">
    	<fieldset>
    		<table >
    			<h1 >Login</h1>
    			<tr>
    				<td>
    					Username:
    				</td>
    			</tr>
    			<tr >
    				<td>
    					<input type="text" name="uname">
    				</td>
    			</tr>
    			<tr >
    				<td>
    					Password:
    				</td>
    			</tr>
    			<tr >
    				<td>
    					<input type="Password" name="pass">
    					<input type="submit" name="login" value="Login" >
    				</td>
    			</tr>
    			<tr>
    				<td>
    					<a href="reg.php">Go to registration</a>
    				</td>
    			</tr>
    		</table>
    	</fieldset>
    </form>
</body>
</html>