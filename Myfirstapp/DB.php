
<?php
class DB {
	
	protected $db_name = 'test';
	protected $db_user = 'root';
	protected $db_pass = '';
	protected $db_host = 'localhost';
	
	// Open a connect to the database.
	// Make sure this is called on every page that needs to use the database.
	
	public function connect() {
	
		$connect_db = new mysqli( $this->db_host, $this->db_user, $this->db_pass, $this->db_name );
		
		if ( mysqli_connect_errno() ) {
			printf("Connection failed: %s\
", mysqli_connect_error());
			exit();
		}
		echo "<script>alert(\"Connected successfully\")</script>";
		return $connect_db;
		
	}

public function add()
{
	$obj=new DB();
    $conn=$obj->connect();
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


}
$obj=new DB();
    $obj->add();
?>