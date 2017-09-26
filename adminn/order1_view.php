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
    <title>View Orders</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    
<!-- refresh page after 1 minute -->
    
    
  <script type="text/javascript">
// setTimeout(onUserInactivity, 1000 * 10)
// function onUserInactivity() {
//    window.location.href = "order1_view.php"
// }
</script>

<script type="text/javascript">
// inactivityTimeout = False
// resetTimeout()
// function onUserInactivity() {
//    window.location.href = "onUserInactivity.php"
// }
// function resetTimeout() {
//    clearTimeout(inactivityTimeout)
//    inactivityTimeout = setTimeout(onUserInactivity, 1000 * 5)
// }
// window.onmousemove = resetTimeout
</script>

<script type="text/javascript">
// var idleTime = 0;
// $(document).ready(function () {
//     //Increment the idle time counter every minute.
//     var idleInterval = setInterval(timerIncrement, 60000); // 1 minute

//     //Zero the idle timer on mouse movement.
//     $(this).mousemove(function (e) {
//         idleTime = 0;
//     });
//     $(this).keypress(function (e) {
//         idleTime = 0;
//     });
// });

// function timerIncrement() {
//     idleTime = idleTime + 1;
//     if (idleTime > 1) { // 20 minutes
//         window.location.reload();
//     }
// }


var IDLE_TIMEOUT = 60; //seconds
var _idleSecondsTimer = null;
var _idleSecondsCounter = 0;

document.onclick = function() {
    _idleSecondsCounter = 0;
};

document.onmousemove = function() {
    _idleSecondsCounter = 0;
};

document.onkeypress = function() {
    _idleSecondsCounter = 0;
};

_idleSecondsTimer = window.setInterval(CheckIdleTime, 1000);

function CheckIdleTime() {
     _idleSecondsCounter++;
     var oPanel = document.getElementById("SecondsUntilExpire");
     if (oPanel)
         oPanel.innerHTML = (IDLE_TIMEOUT - _idleSecondsCounter) + "";
    if (_idleSecondsCounter >= IDLE_TIMEOUT) {
        window.clearInterval(_idleSecondsTimer);
        // alert("Time expired!");
        document.location.href = "order1_view.php";
    }
}
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
                                <a  href="category_add.php">Add a new Category</a>
                            </li>
                            <li>
                                <a href="category_view.php">View Category</a>
                            </li>
                            
                        </ul>
                      </li>  
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Deals<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="deal_add.php">Add a new deal</a>
                            </li>
                            <li>
                                <a href="deal_view.php">View deals</a>
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
                        <a  class="active-menu" href="order1_view.php"><i class="fa fa-bar-chart-o fa-3x"></i> Orders</a>
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
            
        </nav>  
        <!-- /. NAV SIDE  -->     <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Orders</h2> 
                        <h5>Welcome <?php echo $_SESSION["user1"]; ?>  , to order section </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="1%">ORDER ID</th>
                                            <th width="1%">ORDER AMOUNT</th>
                                            <th width="1%">ORDER TABLE</th>
                                            <th width="1%">ORDER TIME</th>
                                             <th width="1%">ORDER PLACE TIME</th>
                                            <th width="1%">ORDER STATUS</th>
                                            <th width="1%">ORDER TYPE</th>
                                            <th width="20%">DISH NAME'S</th> 
                                            <th width="1%">QUANTITY</th>
                                            <th width="1%">ORDER CANCEL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                       include('con_db.php');

                                        $query = "SELECT * FROM order1 " ;

                                        $result = mysql_query($query) or die(mysql_error());

                                        while ($records = mysql_fetch_assoc($result)) 
                                        {   
                                            $order_id_fix = $records['order_id']?>
                                            
                                        <tr class="odd gradeX">
                                            <td><?php echo $records['order_id'] ;?></td>
                                            <td><?php echo $records['order_amount'] ;?></td>
                                            <!-- style="white-space:pre" -->
                                            <td>
                                            <?php 
                                            $query1 = "SELECT table_number FROM devices where device_id='$records[order_table]'";
                                            $fetch1 = mysql_query($query1);
                                            $res = mysql_fetch_assoc($fetch1); 
                                            echo $res['table_number'];
                                            ?>
                                            </td>

                                             <td><?php echo $records['order_time'];?></td>
                                           <td><?php echo $records['order_place_time'];?></td>

                                            <td>
                                            <?php 
                                            $query1 = "SELECT status_title FROM order_status WHERE status_id=(SELECT order_status FROM order1 where order_id='$order_id_fix')";
                                            $fetch1 = mysql_query($query1) or die(mysql_error());
                                            $res = mysql_fetch_assoc($fetch1); 
                                            if ($res['status_title'] == 'inprocess') 
                                            {
                                              $pr = $res['status_title'];
                                            ?>
                                              <span style="color:#FF0000;text-align:center;"><?php echo $pr;?></span>
                                              <?php
                                            }
                                            else
                                            {
                                              echo $res['status_title'];
                                            }
                                            ?>
                                            </td>
                                           
                                           <td class="center">
                                            <?php 

                   
                                            $query2 = "SELECT order_type FROM order_dish WHERE order_id='$records[order_id]'";

                                            $fetch2 = mysql_query($query2) or die(mysql_error());

                                            while ($result2 = mysql_fetch_assoc($fetch2)) 
                                            {
                                                $query3 = "SELECT order_type_title FROM order_type where order_type_id='$result2[order_type]'";
                                                $fetch3 = mysql_query($query3) or die(mysql_error());

                                                while ($result3 = mysql_fetch_assoc($fetch3)) 
                                                {

                                                    echo $result3['order_type_title']."<br>";
                                                }                                            

                                            }

                                            
                                            ?>
                                            </td>
                                            <td class="center">
                                            <?php 
                                            // $query1 = "SELECT order_type_title FROM order_type where order_type_id=(SELECT order_type FROM order_dish where order_id='$order_id_fix' LIMIT 1)";
                                          
                                            // $order_type_name;
                                            // $order_type_id_show;
                                            
                                            $query1 = "SELECT item_id,order_type FROM order_dish where order_id='$order_id_fix'";
                                            $fetch1 = mysql_query($query1) or die(mysql_error());
                                            while ($res = mysql_fetch_assoc($fetch1)) 
                                            {
                                                if ($res['order_type'] == 1) 
                                                {
                                                    // $order_type_name = 'deal';
                                                    // $order_type_id_show = 'deal_id';
                                                    $query2 = "SELECT * FROM deal WHERE deal_id='$res[item_id]'";
                                                    $fetch2 = mysql_query($query2) or die(mysql_error());
                                                    while ($res2 = mysql_fetch_assoc($fetch2)) 
                                                    {
                                                        echo $res2['deal_name']."<br>";
                                                    }
                                                }
                                                elseif ($res['order_type'] == 2) 
                                                {
                                                    // $order_type_name = 'dish';
                                                    // $order_type_id_show = 'dish_id';
                                                    $query2 = "SELECT * FROM dish WHERE dish_id='$res[item_id]'";
                                                    $fetch2 = mysql_query($query2) or die(mysql_error());
                                                    while ($res2 = mysql_fetch_assoc($fetch2)) 
                                                    {
                                                        echo $res2['dish_name']."<br>";
                                                    }
                                                }
                                                    
                                            } 
                                            ?>

                                            </td>
                                            <td class="center">
                                            <?php 
                                            $query1 = "SELECT * FROM order_dish where order_id='$order_id_fix'";
                                            $fetch1 = mysql_query($query1) or die(mysql_error());
                                            while ($res = mysql_fetch_assoc($fetch1)) 
                                            {
                                                    echo $res['quantity']."<br>";
                                            } 
                                            ?>
                                            </td>



                                         
                                            


                                            
                                            
                                            
                                            

                                            <td class="center">
                                            <?php 
                                            if ($records['order_status'] == 1) 
                                            {
                                            ?>
                                                <a href="order_view_update_cancel.php?order_id1=<?php echo $order_id_fix ?>">CANCEL</a>
                                            
                                            <?php
                                            }
                                            elseif ($records['order_status'] == 2) {
                                                # code...
                                                echo "Order served by Chef";
                                            }
                                            else
                                            {
                                            ?>

                                            
                                            <?php
                                            }
                                            ?>

                                            </td>

                                        </tr>
                                       

                                       <?php }  ?>


                                     
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                
            
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
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
