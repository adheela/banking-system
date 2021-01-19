<?php
$conn = new mysqli('localhost', 'root', '', 'bank');
if ($conn->connect_error || !$conn) {

  header("Location: http://localhost/banking-system/html/user.html?toast=Sorry,-cannot-connect.");

}

$query2="SELECT * FROM users";
    $res2 = mysqli_query($conn, $query2);
    $rows2 = [];
    while ($row2 = mysqli_fetch_assoc($res2)) {
        $rows2[] = $row2;
    }
   echo json_encode($rows2); 
   mysqli_close($conn);

?>