
<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'kantawit11.mysql.database.azure.com', 'kantawit123@kantawit11', 'OGUlot28', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM test');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">product </div></th>
    <th width="350"> <div align="center">price </div></th>
    <th width="150"> <div align="center">amount </div></th>
    <th width="150"> <div align="center">total </div></th>
    <th width="150"> <div align="center">delete </div></th>

<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['product'];?></div></td>
    <td><?php echo $Result['price'];?></td>
    <td><?php echo $Result['amount'];?></td>
    <td><?php echo $Result['total'];?></td>
    <td><?php echo '<a href="delete.php?id='.$Result['id'].'">
Delete</a>'?></td>

  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
<p>
<a href="https://kantawit.azurewebsites.net/form.html">Add</a>
</body>
</html>
