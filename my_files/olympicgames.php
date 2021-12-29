<?php
 include 'Config.php';
 
	$Sport = $_POST['sports'];
	$Country = $_POST['country'];
	$Medals = $_POST['medals'];
	
	
	$sql = "INSERT INTO standings (Sport,Country,Medals)
    VALUES ('$Sport','$Country','$Medals')";
	
	$result = $conn->query($sql);
	
	if($result === TRUE)
	{
		echo "new record";
	}
	else{
	echo "error :".$conn->error;
	
	
	}
	header("Location: http://localhost/OlympicGamesApp/olympicgames.html");
	$conn->close();
	
	
	
	
?>
