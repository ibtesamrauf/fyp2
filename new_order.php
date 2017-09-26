<?php 
session_start();
unset($_SESSION['order_id1']);
unset($_SESSION['cart_back']);
unset($_SESSION['deal_back']);
unset($_SESSION['cart']);
unset($_SESSION['deal']);


$_SESSION['check_new_order'] = 1;

echo "<script> alert('NOW YOU CAN PLACE A NEW ORDER');
		window.location.href='index.php';
		</script>";

?>