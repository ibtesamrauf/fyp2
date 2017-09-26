
<!-- boot strap link -->
<!--      <link href="libs/css/bootstrap/dist/css/bootstrap.css" rel="stylesheet" media="screen">
 --> 
    <script src="js/jquery-1.10.2.js"></script>
<script src="js/script.js"></script>

<!-- jQuery library -->
<script src="libs/js/jquery.js"></script>
<script src="jquery-3.1.1.min.js"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->

<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>



<script type="text/javascript">
    $(document).ready(function(){
        $('.update-quantity-form').on('submit', function(){
 
    // get basic information for updating the cart
    var id = $(this).find('.product-id').text();
    var quantity = $(this).find('.cart-quantity').val();

    
 // redirect to update_quantity.php, with parameter values to process the request
    window.location.href = "update_quantity.php?id=" + id + "&quantity=" + quantity;
    return false;
});
});

</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.update-quantity-form_deal').on('submit', function(){
 
    // get basic information for updating the cart
    var id = $(this).find('.product-id_deal').text();
    var quantity = $(this).find('.cart-quantity_deal').val();

    
 // redirect to update_quantity.php, with parameter values to process the request
    window.location.href = "update_quantity_deal.php?id=" + id + "&quantity=" + quantity;
    return false;
});
});

</script>




<!-- bootstrap JavaScript -->
<script src="libs/css/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="libs/css/bootstrap/docs-assets/js/holder.js"></script>

<?php 

session_set_cookie_params(0);
error_reporting(0);
	
session_start();

// var_dump($_SESSION['cart']);
if (empty($_SESSION['cart']) && empty($_SESSION['deal'])) {
	$_SESSION['cart'] = array();
    $_SESSION['deal'] = array();
    // echo "Cart is empty";
    echo "<div class='col-md-12'>";
        echo "<div class='alert alert-danger'>";
            echo "No product is found in your cart!";
        echo "</div>";
    echo "</div>";
}
else
{

    include('con_db.php');
// echo "session cart : "; print_r($_SESSION['cart']);
    $total=0;
    $item_count=0;
    $sub_time=0;

    $total_deal=0;
    $item_count_deal=0;
     $sub_time_deal=0;

$sub_time_deal1=0;
     


if (!empty($_SESSION['cart'])) 
{
    $ids = array();
    foreach($_SESSION['cart'] as $id=>$value){
        array_push($ids, $id);
    }
    echo "<br>";

    $id_where = implode(',', $ids);


    $query = 
    "SELECT *
    FROM dish
    WHERE dish_id IN ($id_where)";

    $fetch = mysql_query($query) or die(mysql_error());


    while($result = mysql_fetch_assoc($fetch)  )
    {
        $quantity=$_SESSION['cart'][$result['dish_id']]['quantity'];
        $sub_total=$result['dish_price']*$quantity;
        if ($quantity==1) 
        {
            # code...
            $dish_time = $result['dish_estimated_time'];
        }
        else
        {
            $dish_time1 = $result['dish_estimated_time'] * $quantity;
            $temp22 = round(($dish_time1/100)*80);

            $dish_time = $temp22;
        }

            echo "<form class='update-quantity-form' >";
            // echo $result['dish_name']." ".$result['dish_catagory']; 
            echo "<div ><h4>{$result['dish_name']} </h4></div>";
            echo "<div class='product-id' style='display:none;'><h4 id='$result[dish_id]'>{$result['dish_id']}</h4></div>";
            echo "<div class='input-group'>";
            echo "<input type='number' pattern='[0-9]' name='quantity' value='{$quantity}' class='cart-quantity' min='1' id='quantity' />";
            echo "<span style='padding-left: 10px;'>";
            echo "<button  class='btn btn-default update-quantity' type='submit'>Update</button>";
            echo "<span style='padding-left: 10px;'>";
            echo "<a href='remove_from_cart.php?id={$result['dish_id']}'  class='btn btn-default'>";
            echo "Delete";
            echo "</a>";
            echo "</span>"; 
            echo "<span style='padding-left: 10px;'>";
            echo "Rs." . number_format($result['dish_price'], 2, '.', ',') . "";
            echo "</span>"; 
            echo "<span style='padding-left: 10px;'>";
            echo "AND Time is " .($result['dish_estimated_time']) . "  Minutes";
            echo "</span>"; 
            echo "</span>";
            echo "</div>";
            echo "</form><br>";


            // delete from cart
            $sub_time += $dish_time;
            $item_count += $quantity;
            $total+=$sub_total;

    }

}


if (!empty($_SESSION['deal'])) 
{
    $ids_deal = array();
    foreach($_SESSION['deal'] as $id=>$value){
        array_push($ids_deal, $id);
    }


    $id_where_deal = implode(',', $ids_deal);
        

    $query1 = 
    "SELECT *
    FROM deal
    WHERE deal_id IN ($id_where_deal)";

    $fetch1 = mysql_query($query1) or die(mysql_error());

    
    while($result1 = mysql_fetch_assoc($fetch1)  )
    {
        $quantity=$_SESSION['deal'][$result1['deal_id']]['quantity'];
        $sub_total=$result1['deal_price']*$quantity;

            echo "<form class='update-quantity-form_deal' >";
            // echo $result['dish_name']." ".$result['dish_catagory']; 
            echo "<div ><h4>{$result1['deal_name']} </h4></div>";
            echo "<div class='product-id_deal' style='display:none;'><h4 id='$result1[deal_id]'>{$result1['deal_id']}</h4></div>";
            echo "<div class='input-group'>";
            echo "<input type='number' pattern='[0-9]' name='quantity' value='{$quantity}' class='cart-quantity_deal' min='1' id='quantity' />";
            echo "<span style='padding-left: 10px;'>";
            echo "<button  class='btn btn-default update-quantity' type='submit'>Update</button>";
            echo "<span style='padding-left: 10px;'>";
            echo "<a href='remove_from_cart_deal.php?id={$result1['deal_id']}'  class='btn btn-default'>";
            echo "Delete";
            echo "</a>";
            echo "</span>"; 
            echo "<span style='padding-left: 10px;'>";
            echo "Rs." . number_format($result1['deal_price'], 2, '.', ',') . "";
            echo "</span>"; 
            echo "<span style='padding-left: 10px;'>";
            echo "AND Time is ";
            $query5 = "SELECT dish_estimated_time FROM dish where dish_id IN (SELECT dish_id FROM deal_menu WHERE deal_id='$result1[deal_id]')";
            $fetch5 = mysql_query($query5) or die(mysql_error());

            $dish_time;
            $print_time=0;
            while ($result5 = mysql_fetch_assoc($fetch5)) 
            {
                # code...
                $dish_time = $result5['dish_estimated_time'] * $quantity;
                $print_time += $result5['dish_estimated_time'];
                $sub_time_deal1 += $dish_time;

            } 
            if ($quantity==1) 
            {
                # code...
                $sub_time_deal = $sub_time_deal1;
            }
            else
            {
                $temp22 = round(($sub_time_deal1/100)*80);
                $sub_time_deal = $temp22;
            }
            echo "$print_time  Minutes" . "";
            echo "</span>";
            echo "</span>";
            echo "</div>";
            echo "</form><br>";

            // delete from cart       
            $item_count_deal += $quantity;
            $total_deal+=$sub_total;

    }


}


$item_count_final = $item_count + $item_count_deal;
$total_final = $total + $total_deal; 

$sub_time_final = $sub_time + $sub_time_deal;
// $temp1 = round(($sub_time_final1/100)*80);
// $sub_time_final = $temp1;
echo "<div class='col-md-8'></div>";
    echo "<div class='col-md-4'>";
        echo "<div class='cart-row'>";
            echo "<h4 class='m-b-10px'>Total ({$item_count_final} items)</h4>";
             echo "<h4 class='m-b-10px'>Total Time ({$sub_time_final} Minutes)</h4>";
            echo "<h4>Rs." . number_format($total_final, 2, '.', ',') . "</h4>";
            echo "<a href='checkout.php' class='btn btn-success m-b-10px'>";
                echo "<span class='glyphicon glyphicon-shopping-cart'></span> Proceed to Checkout";
            echo "</a>";
        echo "</div>";
    echo "</div>"; 

}
    ?>
