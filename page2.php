<?php
$cookie_name = "fruits";
if(!isset($_COOKIE[$cookie_name]) && empty($_POST['fruit_name'])){
	echo "<h1>There are no fruits available!</h1>";
}
if(!isset($_COOKIE[$cookie_name])){
$cookie_value = $_POST['fruit_name'];
setcookie($cookie_name,$cookie_value,time()+(86400*30));
}
else{
	echo "<h3>Fruit names are:</h3>";
	$cookie_value = $_COOKIE[$cookie_name];
	if(!empty($_POST['fruit_name'])){
		$cookie_value = $cookie_value.",".$_POST['fruit_name'];
		setcookie($cookie_name,$cookie_value,time()+(86400*30));
	}
	$cookies = explode(",",$cookie_value);
	$i=1;
	foreach($cookies as $fruit){
		echo "$i. $fruit<br>";
		$i+=1;
	}
}
?>