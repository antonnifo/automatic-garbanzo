<?php include '../includes/header.php'; ?>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li id="noPrint"><a href="index.php">Home</a><span>«</span></li>
									
									<li id="noPrint">Payments</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

<div class="inner_content_w3_agile_info two_in">
<h2 class="w3_inner_tittle">Manage Payments</h2>
<!-- tables -->
        
<div class="agile-tables">
<div class="w3l-table-info agile_info_shadow">
<input type="text" id="myInput" placeholder="Search..." title="Type in  something" class="noPrint" >
<button type="button" class="btn btn-primary btn-flat btn-pri" onclick="window.print()" id="noPrint"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
<!-- <button type="button" class="btn btn-primary btn-flat btn-pri" id="noPrint"><i class="fa fa-user" aria-hidden="true"></i>Add Tenant</button> -->
<a href="add_payment.php.php"class="btn btn-primary btn-flat btn-pri" id="noPrint"> <i class="fa fa-user"></i> Add Payment</a>
<table id="table-two-axis" class="two-axis">
<thead>
    <tr>
                        <th>Sr.no</th>
                        <th>Amount</th>
                        <th>Tenant</th>
                        <th>Purpose</th>
                        <th>Period</th>
                        <th>Mode</th>
                        <th>Code</th>
                        <th>Admin</th>
                        <th>Date</th>
            
                        <th></th>
                        <th></th>
    </tr>
</thead>
<tbody id="myTable">
        
<?php
                      $count = 1;
                      $sel_query = "SELECT * FROM payments  ORDER BY id Desc; ";
                      $result = mysqli_query($con, $sel_query);
                      confirm_query($result);
                      while ($row = mysqli_fetch_assoc($result)) { ?>

                      <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row["amount"]; ?></td>                
                        <td><?php echo $row["id_no"]; ?></td>
                        <td><?php echo $row["purpose"]; ?></td>
                        <td><?php echo $row["period"]; ?></td>
                        <td><?php echo $row["mode"]; ?></td>
                        <td><?php echo $row["code"]; ?></td>
                        <td><?php echo $row["added_by"]; ?></td>                
                        <td><?php echo $row["date"]; ?></td>                               
                        <td id="noPrint"><a href="edit_accused.php?id=<?php echo $row["adccused_id"]; ?>"class="btn btn-flat btn-pri btn-primary"> <i class="fa fa-pencil"></i> Edit</a> </td>
                        <td id="noPrint"><a href="delete_accused.php?id=<?php echo $row["accused_id"]; ?>"class="btn btn-flat btn-pri btn-danger"> <i class="fa fa-trash"></i> Delete </a> </td>
                      </tr>
                       <?php $count++;
                    } ?>
                </tr>
            </tbody>
            </table>


        </div>
</div>
<!-- //tables -->

</div>
<!-- //inner_content_w3_agile_info-->
</div>
<!-- //inner_content-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019-<?php echo date("Y"); ?> Kodi Rent Collectors. All Rights Reserved </p>
</div>	
<!--copy rights end here-->
<!-- js -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<script src="js/classie.js"></script>
<script src="js/gnmenu.js"></script>
<script>
new gnMenu( document.getElementById( 'gn-menu' ) );
</script>
<!-- tables -->

<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#table').basictable();

$('#table-breakpoint').basictable({
breakpoint: 768
});

$('#table-swap-axis').basictable({
swapAxis: true
});

$('#table-force-off').basictable({
forceResponsive: false
});

$('#table-no-resize').basictable({
noResize: true
});

$('#table-two-axis').basictable();

$('#table-max-height').basictable({
tableWrapper: true
});
});
</script>
<!-- //js -->
<script src="js/screenfull.js"></script>
<script>
$(function () {
$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

if (!screenfull.enabled) {
return false;
}



$('#toggle').click(function () {
screenfull.toggle($('#container')[0]);
});	
});
</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>