
<html>
<head>
<title>ITF Lab</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello BlackPink</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color:#FCA2A2;">
    <p></p>
    <div class="container-fluid">
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
    <th width="150"> <div align="center">price </div></th>
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
<a href="https://kantawit.azurewebsites.net/form.html">        Add id="commentBtn"</a>
    </div>
</body>
</html>
