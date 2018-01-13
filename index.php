<?php
include("conn.php");
$sql="select * from producef1";
$rs=mysql_query($sql,$conn);
while($row=mysql_fetch_array($rs)){
?>
<table width="343" height="152" border="1" style="float:left">
<tr>
    <td width="124" rowspan="3"><img src="qrcode.png" witdh="123" height="121" border="0" /></td>
    <td width="203" height="35">名称:<?php echo $row["name"]; ?></td>
</tr>
<tr>
    <td height="28">价格：<?php echo $row["price"]; ?></td>
</tr>
<tr>
    <td height="27" align="center"><a href="star.php?id=<?php echo $row['id']?>&name=<?php echo $row['name']?>&price=<?php echo $row['price']?>&method=star">放入购物车</a></td>
</tr>
</table>
<?php
}
?>
