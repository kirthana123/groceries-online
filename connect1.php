 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="project2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
	if(isset($_POST['submit'])){
		$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$mobileno=$_POST['mobileno'];
$product=$_POST['product'];
$transac_via=$_POST['transac_via'];
$comment=$_POST['comment']; 
	$stmt=$conn->prepare("insert into form(firstname,lastname,email,mobileno,product,transac_via,comment)values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssisss",$firstname,$lastname,$email,$mobileno,$product,$transac_via,$comment);
    $stmt->execute();
	echo "<script> alert('ordered successfully')</script>";
	}
	else{
		echo "<script>alert('Invalid')</script>";
	}
}	 
$conn->close();

?> 