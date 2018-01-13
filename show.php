<?php
$res=unserialize($_COOKIE['good_car_string']);
if($res){
	foreach($res as $k=>$val){
	?>
	<table width="343" height="152" border="1" style="float:left">
	<tr>    <td width="124" rowspan="3"><img src="qrcode.png" witdh="123" height="121" border="0" /></td>
	    <td width="203" height="35">名称:<?php echo $val[0]; ?></td>
	</tr>
	<tr>
	    <td height="28">价格：<?php echo $val[1]; ?></td>
	</tr>
	<tr>
	    <td height="27" align="center"><a href="star.php?id=<?php echo $k;?>&name=<?php echo $val[0];?>&price=<?php echo $val[1];?>&method=del">从购物车删除</a></td>
	</tr>
	</table>

	<?php
	}
}?>
<a href="index.php">返回</a>
<a href="star.php?method=delall">删除全部</a>
