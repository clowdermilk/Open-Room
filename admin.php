<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    $mysqlStatus = "Table MyGuests created successfully";
} else {
    $mysqlStatus = "Error creating table: " . $conn->error;
}

$conn->close();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Open Room - Admin</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
		<h1>Open Room - Admin</h1>
		<form>
		  <div class="form-group">
			<label for="Room" class="col-sm-2 control-label">Room</label>
			<select class="form-control">
			  <option>Grand Ball Room</option>
			  <option>Dolphin</option>
			  <option>Toro Toro</option>
			  <option>Green Room</option>
			</select>
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
		<div class="bs-example" data-example-id="simple-table">
			<table class="table">
				<caption>Current room setup.</caption>	
				<thead>
					<tr>
						<th>#</th>
						<th>Room</th>
						<th>Event</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Grand Ball Room</td>
						<td>Key Note</td>
						<td>CEO to give conference keynote speech.</td>
					</tr>
					<tr>
						<th scope="row">2</th>					
						<td>Dolphin</td>
						<td>Breakfast/Check-in</td>
						<td>Conference check-in and free breakfast for attendees</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="container">
		<kbd>MYSQL</kbd> <small><?php echo $mysqlStatus;?></small>
	</div>
  </div>

  
	</div>
		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>