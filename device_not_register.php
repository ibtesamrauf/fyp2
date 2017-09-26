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
      

      <div class="cart">
           <p>Welcome to Smart Restaurant Services!  <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 
                <ul class="dropdown">
              <li>
              <?php
session_start();

//var_dump($_SESSION['cart']);
if (empty($_SESSION['cart']) && empty($_SESSION['deal'])) 
{
  // if (empty($_SESSION['deal'])) {
  $_SESSION['cart'] = array();
  $_SESSION['deal'] = array();
  echo "Cart is empty index";
  // }
  
}
else
{
  include 'cart_s.php';
 // include('check_out.php');
              echo "<tr> <td> <br> <td><td>"; 
              echo "<a  href='check_out_show.php'><input type='button' value='Show Order'></a>"; 
// include 'check_test.php';
}
?>  
              </li>
          </ul></div></p>
        </div>
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


 
 include 'con_db.php';


 

?>

       <?php
 

$page_title="Thank You!";
 
// include page header HTML
// include_once 'layout_head.php';
$flag = $_GET['flag'];

 if ($flag==3) 
 {
   # code...
  echo "<div class='col-md-12'>";
  // tell the user order has been placed
    echo "<div class='alert alert-danger'>";
        echo "<strong>Your device is not register!</strong> Please contact magement!";
        // echo "<strong><br>Now you can edit your order from ORDER EDIT tab,</strong> if you want to place a new order you can order simply from menu. ";
        
    echo "</div>";
  echo "</div>";
 }

 

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

