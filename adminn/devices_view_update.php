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
                        <a href="#" ><i class="fa fa-sitemap fa-3x"></i> Deals<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a  href="deal_add.php">Add a new deal</a>
                            </li>
                            <li>
                                <a href="deal_view.php">View deals</a>
                            </li>
                            
                        </ul>
                      </li>  

                      <li>
                        <a href="#" ><i class="fa fa-sitemap fa-3x"></i> DISH<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="dish_add.php">Add a new DISH</a>
                            </li>
                            <li>
                                <a  href="dish_view.php">View DISH</a>
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
                        <a href="#" class="active-menu"><i class="fa fa-tablet fa-3x"></i> Devices<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="devices_add.php">Add Devices</a>
                            </li>
                            <li>
                                <a class="active-menu" href="devices_view.php"></i>View Devices</a>   
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
                     <h2>Update Device information </h2>   
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
                            Device Elements 
                        </div>

                        <?php 

                        $id = $_GET['id'];
                        include("con_db.php");

                        $query = "SELECT * From devices where device_id = ".$id;

                        $result1 = mysql_query($query) or die(mysql_error());

                        $result = mysql_fetch_assoc($result1);


                        ?>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Device Information</h3>
                                    <form role="form" action="devices_view_update_save.php" name="dataform" method="POST" enctype="multipart/form-data">


                                        <div class="form-group">
                                            <label>Device ID</label>
                                            <input class="form-control" readonly="readonly" name="device_id" value="<?php echo $result['device_id']; ?>" />
                                            <!-- <p class="help-block">Help text here.</p> -->
                                        </div>

                                        <div class="form-group">
                                            <label>Device MAC Address</label>
                                            <input class="form-control" name="mac_address" value="<?php echo $result['mac_address']; ?>" />
                                            <!-- <p class="help-block">Help text here.</p> -->
                                        </div>

                                        <div class="form-group">
                                            <label>Device Name</label>
                                            <input class="form-control"  name="table_number" value="<?php echo $result['table_number']; ?>"/>
                                        </div>
                                        
                                        
                                        <!-- <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" />
                                        </div>
 -->
                                      <!--   <div class="form-group">

                                            <label>Items catagory</label>
                                            <select class="form-control" name="dish_catagory">
                                                <option selected><?php 
                                            //     $query1 = "SELECT * FROM category where category_id='$result[dish_category]'";
                                            // $fetch1 = mysql_query($query1);
                                            // $res = mysql_fetch_assoc($fetch1); 
                                            //     echo $res['category_name']; ?>
                                            //     </option>
                                            //     <?php 
                                            //     include 'con_db.php';
                                            //     $query = "SELECT * FROM category";
                                            //     $fetch = mysql_query($query) or die(mysql_error());

                                            //     while ($result1 = mysql_fetch_assoc($fetch)) 
                                            //     {
                                                //     ?>
                                                //     <option value="<?php echo $result1['category_name']?>"><?php echo $result1['category_name']?></option>
                                                // <?php
                                                // }

                                                ?>
                                               
                                            </select>
                                            
                                        </div>


                                        <div class="form-group">
                                            <label>Items price</label>
                                            <input class="form-control"  name="dish_price" value="<?php echo $result['dish_price']; ?>"/>
                                        </div>
 -->
                                        <!-- <div class="form-group">
                                            <label>Label</label>
                                            <p class="form-control-static">info@yourdomain.com</p>
                                        </div>



                                        <div class="form-group">
                                            <label>Checkboxes</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" />Checkbox Example One
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Checkbox Example Two
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Checkbox Example Three
                                                </label>
                                            </div>
                                        </div> -->
                                    <!--     <div class="form-group">
                                            <label>Inline Checkboxes Examples</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox"/> One
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox"/> Two
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox"/> Three
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Radio Button Examples</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />Radio Example One
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"/>Radio Example Two
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"/>Radio Example Three
                                                </label>
                                            </div>
                                        </div> -->
                                        
                                       <!--  <div class="form-group">
                                            <label>Select Example</label>
                                            <select class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Multiple Select Example</label>
                                            <select multiple class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div> -->
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-primary">Reset Button</button>

                                   <!--  </form>
                                    <br />
                                      <h3>With radio & checkboxes</h3>
                                    <form> -->

    <!-- <div class="form-group input-group">
      <span class="input-group-addon">
        <input type="checkbox" />
      </span>
      <input type="text" class="form-control" />
    </div>
                                         <div class="form-group input-group">
      <span class="input-group-addon">
        <input type="radio" />
      </span>
      <input type="text" class="form-control" />
    </div>
                                    </form> -->

                                 
    </div>
                                
                                <!-- <div class="col-md-6">
                                    <h3>Disabled Form State Examples</h3>
                                    <form role="form">
                                        <fieldset disabled="disabled">
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled input</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled />
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled select </label>
                                                <select id="disabledSelect" class="form-control">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" />Disabled Checkbox
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Disabled Button</button>
                                        </fieldset>
                                    </form>
                                    <h3>Validation State Examples</h3>
                                    <form role="form">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Input with success</label>
                                            <input type="text" class="form-control" id="inputSuccess">
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Input with warning</label>
                                            <input type="text" class="form-control" id="inputWarning">
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Input with error</label>
                                            <input type="text" class="form-control" id="inputError">
                                        </div>
                                    </form>
                                    <h3>Input Group Examples</h3>
                                    <form role="form">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-eur"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Font Awesome Icon">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                    <h3>Different Size Input Groups</h3>
                                     <form role="form">
  <div class=" form-group input-group input-group-lg">
  <span class="input-group-addon">@</span>
  <input type="text" class="form-control" placeholder="Username" />
</div>

<div class="form-group input-group">
  <span class="input-group-addon">@</span>
  <input type="text" class="form-control" placeholder="Username" />
</div>

<div class="form-group input-group input-group-sm">
  <span class="input-group-addon">@</span>
  <input type="text" class="form-control" placeholder="Username" />
</div>
                                         
                                     </form>
                                    <h3>Different Size Input Groups</h3>
                                     <form role="form">
                                  <div class="input-group">
      <span class="form-group input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
      <input type="text" class="form-control" />
    </div>
<br />
                                           <div class="input-group">
     
      <input type="text" class="form-control" />
                                                <span class="form-group input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div>
                                         </form>
                                </div> -->
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