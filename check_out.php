<?php 

session_set_cookie_params(0);
error_reporting(0);
	
session_start();

// var_dump($_SESSION['cart']);
if (empty($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
	echo "Cart is empty";
}
else
{

// $arr = [7.1,6.2,8.3];
echo "session cart : "; print_r($_SESSION['cart']);

// echo "arr : "; print_r($arr);


$add_dot_all = implode('.', $_SESSION['cart']);

echo "<br><br>";
echo "add_dot_all implode function : "; print_r($add_dot_all);
echo "<br><br>";

$break_with_dot = explode('.', $add_dot_all);
echo "<br>";
echo "break_with_dot explode function : "; print_r($break_with_dot);
echo "<br><br>";


$sstr_while = $break_with_dot;

echo "values of ids : ";
while (list($key, $value) = each($sstr_while)) 
{ 
    unset($sstr_while[$key + 1]); 
    echo " ".$value . PHP_EOL; 
} 

echo "<br><br>";
echo "break_with_dot : "; print_r($break_with_dot);

$for_quantity = $break_with_dot;
echo "<br><br>";
print_r($for_quantity);
echo "<br><br>";
$quantity2 = array();
for ($i = 1	; $i <= count($for_quantity); $i++) 
{

    // unset($for_quantity[$i+1]); 
	$quantity2[$i-1] = $for_quantity[$i];
    // print $for_quantity[$i];
    // echo "<br>";
    $i++;
    
}


// while (list($key, $value) = each($for_quantity)) 
// { 
//     unset($for_quantity[($key+1) +1]); 
//     echo " ".$value ; 
// }
echo "<br><br>";
print_r($quantity2);
echo "<br><br>";

// $fruit = array_shift($for_quantity);
// echo "fruit with ids : "; print_r($fruit);

// echo "<br><br>";
// echo "for quantity ids : "; print_r($for_quantity);

$quantity_id = implode(',', $quantity2);

echo "<br><br>quantity for price  : "; print_r($quantity_id); 

echo "<br><br>";
echo "sstr_while : "; print_r($sstr_while);

$wherein = implode(',', $sstr_while);

echo "<br><br>wherein for sql query : "; print_r($wherein); 

echo "<br><br>";
$data = array();

$total_price = array();

include('con_db.php');

//$query = "SELECT * FROM dish where dish_id IN ($wherein)"; 

$query = 
"SELECT *
FROM dish
WHERE dish_id IN ($wherein)
ORDER BY FIELD(dish_id, $wherein)";

$fetch = mysql_query($query) or die(mysql_error());

?>
<table>
<th colspan="2">NAME</th>
<th align="center"> QUANTITY</th>
<th align="center">PRICE</th>
<tr>
	<td><br></td>
</tr>
<?php

// while (list($key, $value) = each($for_quantity)) 
// { 
//     unset($for_quantity[($key+1) +1]); 
//     echo " ".$value . PHP_EOL; 
// }
while($result = mysql_fetch_assoc($fetch) and list($key, $value) = each($quantity2) ){
?>
<tr>
	<td width="80px"><?php echo $result['dish_name']; ?></td>
	<td width="90px"><?php echo $result['dish_catagory']; ?></td>
	<td width="40px"  align="center"><?php echo " ".$value . PHP_EOL; ; ?></td>
	<td width="40px"  align="right"><?php echo $result['dish_price']; ?></td>
		
		<?php
 			$abc = array($result['dish_id'],$result['dish_name'],$result['dish_catagory'],$result['dish_price']); 
 		?>
</tr>

<tr>
	<td><BR></td>
</tr>

<?php
$new1 = implode(" ", $abc);
// echo "<br><br> print new1 : ";
// print_r($new1);
array_push($data, $new1);
error_reporting(0);

array_push($total_price, $result['dish_price']);
}
echo "<br>";echo $count1;

// $keys = array('foo', 5, 10, 'bar');
// $a = array_fill_keys($keys, 'banana');
// print_r($a);
$kk = array();
for ($i=0; $i <count($count1) ; $i++) 
{ 
	$kk[$i] = $i;
	echo $i.'<br>';	
}


echo "<br><br>";
// $kk = $quantity2;
echo "<br><br> kk array : ";print_r($kk);
echo "<br><br>";

// $a_quantity = array_fill_keys($kk, $quantity2);


echo "<br><br> total price array : ";print_r($total_price);
echo "<br><br>";
echo "<br> quantity2 array : ";print_r($quantity2);
$qun1 = array_values($quantity2);
echo "<br> qun1 : "; print_r($qun1);

// echo "<br><br>";
// echo "<br> a_quantity array : ";print_r($a_quantity);
// echo "<br><br>";


$tot = array();

for ($i=0; $i<count($total_price) ; $i++) 
{ 
	$tot[$i] = $total_price[$i] * $qun1[$i];
}

echo "<br> tot price array";print_r($tot);
echo "<br><br>";

$amount =  array_sum($tot);
?>

<tr>
	<td colspan="4">--------------------------------------------------------------</td>	

</tr>

<tr>
	<td colspan="2">TOTAL PRICE : </td>
	
	<td colspan="2" align="right"> <?php  error_reporting(0);  echo $amount;?></td>
</tr>
<!-- <tr>
	<td colspan="3"><br></td>
</tr>
<tr>
	<td colspan="4" align="right"><input type="button" value="CHECK OUT" onClick="window.location.href='check_out_show.php'"></td>
	
</tr> -->

</table>

<?php } ?>
