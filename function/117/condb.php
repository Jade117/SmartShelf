<?php

	//===============================================把值傳到DB
    // Prepare variables for database connection
   
    $dbusername = "root";  
    $dbpassword = "117";  
    $server = "localhost";
	$database = 'smartshelf';

    // Connect to your database

    $dbconnect = mysqli_connect($server, $dbusername, $dbpassword);
	//if($dbconnect) 	echo "Database Connected successfully !!!<br><hr>";
    $dbselect = mysqli_select_db("smartshelf",$dbconnect);
	
    /*// Prepare the SQL statement
	// INSERT Arduino 傳的值
    $sql = "INSERT INTO test (temp) VALUES ('".@$_GET["temp"]."')";    
 
    // Execute SQL statement

    mysql_query($sql);
	//===============================================把值傳到DB END
	
	//===============================================顯示的Table
	$db = mysqli_connect($server, $dbusername, $dbpassword, $database);
	mysqli_set_charset($db, "utf8");
	echo "<table border='3' width='50%'>
	<tr>
	<th>temp</th>
	</tr>";
	
	$value = "SELECT * FROM test";
	$result = $db->query($value);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td align='center'>". $row["temp"]."</td>";
			echo "</td>";
		}
	} else {
		echo "0 results";
	}
	echo "</table>";
	//===============================================顯示的Table END

/*$conn = mysqli_connect('localhost','root','','smartshelf')
	   or die("Can't connect!");

	   mysqli_select_db($conn,'smartshelf')
	   or die ("Unable to select a database!");

if (isset($_GET['temp']))
{
	$temp = ($_GET['temp']);
}

$sql = "INSERT INTO test (temp) VALUES ($temp)";
echo $temp;
mysqli_query($conn,$sql);*/

?>