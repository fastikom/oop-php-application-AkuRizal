<?php
include_once 'data.php';
$con = new connect();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Transaksi Toko</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
</script>
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Data Toko</a></label>
    </div>
</div>

<div id="body">
 <div id="content">
 <h2><font color="#E9090D"><a href="insert-update.php">Tambah Data</a></font></h2>
    <table width="63%" align="center">
      <th>Pembeli</th>
    <th>Tanggal</th>
    <th>Harga Beli</th>
    <th>Harga Jual</th>
    <th>Barang</th>
    </tr>
    <?php
$res=$con->getdata("SELECT * FROM toko");
if(mysql_num_rows($res)==0)
{
 ?>
    <tr>
    <td colspan="5">Data Tidak Ada !</td>
    </tr>
    <?php
}
else
{
 while($row=mysql_fetch_array($res))
 {
  ?>
        <tr>
        <td><?php echo $row['pembeli'];  ?></td>
        <td><?php echo $row['tanggal'];  ?></td>
        <td><?php echo $row['beli'];  ?></td>
        <td><?php echo $row['jual'];  ?></td>
        <td><?php echo $row['barang'];  ?></td>
       
      
        </tr>
        <?php
 }
}
?>
    </table>
    </div>
</div>

</center>
</body>
</html>