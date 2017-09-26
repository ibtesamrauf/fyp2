<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Smart Restaurant Service</title>


     <link href="libs/css/bootstrap/dist/css/bootstrap.css" rel="stylesheet" media="screen">

     
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/global.css">
<script src="js/slides.min.jquery.js"></script>
<script>
    $(function(){
      $('#products').slides({
        preload: true,
        preloadImage: 'img/loading.gif',
        effect: 'slide, fade',
        crossfade: true,
        slideSpeed: 350,
        fadeSpeed: 500,
        generateNextPrev: true,
        generatePagination: false
      });
    });
  </script>
</head>
<body>
  <div class="wrap">
  <div class="header">
    
    <div class="header_top">
      <div class="logo">
        <a href="index.php"><img src="images/logo.png" width="300px" height="150px" alt="" /></a>
      </div>
      

      <!-- <div class="cart">
             <p>Welcome to our Online Store! <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 
              <ul class="dropdown">
              <li> -->


<?php
session_set_cookie_params(0);
session_start();

// var_dump($_SESSION['cart_back']);
// if (empty($_SESSION['cart_back']) && empty($_SESSION['deal_back'])) 
// {
//       $_SESSION['cart_back'] = array();
//       $_SESSION['deal_back'] = array();
//       echo "Cart is empty check_out_show";
// }
// else
// {
  
//   include 'cart_s.php';
//               echo "<tr> <td> <br> <td><td>"; 
//               echo "<a  href='check_test.php'><input type='button' value='Show Order'></a>";
// }
?> 
              <!-- </li>
          </ul></div></p>
        </div> -->
        <script type="text/javascript">
      function DropDown(el) {
        this.dd = el;
        this.initEvents();
      }
      DropDown.prototype = {
        initEvents : function() {
          var obj = this;

          obj.dd.on('click', function(event){
            $(this).toggleClass('active');
            event.stopPropagation();
          }); 
        }
      }

      $(function() {

        var dd = new DropDown( $('#dd') );

        $(document).click(function() {
          // all dropdowns
          $('.wrapper-dropdown-2').removeClass('active');
        });

      });

    </script> 

    <script type="text/javascript">
    function empty_txt_bx() 
{


if((document.dataform.fn.value=="") ||
  (document.dataform.ln.value=="" )||
  (document.dataform.address.value=="") ||
  (document.dataform.email.value=="" ))
{
  alert("PLEASE FILL ALL INFORMATION");
  return false;
}
else
{
  
}
}
</script>
        
        
   <div class="clear"></div>
  </div>
  <div class="header_bottom">
        <div class="menu">
            <ul>
            <li class="active"><a href="index.php">Home</a></li>
         
            <li><a href="deal.php">Deals</a></li>
            <li><a href="call_bill_collector_save.php">CALL BILL COLLECTOR</a></li>
            <?php
                include 'get_device_name.php';

                include 'con_db.php';
                $query1 = "SELECT * FROM order1 Where order_table=(SELECT device_id FROM devices where table_number='$table_num') ORDER BY order_id Desc LIMIT 1";

                $fetch1 = mysql_query($query1) or die(mysql_error());
                $result1 = mysql_fetch_assoc($fetch1);

                // echo $result1['order_time'];

                date_default_timezone_set('asia/karachi');
              $time =  date("h:i:sa")." ".date("d-m-Y");  
              // echo "<br>$time";
              $to_time = strtotime($time);

              $from_time = strtotime($result1['order_place_time']);
              $mins = round(abs($to_time - $from_time) / 60,2);
              // echo round(abs($to_time - $from_time) / 60,2). " minute";

              // echo "<br>$mins Minutes left";
              if ($mins <= 5 ) 
              {
                // $_SESSION['cart_back'] = array();
                // $_SESSION['deal_back'] = array();
                // echo "<br><h2>CAN GET ORDER BACK</h2>";
                // if (empty($_SESSION['cart']) && empty($_SESSION['deal'])) 
                   if($_SESSION['check_new_order'] == 0)
                {       
                  # code...
          ?>
                <li><a href="edit_order.php?order_id1=<?php echo $result1['order_id'];?>">Order Edit</a></li>
                <li><a href="new_order.php">New Order</a></li>
          <?php
                }
              }
              else
              {
                unset($_SESSION['order_id1']);
                unset($_SESSION['cart_back']);
                unset($_SESSION['deal_back']);
              }
          ?>
            
            <div class="clear"></div>
          </ul>
        </div>
      
        <div class="clear"></div>
       </div>       
   </div>
 <div class="main">
   
      <div class="section group">
        <div class="cont-desc span_1_of_2">
          <div class="product-details">       
          <!-- <div class="grid images_3_of_2_new"> -->
          <div id="container"> 
               <div id="products_example">
                 <div id="products">

      <h1 style="font-size: 200%;">Information</h1>
        <div class='col-md-12'>
      <div class='alert alert-success'>
        <strong>If you want to place a new odrer after clicking to ORDER EDIT tab before 5minutes so click NEW ORDER tab and place new order from menu!</strong> Thank you very much!
        
    </div>
  </div>

      <H1 style="font-size: 200%;">Cart</H1>
           



<!-- (((((((((((((((((((((( check test ))))))))))))))))0 -->


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

include 'con_db.php';


// $order_id1 = $_GET['order_id1'];


if (empty($_SESSION['order_id1'])) 
{
  # code...
  $_SESSION['order_id1'] = array();
  $_SESSION['order_id1'] =  $_GET['order_id1'];
}

// $cart_back_value = array();
// $deal_back_value = array();






if (!isset($_SESSION['cart_back'])) 
{
  $query ="SELECT * FROM order_dish WHERE order_id=".$_SESSION['order_id1'];

    // $query ="SELECT * FROM order_dish WHERE order_id=".$_GET['order_id1'];


    $fetch = mysql_query($query) or die(mysql_error());

    while($result = mysql_fetch_assoc($fetch)  )
    {
      // if (empty()) 
      // {
      //   # code...
      // }
        if ($result['order_type'] == 2) 
        {
          # code...
              //$quantity=$_SESSION['cart'][$result['dish_id']]['quantity'];
              //$sub_total=$result['dish_price']*$quantity;
              
              $query2 ="SELECT * FROM dish WHERE dish_id=".$result['item_id'];
              $fetch2 = mysql_query($query2) or die(mysql_error());
              $result2 = mysql_fetch_assoc($fetch2);
              
              $quantity = $result['quantity'];
              $id = $result['item_id'];

              // $cart_back_value_id = array();
              // array_push($cart_back_value_id, $id);

              // $cart_back_value_quantity = array();
              // array_push($cart_back_value_quantity, $quantity);
              
              // $cart_item=array('quantity'=> $quantity);
              // $cart_back_value[$id]=$cart_item;

              // session_set_cookie_params(0);
              // session_start();

              // if (!isset($_SESSION['cart_back'])) 
              

                  // if (empty($_SESSION['cart_back'])) 
                  {
                      // $_SESSION['cart_back'] = array();
                      $cart_item=array('quantity'=> $quantity);
                      $_SESSION['cart_back'][$id]=$cart_item;
                  }
        }

      }

}







// if (empty($_SESSION['deal_back'])) 
if (!isset($_SESSION['deal_back']))
{
    $query ="SELECT * FROM order_dish WHERE order_id=".$_SESSION['order_id1'];

    // $query ="SELECT * FROM order_dish WHERE order_id=".$_GET['order_id1'];


    $fetch = mysql_query($query) or die(mysql_error());

    while($result = mysql_fetch_assoc($fetch)  )
    {
      // if (empty()) 
      // {
      //   # code...
      // }
        if ($result['order_type'] == 1) 
        {
          # code...
              //$quantity=$_SESSION['cart'][$result['dish_id']]['quantity'];
              //$sub_total=$result['dish_price']*$quantity;
              
                
              $query3 ="SELECT * FROM deal WHERE deal_id=".$result['item_id'];
              $fetch3 = mysql_query($query3) or die(mysql_error());
              $result3 = mysql_fetch_assoc($fetch3);

              $quantity = $result['quantity'];
              $id = $result['item_id'];


              // $deal_item=array('quantity'=> $quantity);
              // $deal_back_value[$id]=$deal_item;



              // $quantity = $_POST['quantity'];
              // $id = $_GET['id'];

              // session_set_cookie_params(0);
              // session_start();

              // $deal_back_value_id = array();
              // array_push($deal_back_value_id, $id);

              // $deal_back_value_quantity = array();
              // array_push($deal_back_value_quantity, $quantity);


              // if (empty($_SESSION['deal_back'])) 
              {
                  // $_SESSION['deal_back'] = array();
              }
              // if (!isset($_SESSION['deal_back'])) 
              // if(!array_key_exists($id, $_SESSION['cart_back']))
              {
                  // $_SESSION['deal_back'] = array();
                  $cart_item=array('quantity'=> $quantity);
                  $_SESSION['deal_back'][$id]=$cart_item;
              }
              // else
              {

              }



              // $cart_item=array('quantity'=> $quantity);

              // check if the item is in the array, if it is, do not add
              // if(array_key_exists($id, $_SESSION['deal']))
              {
                  // redirect to product list and tell the user it was added to cart
                  // header('Location: products.php?action=exists&id=' . $id . '&page=' . $page);
                  
                  // echo "<script>
                  // alert('Product already exist in cart');
                  // window.location.href='index.php';
                  // </script>";
              }
              // else
              {
                  // $_SESSION['deal_back'][$id]=$cart_item;
                  // array_push($_SESSION['cart'], $_GET['id'].".".$quantity);
              }
        }

      }

}





























// if (empty($_SESSION['cart'])) 
{
    // $ids = array();
    // foreach($_SESSION['cart'] as $id=>$value){
    //     array_push($ids, $id);
    // }
    // echo "<br>";

    // $id_where = implode(',', $ids);

    // $query ="SELECT * FROM order_dish WHERE order_id=".$_SESSION['order_id1'];

    // $query ="SELECT * FROM order_dish WHERE order_id=".$_GET['order_id1'];


    // $fetch = mysql_query($query) or die(mysql_error());

    // while($result = mysql_fetch_assoc($fetch)  )
    // {
    //   // if (empty()) 
    //   // {
    //   //   # code...
    //   // }
    //     if ($result['order_type'] == 2) 
    //     {
    //       # code...
    //           //$quantity=$_SESSION['cart'][$result['dish_id']]['quantity'];
    //           //$sub_total=$result['dish_price']*$quantity;
              
    //           $query2 ="SELECT * FROM dish WHERE dish_id=".$result['item_id'];
    //           $fetch2 = mysql_query($query2) or die(mysql_error());
    //           $result2 = mysql_fetch_assoc($fetch2);
              
    //           $quantity = $result['quantity'];
    //           $id = $result['item_id'];

    //           // $cart_back_value_id = array();
    //           // array_push($cart_back_value_id, $id);

    //           // $cart_back_value_quantity = array();
    //           // array_push($cart_back_value_quantity, $quantity);
              
    //           // $cart_item=array('quantity'=> $quantity);
    //           // $cart_back_value[$id]=$cart_item;

    //           session_set_cookie_params(0);
    //           // session_start();

    //           // if (!isset($_SESSION['cart_back'])) 
    //           {

    //               // if (empty($_SESSION['cart_back'])) 
    //               {
    //                   $_SESSION['cart_back'] = array();
    //                   $cart_item=array('quantity'=> $quantity);
    //                   $_SESSION['cart_back'][$id]=$cart_item;
    //               }
    //                // if(!array_key_exists($id, $_SESSION['cart_back']))
    //   //             if (!isset($_SESSION['cart_back'])) 
    //               {
    //   //               echo "<script>
    //   // alert('You cannot cancel your complete order. One dish is necessary');
    //   // </script>";
    //   //                 $cart_item=array('quantity'=> $quantity);
    //   //                 $_SESSION['cart_back'][$id]=$cart_item;
    //               }
    //               // else
    //               {

    //               }
                  
                  
    //           }


    //           // $cart_item=array('quantity'=> $quantity);

    //           // check if the item is in the array, if it is, do not add
    //           // if(array_key_exists($id, $_SESSION['cart']))
    //           {
    //               // redirect to product list and tell the user it was added to cart
    //               // header('Location: products.php?action=exists&id=' . $id . '&page=' . $page);


    //               // echo "<script>
    //               // alert('Product already exist in cart');
    //               // window.location.href='index.php';
    //               // </script>";
    //           }
    //           // else
    //           {
    //               // $_SESSION['cart_back'][$id]=$cart_item;
    //               // array_push($_SESSION['cart'], $_GET['id'].".".$quantity);
    //           }
    //     }

    //     if ($result['order_type'] == 1) 
    //     {
    //       # code...
    //           //$quantity=$_SESSION['cart'][$result['dish_id']]['quantity'];
    //           //$sub_total=$result['dish_price']*$quantity;
              
                
    //           $query3 ="SELECT * FROM deal WHERE deal_id=".$result['item_id'];
    //           $fetch3 = mysql_query($query3) or die(mysql_error());
    //           $result3 = mysql_fetch_assoc($fetch3);

    //           $quantity = $result['quantity'];
    //           $id = $result['item_id'];


    //           $deal_item=array('quantity'=> $quantity);
    //           $deal_back_value[$id]=$deal_item;



    //           // $quantity = $_POST['quantity'];
    //           // $id = $_GET['id'];

    //           // session_set_cookie_params(0);
    //           // session_start();

    //           // $deal_back_value_id = array();
    //           // array_push($deal_back_value_id, $id);

    //           // $deal_back_value_quantity = array();
    //           // array_push($deal_back_value_quantity, $quantity);


    //           // if (empty($_SESSION['deal_back'])) 
    //           {
    //               // $_SESSION['deal_back'] = array();
    //           }
    //           // if (!isset($_SESSION['deal_back'])) 
    //           // if(!array_key_exists($id, $_SESSION['cart_back']))
    //           {
    //               // $cart_item=array('quantity'=> $quantity);
    //               // $_SESSION['deal_back'][$id]=$cart_item;
    //           }
    //           // else
    //           {

    //           }



    //           // $cart_item=array('quantity'=> $quantity);

    //           // check if the item is in the array, if it is, do not add
    //           // if(array_key_exists($id, $_SESSION['deal']))
    //           {
    //               // redirect to product list and tell the user it was added to cart
    //               // header('Location: products.php?action=exists&id=' . $id . '&page=' . $page);
                  
    //               // echo "<script>
    //               // alert('Product already exist in cart');
    //               // window.location.href='index.php';
    //               // </script>";
    //           }
    //           // else
    //           {
    //               // $_SESSION['deal_back'][$id]=$cart_item;
    //               // array_push($_SESSION['cart'], $_GET['id'].".".$quantity);
    //           }
    //     }
        

    // }

// $cart_item=array('quantity'=> $quantity);
// $_SESSION['cart_back'][$id]=$cart_item;

// cart_back_value_id
// deal_back_value_id
// echo "cart_back : ";



// foreach($cart_back_value as $id=>$value)
// {
//         // echo "<br>id : $id : ";
//         foreach ($value as $key => $value1) 
//         {
//                   // echo "<br>id : $id : ";
//           // echo "<br and value : >".$value1;
//         // array_push($quantitys, $value1);
//           $cart_item11=array('quantity'=> $value);
//           $_SESSION['cart_back'][$id]=$cart_item11;
          
//         }
// }


// print_r($_SESSION['cart_back']);

// echo "<br><br><br><br>new<br><br><br>";
// echo "<br>deal_back : ";




// foreach($deal_back_value as $id=>$value)
// {
//         // echo "<br>id : $id : ";
//         foreach ($value as $key => $value1) 
//         {
//                   // echo "<br>id : $id : ";
//           // echo "<br and value : >".$value1;
//         // array_push($quantitys, $value1);
//           $cart_item11=array('quantity'=> $value);
//           $_SESSION['deal_back'][$id]=$cart_item11;
          
//         }
// }

// print_r($_SESSION['deal_back']);
session_set_cookie_params(0);
error_reporting(0);
  
// session_start();

// var_dump($_SESSION['cart']);
if (empty($_SESSION['cart_back']) && empty($_SESSION['deal_back'])) 
{

  // $_SESSION['cart_back'] = array();
  //   $_SESSION['deal_back'] = array();
    // echo "Cart is empty";
    echo "<div class='col-md-12'>";
        echo "<div class='alert alert-danger'>";
            echo "No product is found in your cart!<br>";
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


if (!empty($_SESSION['cart_back'])) 
{
    $ids = array();
    foreach($_SESSION['cart_back'] as $id=>$value){
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
        $quantity=$_SESSION['cart_back'][$result['dish_id']]['quantity'];
        $sub_total= ($result['dish_price']) * $quantity;
        // $dish_time = $result['dish_estimated_time'] * $quantity;
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
            echo "AND Time is " .($result['dish_estimated_time']) . " Minutes";
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


if (!empty($_SESSION['deal_back'])) 
{
    $ids_deal = array();
    foreach($_SESSION['deal_back'] as $id=>$value){
        array_push($ids_deal, $id);
    }


    $id_where_deal = implode(',', $ids_deal);
      
 
      // echo "<script>
      // alert($ids_deal);
      // </script>";

    $query1 = "SELECT * FROM deal WHERE deal_id IN ($id_where_deal)";

    $fetch1 = mysql_query($query1) or die(mysql_error());

    
    while($result1 = mysql_fetch_assoc($fetch1)  )
    {
        $quantity=$_SESSION['deal_back'][$result1['deal_id']]['quantity'];
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

echo "<div class='col-md-8'></div>";
    echo "<div class='col-md-4'>";
        echo "<div class='cart-row'>";
            echo "<h4 class='m-b-10px'>Total ({$item_count_final} items)</h4>";
            echo "<h4 class='m-b-10px'>Total Time ({$sub_time_final} Minutes)</h4>";
            echo "<h4>Rs." . number_format($total_final, 2, '.', ',') . "</h4>";
            echo "<a href='edit_order_save.php?item_count1={$item_count_final} & total1={$total_final} & sub_time_total={$sub_time_final}' class='btn btn-success m-b-10px'>";
                echo "<span class='glyphicon glyphicon-shopping-cart'></span> Proceed to Checkout";
            echo "</a>";
        echo "</div>";
    echo "</div>"; 

}
    ?>




 
<!--   <h2 style="font-size: 130%;">TO CONFORM YOUR ORDER FILL THE FORM BLOW</h2>
 --> 
  <?php
}
// $out =  join('\n', $data);

  ?>


  <!-- <form action="checkout_save.php" method="POST">  -->

 
                  
              </div>
            </div>
          </div>
        <!-- </div> -->

        <div class="desc span_3_of_2">
          <div class="price">
          </div>
<div class="add-cart">           
                   </div>   
                    
          
                 
          
        
        
      </div>
    
      </div>
    
    
    
    <div class="product_desc">  
    
    <br /><br />
      <div id="horizontalTab">
        <ul class="resp-tabs-list">
        
        
        
        </ul>
      
     </div>
   </div>
   
   
   
   
   
      <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>    
  

        </div>
        <div class="rightsidebar span_3_of_1">
          <h2>MENU</h2>
          <ul>
               <?php 
            include 'con_db.php';

            $query = "SELECT * FROM category";
            $fetch = mysql_query($query) or die(mysql_error());
            while ($result = mysql_fetch_assoc($fetch)) 
            {

              ?>

                <li><a href="mobile.php?nn=<?php echo $result['category_name'] ?>"><?php echo $result['category_name']?></a></li>

            <?php
            }
            ?>
            </ul>
            
              
        </div>
    </div>
  </div>
    </div>
 </div>
   <div class="footer">
      <div class="wrap">  
       <div class="section group">
      
      

      </div>      
        </div>
        <div class="copy_right">
        <p>All rights Reseverd | Design by  <a>SRS</a> </p>
       </div>
    </div>
   <script type="text/javascript">
    $(document).ready(function() {      
      $().UItoTop({ easingType: 'easeOutQuart' });
      
    });
  </script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

