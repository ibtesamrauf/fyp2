<?php 
$quantity = $_POST['quantity'];
$id = $_GET['id'];


session_set_cookie_params(0);
session_start();
error_reporting(0);
if (isset($_SESSION['deal_back']) || isset($_SESSION['cart_back'])) 
{
	# code...
	$cart_item=array('quantity'=> $quantity);

	// check if the item is in the array, if it is, do not add
	if(array_key_exists($id, $_SESSION['deal_back'])){
	    // redirect to product list and tell the user it was added to cart
	    // header('Location: products.php?action=exists&id=' . $id . '&page=' . $page);
	    echo "<script>
		alert('Product already exists in Order. Please increase product quantity from order edit tab.');
		window.location.href='edit_order.php';
		</script>";
	}
	else
	{
		$_SESSION['deal_back'][$id]=$cart_item;
		// array_push($_SESSION['cart'], $_GET['id'].".".$quantity);
		echo "<script>
		alert('Product has already been added to your order');
		window.location.href='edit_order.php';
		</script>";
	}
}
else
{
	if (empty($_SESSION['deal'])) {
		$_SESSION['deal'] = array();
	}


	$cart_item=array('quantity'=> $quantity);

	// check if the item is in the array, if it is, do not add
	if(array_key_exists($id, $_SESSION['deal'])){
	    // redirect to product list and tell the user it was added to cart
	    // header('Location: products.php?action=exists&id=' . $id . '&page=' . $page);
	    echo "<script>
		alert('Product already exists in cart');
		window.location.href='index.php';
		</script>";
	}
	else
	{
		 $_SESSION['deal'][$id]=$cart_item;
		 echo "<script>
		alert('Product has already been added to cart');
		window.location.href='index.php';
		</script>";

	// array_push($_SESSION['cart'], $_GET['id'].".".$quantity);
	}
	// print_r($_SESSION['cart']);
}
// session_unset();
// session_destroy();


?>


