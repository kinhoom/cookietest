<?php
ob_start();
$id    =@$_GET['id'];
$name  =@$_GET['name'];
$price =@$_GET['price'];
$method=@$_GET['method'];
$good_car_array=unserialize($_COOKIE['good_car_string']);
switch($method){
    case 'star':{
	if(array_key_exists($id,$good_car_array)){
	    echo  "<script>alert('购物车中已经存在该商品!');</script>";
	}else{
	    $good_car_array[$id]=array($name,$price);
	    echo  "<script>alert('添加成功!');</script>";
	}
    }
    break;
    case 'del':{
	unset($good_car_array[$id]);	
	echo "<script>alert('删除成功!');</script>";
    }
    break;
    case 'delall':{
	$good_car_array='';
	echo "<script>alert('全部删除成功!');</script>";
    }
    break;

}
var_dump(serialize($good_car_array));
var_dump($good_car_array);
setcookie('good_car_string',serialize($good_car_array),time()+3600*30*24);
header('location:show.php');
