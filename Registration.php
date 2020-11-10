<?php
   require "ValiReg.php";
?>

<html>
<head>
	<title>Registration</title>
</head>
<body>
    <form action="" method="post" >
	    <fieldset >
	    	<table >
	    		<h1 >Welcome to Registration.</h1>
	    		<tr>
	    			<td >
	    				Full Name:
	    			</td>
	    			<td>
	    				<input type="text" name="fname">
	    				<span> <?php echo "$err_name"; ?> </span>
	    			</td>
	    		<tr >
	    			<td>
	    				User Name:
	    			</td>
	    			<td>
	    				<input type="text" name="uname">
	    				<span> <?php echo "$err_uname"; ?> </span>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td >
	    				Password:
	    			</td>
	    			<td>
	    				<input type="Password" name="pass">
	    				<span> <?php echo "$err_pass"; ?> </span>
	    			</td>
	    		</tr>
	    		<tr >
	    			<td >
	    				Confirm Password:
	    			</td>
	    			<td>
	    				<input type="Password" name="cpass">
	    				<span> <?php echo "$err_cpass"; ?> </span>
	    			</td>
	    		</tr>
	    		<tr >
	    			<td >
	    				Gender:
	    			</td>
                    <td>
                    	<input type="radio" name="gender">Male &nbsp
                    	<input type="radio" name="gender">Female
                    	<span> <?php echo "&nbsp &nbsp &nbsp $err_gender"; ?> </span>
                    </td>
	    		</tr>
	    		<tr >
	    			<td >
	    				E-mail Address:
	    			</td>
	    			<td>
	    				<input type="text" name="email">
	    				<span> <?php echo "$errMail"; ?> </span>
	    			</td>
	    		</tr>
	    		<tr >
	    			<td >
	    				Contact No..
	    			</td>
	    			<td>
	    				<input type="text" name="phn">
	    				<span> <?php echo "$err_contact"; ?> </span>
	    			</td>
	    		</tr>
	    		<tr >
	    			<td >
	    				City:
	    			</td>
	    			<td>
	    				<select name="city">
	    					<option>Dhaka</option>
	    					<option>Sylhet</option>
	    					<option>Rajshahi</option>
	    				</select>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td colspan="3" >
	    				<input type="submit" name="ok" value="OK"> 
	    			</td>
	    		</tr>
	    	</table>
	    </fieldset>
    </form>
</body>
</html>