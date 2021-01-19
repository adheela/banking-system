<?php
$conn = new mysqli('localhost', 'root', '', 'bank');
if ($conn->connect_error || !$conn) {
  header("Location: http://localhost/banking-system/html/user.html?toast=Sorry,-cannot-connect.");

}
$sender_name = $_GET["sender_name"];
$receiver_name = $_GET["receiver_name"];
$amount = $_GET["amount"];
echo $sender_name;

 $sql1="SELECT * FROM users WHERE name='$sender_name'";
	$result5=mysqli_query($conn, $sql1); 
	$row=mysqli_fetch_assoc($result5) ;
	$money= $row['balance'];
	echo $money;
	$sql2 = "SELECT *  FROM users WHERE Name='$receiver_name' ";
	$result2 = mysqli_query($conn, $sql2);

	if (mysqli_fetch_assoc($result2)<1){ 
		header("Location: http://localhost/banking-system/html/not-exist.html");
	} 
   elseif ($money<$amount) {
	header("Location: http://localhost/banking-system/html/insufficient.html");
		
	}

   else{
		$sql4 = "UPDATE users SET balance=balance-$amount WHERE name='$sender_name'";
	   $sql3= "UPDATE users SET balance=balance+$amount WHERE name='$receiver_name' ";
		$result2 = mysqli_query($conn, $sql3); 
		$result3 = mysqli_query($conn, $sql4);
		$sql = "INSERT INTO transaction VALUES ('$sender_name','$receiver_name',  $amount)";
	   $result = mysqli_query($conn, $sql); 
	   header("Location: http://localhost/banking-system/html/successful.html");
		

	}

   mysqli_close($conn);
?>