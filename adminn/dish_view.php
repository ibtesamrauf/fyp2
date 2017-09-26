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
    <title>View Dishes</title>
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
                        <a href="#"  ><i class="fa fa-desktop fa-3x"></i> Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a   href="category_add.php">Add a new Category</a>
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
                        <a href="#" class="active-menu"><i class="fa fa-sitemap fa-3x"></i> DISH<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="dish_add.php">Add a new DISH</a>
                            </li>
                            <li>
                                <a class="active-menu" href="dish_view.php">View DISH</a>
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
            
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>DISHES</h2> 
                        <h5>Welcome <?php echo $_SESSION["user1"]; ?>  , to dish section </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Dish Tables
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>DISH ID</th>
                                            <th>DISH Name</th>
                                            <th>DISH PRICE</th>
                                            <th>DISH ESTIMATED TIME</th>
                                            <th>DISH CATEGORY</th>
                                              <th>DISH DESC</th>
                                            <th>DISH IMAGE</th>
                                              <th>EDIT</th>
                                            <th>DELETE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        include('con_db.php');

                                        $query = "SELECT * FROM dish" ;

                                        $result = mysql_query($query);

                                        while ($records = mysql_fetch_assoc($result)) 
                                        {   ?>
                                            
                                        <tr class="odd gradeX">
                                            <td><?php echo $records['dish_id'] ;?></td>
                                            <td><?php echo $records['dish_name'] ;?></td>
                                            <td style="white-space:pre"><?php echo $records['dish_price'] ;?></td>
                                            <td class="center"><?php echo $records['dish_estimated_time'] ;?></td>
                                            <td class="center"><?php 
                                            $query1 = "SELECT * FROM category where category_id='$records[dish_category]'";
                                            $fetch1 = mysql_query($query1);
                                            $res = mysql_fetch_assoc($fetch1); 
                                                echo $res['category_name'];
                                            ?>
                                            </td>
                                            <td class="center"><?php echo $records['dish_desc'] ;?></td>
                                            <td class="center"><?php $abc = "../".$records['dish_image_url'] ;?>
                                            <img  src="<?php echo $abc;?>" style="width:160px;height:200px;">
                                            <br>
                                            <input type="button" value="Update Image" onClick="window.location.href='dish_view_image_update.php?id=<?php echo $records['dish_id'] ?>';">
                                            </td>
                                            <td class="center"><input type="button" value="EDIT" onClick="window.location.href='dish_view_update.php?id=<?php echo $records['dish_id'] ?>';"></td>
                                            <td class="center"><input type="button" value="DELETE" onClick="window.location.href='dish_view_delete.php?id=<?php echo $records['dish_id'] ?>';"></td>
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
