<?php
    
	if(isset($_POST['submit']))
	{
		require("conn.php");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		$sql="INSERT INTO lostitems (name, description, location, date) VALUES('$_POST[name]','$_POST[description]','$_POST[location]','$_POST[date]')";
		if (!mysqli_query($sql,$con))
		{
		    die('Error: ' . mysqli_error());
		}
		echo "1 record added";
        mysqli_close($con);
        
    }
    header('location:form.php');
?>