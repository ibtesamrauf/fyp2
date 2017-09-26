<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
<?php 
$quantity = $_POST['quantity'];
$id = $_GET['id'];


session_set_cookie_params(0);
session_start();

error_reporting(0);
if (isset($_SESSION['cart_back']) || isset($_SESSION['deal_back'])) 
{
	# code...
	$cart_item=array('quantity'=> $quantity);

	// check if the item is in the array, if it is, do not add
	if(array_key_exists($id, $_SESSION['cart_back'])){
	    // redirect to product list and tell the user it was added to cart
	    // header('Location: products.php?action=exists&id=' . $id . '&page=' . $page);
	    echo "<script>
		alert('Product already exists in Order. Please increase product quantity from order edit tab.');
		window.location.href='edit_order.php';
		</script>";
	}
	else
	{
		$_SESSION['cart_back'][$id]=$cart_item;
		// array_push($_SESSION['cart'], $_GET['id'].".".$quantity);
		echo "<script>
		alert('Product has already been added to your order');
		window.location.href='edit_order.php';
		</script>";
	}
}
else
{
	if (empty($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
	}


	$cart_item=array('quantity'=> $quantity);

	// check if the item is in the array, if it is, do not add
	if(array_key_exists($id, $_SESSION['cart'])){
	    // redirect to product list and tell the user it was added to cart
	    // header('Location: products.php?action=exists&id=' . $id . '&page=' . $page);
	    echo "<script>
		alert('Product already exists in cart');
		window.location.href='index.php';
		</script>";
	}
	else
	{
		$_SESSION['cart'][$id]=$cart_item;
		// array_push($_SESSION['cart'], $_GET['id'].".".$quantity);
		echo "<script>
		alert('Product has been added to cart');
		window.location.href='index.php';
		</script>";
	}
	// print_r($_SESSION['cart']);

}

// session_unset();
// session_destroy();

?>


