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
      

     <!--  <div class="cart">
             <p>Welcome to our Online Store! <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 
              <ul class="dropdown">
              <li><?php
session_start();

// //var_dump($_SESSION['cart']);
// if (empty($_SESSION['cart']) && empty($_SESSION['deal'])) 
// {
//   $_SESSION['cart'] = array();
//   $_SESSION['deal'] = array();
//   echo "Cart is empty";
// }
// else
// {
//   include 'cart_s.php';
//             echo "<tr> <td> <br> <td><td>"; 
//               echo "<a  href='check_out_show.php'><input type='button' value='Show Order'></a>"; 
//                }?> 
              </li>
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
                error_reporting(0);
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
      
      <H1 style="font-size: 200%;">Checkout</H1>
          

          <?php
// start session
 
// connect to database
// include 'config/database.php';
 
// include objects
// include_once "objects/product.php";
// include_once "objects/product_image.php";
 
// get database connection
// $database = new Database();
// $db = $database->getConnection();
 
// initialize objects
// $product = new Product($db);
// $product_image = new ProductImage($db);
 
// set page title
// $page_title="Checkout";
 
// include page header html
// include 'layout_head.php';
 
 include 'con_db.php';
   $total=0;
    $item_count=0;
     $sub_time=0;

    $total_deal=0;
    $item_count_deal=0;
    $sub_time_deal=0;
$sub_time_deal1=0;
     
if (!empty($_SESSION['cart'])) 
{
  # code...
  if(count($_SESSION['cart'])>0)
  {
 
    // get the product ids
    $ids = array();
    foreach($_SESSION['cart'] as $id=>$value){
        array_push($ids, $id);
    }
 
    // $stmt=$product->readByIds($ids);
     
     echo "<br>";
    // print_r($ids);

    $id_where = implode(',', $ids);
    
 
    $query = "SELECT * FROM dish WHERE dish_id IN ($id_where)";

    $fetch = mysql_query($query) or die(mysql_error());

    $id_aa =  explode(' ', $id_where);
    while ($result = mysql_fetch_assoc($fetch))
    {
        // extract($row);
 
    $quantity=$_SESSION['cart'][$result['dish_id']]['quantity'];
        $sub_total=$result['dish_price']*$quantity;
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

 
        //echo "<div class='product-id' style='display:none;'>{$id}</div>";
        //echo "<div class='product-name'>{$name}</div>";
 
        // =================
        echo "<div class='row'>";
            echo "<div class='col-md-8'>";
 
                echo "<div class='product-name m-b-10px'><h3>{$result['dish_name']}</h3></div>";
                echo $quantity>1 ? "<div>{$quantity} items</div>" : "<div>{$quantity} item</div>";
 
            echo "</div>";
 
            echo "<div class='col-md-4'>";
                echo "<h4>&#36;" . number_format($result['dish_price'], 2, '.', ',') . "</h4>";
            echo "</div>";
            echo "<div class='col-md-4'>";
                echo "<h4>Time is : " .$result['dish_estimated_time']. " Minutes</h4>";
                 
            echo "</div>";
        echo "</div>";
        echo "<br>";
        
        // =================
        $sub_time += $dish_time;
        $item_count += $quantity;
        $total+=$sub_total;
    }

  }
   
else{
    echo "<div class='col-md-12'>";
        echo "<div class='alert alert-danger'>";
            echo "No products found in your cart!";
        echo "</div>";
    echo "</div>";
}

}

if (!empty($_SESSION['deal'])) 
{
  # code...
  if(count($_SESSION['deal'])>0)
  {
 
    // get the product ids
    $ids_deal = array();
    foreach($_SESSION['deal'] as $id=>$value){
        array_push($ids_deal, $id);
    }
 
    // $stmt=$product->readByIds($ids);
     
     echo "<br>";
    // print_r($ids);

    $id_where_deal = implode(',', $ids_deal);
    

    $query1 = "SELECT * FROM deal WHERE deal_id IN ($id_where_deal)";

    $fetch1 = mysql_query($query1) or die(mysql_error());

 // $id_aa =  explode(' ', $id_where);
    while ($result1 = mysql_fetch_assoc($fetch1))
    {
        // extract($row);
 
    $quantity=$_SESSION['deal'][$result1['deal_id']]['quantity'];
        $sub_total=$result1['deal_price']*$quantity;

 
        //echo "<div class='product-id' style='display:none;'>{$id}</div>";
        //echo "<div class='product-name'>{$name}</div>";
 
        // =================
        echo "<div class='row'>";
            echo "<div class='col-md-8'>";
 
                echo "<div class='product-name m-b-10px'><h3>{$result1['deal_name']}</h3></div>";
                echo $quantity>1 ? "<div>{$quantity} items</div>" : "<div>{$quantity} item</div>";
 
            echo "</div>";
 
            echo "<div class='col-md-4'>";
                echo "<h4>&#36;" . number_format($result1['deal_price'], 2, '.', ',') . "</h4>";
            echo "</div>";

            echo "<div class='col-md-4'>";
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
            // echo "$print_time" . "";
            
                echo "<h4>Time is : " .$print_time. " Minutes</h4>";
            echo "</div>";

        echo "</div>";
        echo "<br>";
        
        // =================
 
        $item_count_deal += $quantity;
        $total_deal+=$sub_total;
    }
  }

else{
    echo "<div class='col-md-12'>";
        echo "<div class='alert alert-danger'>";
            echo "No products found in your cart!";
        echo "</div>";
    echo "</div>";
}
}


 $item_count_final = $item_count + $item_count_deal;
$total_final = $total + $total_deal;
$sub_time_final = $sub_time + $sub_time_deal;
    // echo "<div class='col-md-8'></div>";
    echo "<div class='col-md-12 text-align-center'>";
        echo "<div class='cart-row'>";
            if($item_count_final>1){
                echo "<h4 class='m-b-10px'>Total ({$item_count_final} items)</h4>";
            }else{
                echo "<h4 class='m-b-10px'>Total ({$item_count_final} item)</h4>";
            }
            echo "<h4 class='m-b-10px'>Total Time ({$sub_time_final} Minutes)</h4>";
            echo "<h4>&#36;" . number_format($total_final, 2, '.', ',') . "</h4>";
            echo "<a href='mn.php?item_count1={$item_count_final} & total1={$total_final} & sub_time_total={$sub_time_final}' class='btn btn-lg btn-success m-b-10px'>";
 
                 

            echo "<span class='glyphicon glyphicon-shopping-cart'></span> Place Order";
            echo "</a>";
        echo "</div>";
    echo "</div>";
 

 
// include 'layout_foot.php';
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

