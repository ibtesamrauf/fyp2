<?php
      session_start();
$abc = $_SESSION["user1"];
      if($abc = $_SESSION["user1"])
      {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dish Update</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />



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
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php" style=""><?php $str = strtoupper($_SESSION["user1"]); echo $str;  ?></a> 
                </div>

                <script type="text/javascript">
                tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
                tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

                function GetClock()
                {
                    var d=new Date();
                    var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
                    if(nyear<1000) nyear+=1900;
                    var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

                    if(nhour==0){ap=" AM";nhour=12;}
                    else if(nhour<12){ap=" AM";}
                    else if(nhour==12){ap=" PM";}
                    else if(nhour>12){ap=" PM";nhour-=12;}

                    if(nmin<=9) nmin="0"+nmin;
                    if(nsec<=9) nsec="0"+nsec;

                    document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" And Time is "+nhour+":"+nmin+":"+nsec+ap+"  ";
                }

                window.onload=function()
                {
                    GetClock();
                    setInterval(GetClock,1000);
                }
                </script>



  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;" >  &nbsp;
  <span id="clockbox" style="padding-right:15px" ></span>
    <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> 
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                
                    <li>
                        <a href="dashboard.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                   <!--   <li>
                        <a  href="category.php"><i class="fa fa-desktop fa-3x"></i> Category</a>
                    </li>
                     --><li>
                        <a href="#" ><i class="fa fa-desktop fa-3x"></i> Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="category_add.php">Add a new Category</a>
                            </li>
                            <li>
                                <a href="category_view.php">View Category</a>
                            </li>
                            
                        </ul>
                      </li>  
                    <li>
                        <a href="#" class="active-menu"><i class="fa fa-sitemap fa-3x"></i> Deals<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a  href="deal_add.php">Add a new deal</a>
                            </li>
                            <li>
                                <a class="active-menu" href="deal_view.php">View deals</a>
                            </li>
                            
                        </ul>
                      </li>  

                      <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> DISH<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="dish_add.php">Add a new DISH</a>
                            </li>
                            <li>
                                <a href="dish_view.php">View DISH</a>
                            </li>
                            
                        </ul>
                      </li>  
                    
                    <!-- <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Dishes</a>
                    </li>
                     -->
                     <li>
                        <a   href="order1_view.php"><i class="fa fa-bar-chart-o fa-3x"></i> Orders</a>
                    </li>

                    <!-- <li>
                        <a   href="view_devices.php"><i class="fa fa-tablet fa-4x"></i> Devices</a>
                    </li> -->

                     <li>
                        <a href="#"><i class="fa fa-tablet fa-3x"></i> Devices<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="devices_add.php">Add Devices</a>
                            </li>
                            <li>
                                <a href="devices_view.php"></i>View Devices</a>   
                            </li>
                            
                        </ul>
                      </li>  

                </ul>
               
            </div>
            
        </nav>        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add New Items </h2>   
                        <h5>Welcome <?php echo $_SESSION["user1"]; ?> , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Deals Elements 
                        </div>

                        <?php 

                        $id = $_GET['id'];
                        include("con_db.php");

                        $query = "SELECT * From deal where deal_id = ".$id;

                        $fetch = mysql_query($query) or die(mysql_error());

                        $result = mysql_fetch_assoc($fetch);

                        
                        ?>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Basic Item Information</h3>
                                       <div class="form-group">
                                        <label>Dishes List</label>
                                            <table width="100%" >
                                                <?php 
                                                $query1 = "SELECT * FROM deal_menu where deal_id=".$id;
                                                $fetch1 = mysql_query($query1) or die(mysql_error());
                                                while ($result1 = mysql_fetch_assoc($fetch1)) 
                                                {
                                                    $query2 = "SELECT * FROM dish where dish_id=".$result1['dish_id'];
                                                    $fetch2 = mysql_query($query2) or die(mysql_error());
                                                    $result2 = mysql_fetch_assoc($fetch2)
                                                    ?>

                                    					<!--echo "<form class='update-quantity-form' >";
                                                        echo "<input type='number' name='quantity' value='{$quantity}' class='cart-quantity' min='1' id='quantity' />";
                                                        echo "<span style='padding-left: 10px;'>";
                                                        echo "<button  class='btn btn-default update-quantity' type='submit'>Update</button>";
                                                        -->
                                                    <tr>
                                                        <td width="40%"><?php echo $result2['dish_name']?></td>
                                                        <form  name="abcd" action="deal_view_update_quantity_save.php?id=<?php echo $result2['dish_id'];?>&deal_id1=<?php echo $id?>" method="POST">
                                                        <td width="20%">
                                                        <?php
                                                    // echo "<form class='update-quantity-form' >";
                                                    //     echo "<div class='product-id' style='display:none;'><h4 id='$result1[dish_id]'>{$result['dish_id']}</h4></div>";

                                                    //      echo "<div class='input-group'>";
   
                                                    //     echo "<input type='number' name='quantity' value='{$result1['quantity']}' class='cart-quantity' min='1' id='quantity' />";
                                                    //     echo "<span style='padding-left: 10px;'>";
                                                    //     echo "<button  class='btn btn-default update-quantity' type='submit' '>Update11</button>";
                                                    //                 echo "</div>";

                                                    //     echo "</form>";
                                                        ?>
                                                       <!--  <input type="hidden" id="dish_id1" name="dish_id1" value="<?php echo $result2['dish_id']; ?>">
                                                        <input type="number"  id="update_quantity" name="update_quantity" >

                                                        <input type="button" value="update new" onclick="data_go">
                                                        -->                                     
                                                        <input type="number" min="1" name="update_quantity"  value="<?php echo $result1['quantity']?>" >
                                                        
                                                        </td>
                                                        <td width="20%" style="padding-left:2%">
                                                        <input type="submit" value="UPDATE">
                                                        
                                                        </td >
                                                        </form>
                                                        
                                                        <td  width="20%" class="center"><input type="button" value="DELETE" onClick="window.location.href='deal_view_item_delete.php?dish_id1=<?php echo $result2['dish_id'] ?> & deal_id1=<?php echo $result1['deal_id'] ?>';">
                                                        </td>

                                                    </tr>
                                                         
                                                    <?php   
                                                }
                                                ?>
                                            </table>
                                                
                                        </div>
                                    <form role="form" action="deal_view_update_save.php" name="dataform" method="POST" enctype="multipart/form-data">


                                        <div class="form-group">
                                            <label>Deal ID</label>
                                            <input class="form-control" readonly name="deal_id" value="<?php echo $result['deal_id'];  ?>" />
                                            <!-- <p class="help-block">Help text here.</p> -->
                                        </div>

                                        <div class="form-group">
                                            <label>Deal Name</label>
                                            <input class="form-control" name="deal_name" value="<?php echo $result['deal_name']; ?>" />
                                            <!-- <p class="help-block">Help text here.</p> -->
                                        </div>

                                        <div class="form-group">
                                            <label>Deal Price</label>
                                            <input    class="form-control" rows="3"  name="deal_price" value="<?php echo $result['deal_price'];?>" >
                                        </div>
                                        
                                        
                                        <!-- <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" />
                                        </div> -->
                                        <br>

                                        <br>
                                        <div class="form-group">
                                            <label>ITEMS</label><br>
                                            <?php 
                                                $query1 = "SELECT * FROM dish WHERE dish_id NOT IN (SELECT dish_id FROM deal_menu where deal_id='$id')";
                                                $fetch1 = mysql_query($query1) or die(mysql_error());
                                                while ($result1 = mysql_fetch_assoc($fetch1)) 
                                                {
                                            ?>
                                                  
                                                     
                                                     <table width="100%">
                                                     <tr>
                                                         <td width="50%">
                                                         
                                                             <input  type="checkbox"  name="check_list[]" onclick="document.getElementById('<?php echo $result1['dish_id']?>').disabled=!this.checked;" value="<?php echo $result1['dish_id']?>" >  
                                                             <label> <?php echo " ".$result1['dish_name']?></label>
                                                          </td>  
                                                          <!-- onclick="document.getElementById('1').disabled=!this.checked;"   getElementByID("txtText").enabled -->
                                                         <td width="18%">
                                                             <label>&nbsp&nbsp&nbspQUANTITY</label>
                                                         </td>
                                                         <td width="20%">
                                                             <input type="number" min="1"  disabled="true" id="<?php echo $result1['dish_id']?>"   class="form-control" name="check_list1[]" ><br/>                                                         
                                                         </td>
                                                     </tr>
                                                 </table>
                                            <?php  
                                                }
                                            ?>
                                            <!-- <input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++</label><br/> -->

                                        </div>

                                       
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-primary">Reset Button</button>

                                   
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
<?php 
}
else
    echo "<script>;
        window.location.href='index.php';
        </script>";
?>