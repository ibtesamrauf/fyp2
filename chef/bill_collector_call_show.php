<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themetrace.com/demo/bracket/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Sep 2016 05:53:09 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>SRS CHEF PANEL</title>

  <link href="css/style.default.css" rel="stylesheet">
  <link href="css/jquery.datatables.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
<script type="text/javascript">
//   var IDLE_TIMEOUT = 60; //seconds
// var _idleSecondsTimer = null;
// var _idleSecondsCounter = 0;

// document.onclick = function() {
//     _idleSecondsCounter = 0;
// };

// document.onmousemove = function() {
//     _idleSecondsCounter = 0;
// };

// document.onkeypress = function() {
//     _idleSecondsCounter = 0;
// };

// _idleSecondsTimer = window.setInterval(CheckIdleTime, 1000);

// function CheckIdleTime() {
//      _idleSecondsCounter++;
//      var oPanel = document.getElementById("SecondsUntilExpire");
//      if (oPanel)
//          oPanel.innerHTML = (IDLE_TIMEOUT - _idleSecondsCounter) + "";
//     if (_idleSecondsCounter >= IDLE_TIMEOUT) {
//         window.clearInterval(_idleSecondsTimer);
//         // alert("Time expired!");
//         document.location.href = "index.php";
//     }
// }
</script>   
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>


<section>
  
  <div class="leftpanel">
    
    <div class="logopanel">
        <h1><span>[</span> Chef Panel <span>]</span></h1>
    </div><!-- logopanel -->
    
    <div class="leftpanelinner">
        
        <!-- This is only visible to small devices -->
        <!-- <div class="visible-xs hidden-sm hidden-md hidden-lg">   
            <div class="media userlogged">
                <img alt="" src="images/photos/loggeduser.png" class="media-object">
                <div class="media-body">
                    <h4>John Doe</h4>
                    <span>"Life is so..."</span>
                </div>
            </div>
          
            <h5 class="sidebartitle actitle">Account</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="profile.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
              <li><a href="#"><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
              <li><a href="#"><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
              <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div> -->


      <script>

// function showUser() {
//   // var str1 = document.getElementById("btn");
//   // var str = str1.value;
//   // var x = $("#std_roll").val();
//   // var xa = document.getElementById("txt1").value;
  
//     //  if (x == "") 
//     //  {
//     //     document.getElementById("txtHint").innerHTML = "";
//     //     return;
//     // } else
//      { 
//         if (window.XMLHttpRequest) {
//             // code for IE7+, Firefox, Chrome, Opera, Safari
//             xmlhttp = new XMLHttpRequest();
//         } else {
//             // code for IE6, IE5
//             xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//         }
//         xmlhttp.onreadystatechange = function() {
//             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//                 document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
//             }
//         };
//         xmlhttp.open("GET","show_new_order.php",  true);
//         xmlhttp.send();
//     }
// }
// setInterval(function(){
//     showUser() // this will run after every 5 seconds
// }, 5000);
 </script>



      <h5 class="sidebartitle">Navigation</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
        <!-- <li ><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li> -->
           <li ><a href="index.php"><!-- <span class="pull-right badge badge-success">2</span> --><i class="fa fa-home"></i> <span>Orders</span></a></li>
<li class="active"><a href="bill_collector_call_show.php"><!-- <span class="pull-right badge badge-success">2</span> --><i class="fa fa-th-list"></i> <span>Call Bill Collector</span></a></li>

      </ul>
      


      
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
  
  <div class="mainpanel">
    
    <div class="headerbar">
      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
      <form class="searchform" action="http://themetrace.com/demo/bracket/index.html" method="post">
        <!-- <input type="text" class="form-control" name="keyword" placeholder="Search here..." /> -->
      </form>
      
      <div class="header-right">
        <ul class="headermenu">
       

          </li>
         
        </ul> 
    </div> 
      <!-- header-right -->
      
    </div><!-- headerbar -->
        
    <div class="pageheader">
      <h2><i class="fa fa-table"></i> Orders <!-- <span>Subtitle goes here...</span> --></h2>
      <!-- <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="index.html">Bracket</a></li>
          <li class="active">Tables</li>
        </ol>
       </div>-->
    </div>

    <script>

function showUser() {
  // var str1 = document.getElementById("btn");
  // var str = str1.value;
  // var x = $("#std_roll").val();
  // var xa = document.getElementById("txt1").value;
  
     // if (x == "") 
     // {
     //    document.getElementById("txtHint").innerHTML = "";
     //    return;
    // } else 
    { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","bill_collector_call_show_ajax.php",  true);
        xmlhttp.send();
    }
}
setInterval(function(){
    showUser() // this will run after every 5 seconds
}, 1000);
 </script>
    
    <!-- <div class="modal fade" id="myModal"> -->

    <!-- <div class="contentpanel"> -->
      <div id="txtHint">
        
      <!-- </div> -->
</div>
            <!-- </div>/.modal -->
  
    
  </div><!-- mainpanel -->
  
  <div class="rightpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a href="#rp-alluser" data-toggle="tab"><i class="fa fa-users"></i></a></li>
        <li><a href="#rp-favorites" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
        <li><a href="#rp-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
        <li><a href="#rp-settings" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
    </ul>
        

  </div><!-- rightpanel -->
  
</section>


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.cookies.js"></script>


<script src="js/jquery.datatables.min.js"></script>
<script src="js/select2.min.js"></script>

<script src="js/custom.js"></script>
<script>
  jQuery(document).ready(function() {
    
    "use strict";
    
    jQuery('#table1').dataTable();
    
    jQuery('#table2').dataTable({
      "sPaginationType": "full_numbers"
    });
    
    // Select2
    jQuery('select').select2({
        minimumResultsForSearch: -1
    });
    
    jQuery('select').removeClass('form-control');
    
    // Delete row in a table
    jQuery('.delete-row').click(function(){
      var c = confirm("Continue delete?");
      if(c)
        jQuery(this).closest('tr').fadeOut(function(){
          jQuery(this).remove();
        });
        
        return false;
    });
    
    // Show aciton upon row hover
    jQuery('.table-hidaction tbody tr').hover(function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 1});
    },function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 0});
    });
  
  
  });
</script>

<!-- <script src="js/jquery-2.2.2.min.js"></script>  -->
<!-- <script src="js/bootstrap.min.js"></script>  -->
<!-- <script src="js/jquery.waypoints.min.js"></script>  -->
<!-- <script src="js/jquery.counterup.min.js"></script>  -->
<!-- <script src="js/twitterFetcher.min.js"></script>  -->
<!-- <script src="js/retina.min.js"></script><script src="js/custom-color-switcher.js"></script>  -->
<!-- <script src="js/main.js"></script> -->
<!-- <script src="select/JS/bootstrap-datepicker.js"></script> -->
<!-- <script src="select/JS/bootstrap-select1.min.js"></script> -->
<!-- <script src="js/bootstrapValidator.min.js"></script> -->
<!-- <script src="js/jquery.masked-input.js"></script> -->

</body>

<!-- Mirrored from themetrace.com/demo/bracket/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Sep 2016 05:53:09 GMT -->
</html>
