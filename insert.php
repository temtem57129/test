<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'kantawit11.mysql.database.azure.com', 'kantawit123@kantawit11', 'OGUlot28', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$product = $_POST['product'];
$price = $_POST['price'];
$amount = $_POST['amount'];


$sql = "INSERT INTO test (product , price , amount, total) VALUES ('$product', '$price', '$amount', '$price'*'$amount' )";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


mysqli_close($conn);
?>
<html>
<p>
<a href="https://kantawit.azurewebsites.net/">Back to Show</a>
</body>
</html>
