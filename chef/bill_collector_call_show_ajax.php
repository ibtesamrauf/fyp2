
      
  <div class="contentpanel">   

      <h5 class="subtitle mb5">Order Tables</h5>
          <p class="mb20">All orders details for chef </p>
          
      
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-btns">
            <!-- <a href="#" class="panel-close">&times;</a> -->
            <a href="#" > </a>
          </div><!-- panel-btns -->
          <h3 class="panel-title">Order Details</h3>
          <p>All details of customer order including order time, table number and price as well</p>
        </div>
        <div class="panel-body">
          <!-- <h5 class="subtitle mb5">Basic Table</h5> -->
          <!-- <p class="m20">Including order time, table number and price as well</p> -->
          <br />
          <div class="table-responsive">
            <table width="100%" class="table" id="table1">
              <thead>
                 <tr>
                                            <th>BILL COLLECTOR ID</th>
                                            <th>TABLE NUMBER</th>
                                            <th>TIME OF CALL</th>
                  </tr>
              </thead>
              <tbody>
                 <?php 
                 		
                                       include('con_db.php');

                                        $query = "SELECT * FROM bill_collector" ;

                                        $result = mysql_query($query) or die(mysql_error());

                                        while ($records = mysql_fetch_assoc($result)) 
                                        {   
                                            // $order_id_fix = $records['order_id'];
                                        

							   ?>
												                    <tr class="odd gradeX">
		                                            <td><?php echo $records['bill_collector_id']; ?></td>
                                                <td><?php echo $records['table_number']; ?></td>
                                                <td><?php echo $records['time']; ?></td>
		                                        </tr>
	                                        
                <?php 
                                       }  
                ?>


                                     
              </tbody>
           </table>
          </div><!-- table-responsive -->
          <div class="clearfix mb30"></div>
          
          
        </div><!-- panel-body -->
      </div><!-- panel -->
      </div>
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
