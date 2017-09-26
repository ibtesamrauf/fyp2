<?php 
session_start();

echo "DISH BACK : ";
print_r($_SESSION['cart_back']);
echo "<br>";
echo "DEAL BACK : ";
print_r($_SESSION['deal_back']);
echo "<br>";
echo "DEAL ID FIXED : ";
print_r($_SESSION['order_id1']);
echo "<br>";

echo "<br>DISH : ";
print_r($_SESSION['cart']);
echo "<br>";


echo "<br>DEAL : ";
print_r($_SESSION['deal']);
echo "<br>";

// $cart = array();
// array_push($cart, 13);
// array_push($cart, 14);
// echo "<br>cart1 : ";
// print_r($cart);
// echo "<br>";


// $_SESSION['cart_back'] = array();
// $_SESSION['cart_back'] = "a";
if (!isset($_SESSION['cart_back'])) 
{ 
 print 'if'; // prints this one. 
} 
else 
{ 
 print 'else'; 
}


// $_SESSION['cart_back'] = array();
// $_SESSION['cart_back'] = "a";
// if (empty($_SESSION['cart_back'])) 
// { 
//  print '<br><br><br>if'; // prints this one. 
// } 
// else 
// { 
//  print '<br><br><br>else'; 
// }


if (isset($_SESSION['cart_back'])) 
{ 
 print '<br><br><br>cart back if'; // prints this one. 
} 
else 
{ 
 print '<br><br><br>cart back else'; 
}

print '<br><br><br>';

if (isset($_SESSION['deal_back'])) 
{ 
 echo'<br><br><br>deal back if'; // prints this one. 
} 
else 
{ 
 print '<br><br><br>deal back else'; 
}
?>