<?php



echo 'Welcome ';

function connection()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbName="test";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<script>alert(\"Connected successfully\")</script>";
return $conn;
}

function add()
{
    $conn=connection();
$email=$_POST['email'];
$pass=$_POST['pwd'];

$sql="insert into user
(username,password)values
('$email','$pass')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert(\"Inserted successfully\")</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//$conn->close();
}

//connection();
//add();
?>




<table border="1">
  <?php 
function getAllDetails()
{
 $conn=connection();
$sqlresult = "SELECT username,password FROM user";
$result = $conn->query($sqlresult);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "username:" ."<tr><td>". $row["username"]."</td>".  " password: " ."<td>". $row["password"]. "</td></tr> ";
    }
} else {
    echo "0 results";
}
}
getAllDetails();
?>