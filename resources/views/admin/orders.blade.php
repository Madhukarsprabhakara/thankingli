<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Smarty Admin</title>
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="assets-admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="assets-admin/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets-admin/css/layout.css" rel="stylesheet" type="text/css" />
		<link href="assets-admin/css/color_scheme/blue.css" rel="stylesheet" type="text/css" id="color_scheme" />

		<!-- PAGE LEVEL STYLES -->
		<link href="assets-admin/css/layout-datatables.css" rel="stylesheet" type="text/css" />

	</head>
	<!--
		.boxed = boxed version
	-->
	<body>


		<!-- WRAPPER -->
		<div id="wrapper">

			<!-- 
				ASIDE 
				Keep it outside of #wrapper (responsive purpose)
			-->
			@include('admin.admin-side-panel')
			<!-- /ASIDE -->


			<!-- HEADER -->
			<header id="header">

				<!-- Mobile Button -->
				<button id="mobileMenuBtn"></button>

				<!-- Logo -->
				<span class="logo pull-left">
					<img src="assets-admin/images/logo_light.png" alt="admin panel" height="35" />
				</span>

				

				<nav>

					<!-- OPTIONS LIST -->
					<ul class="nav pull-right">

						<!-- USER OPTIONS -->
						<li class="dropdown pull-left">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<img class="user-avatar" alt="" src="assets-admin/images/noavatar.jpg" height="34" /> 
								<span class="user-name">
									<span class="hidden-xs">
										John Doe <i class="fa fa-angle-down"></i>
									</span>
								</span>
							</a>
							<ul class="dropdown-menu hold-on-click">
								<li><!-- my calendar -->
									<a href="calendar.html"><i class="fa fa-calendar"></i> Calendar</a>
								</li>
								<li><!-- my inbox -->
									<a href="#"><i class="fa fa-envelope"></i> Inbox
										<span class="pull-right label label-default">0</span>
									</a>
								</li>
								<li><!-- settings -->
									<a href="page-user-profile.html"><i class="fa fa-cogs"></i> Settings</a>
								</li>

								<li class="divider"></li>

								<li><!-- lockscreen -->
									<a href="page-lock.html"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li><!-- logout -->
									<a href="page-login.html"><i class="fa fa-power-off"></i> Log Out</a>
								</li>
							</ul>
						</li>
						<!-- /USER OPTIONS -->

					</ul>
					<!-- /OPTIONS LIST -->

				</nav>

			</header>
			<!-- /HEADER -->


			<!-- 
				MIDDLE 
			-->
			<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>Orders</h1>
					
				</header>
				<!-- /page title -->


				<div id="content" class="padding-20">

					<!-- 
						PANEL CLASSES:
							panel-default
							panel-danger
							panel-warning
							panel-info
							panel-success

						INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
								All pannels should have an unique ID or the panel collapse status will not be stored!
					-->
					<div id="panel-1" class="panel panel-default">
						<div class="panel-heading">
							<span class="title elipsis">
								<strong>Order details</strong> <!-- panel title -->
							</span>

							<!-- right options -->
							<ul class="options pull-right list-inline">
								<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
								<li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
								<li><a href="#" class="opt panel_close" data-confirm-title="Confirm" data-confirm-message="Are you sure you want to remove this panel?" data-toggle="tooltip" title="Close" data-placement="bottom"><i class="fa fa-times"></i></a></li>
							</ul>
							<!-- /right options -->

						</div>

						<!-- panel content -->
						<div class="panel-body">

							<!--
								Example: ADD TO YOUR cutoms.css to position buttons
								div.tabletools-topbar {
									margin-top:-56px;
									margin-right:130px;
								}
								Change for your needs - especially: margin-right , accroding to panel bar buttons!
							-->
							<table class="table table-striped table-bordered table-hover" id="sample_1">
								<thead>
									<tr>
										<th>
											 Shop Id
										</th>
										<th>
											 Product Id
										</th>
										<th>
											 Purchase Code
										</th>
										<th>
											 Name
										</th>
										<th>
											 U(n)sed
										</th>
									</tr>
								</thead>
								<tbody>
								@foreach ($allOrders as $order)
									<tr>
										<td>
											 {{$order->shop_id}}
										</td>
										<td>
											 {{$order->product_id}}
										</td>
										<td>
											 {{$order->purchase_code}}
										</td>
										<td>
											 {{$order->to_name}}
										</td>
										
										
										@if ($order->used_code_flag==1)
										<td>
											<label class="switch switch-success switch-round">
	<input type="checkbox" checked="">
	<span class="switch-label" data-on="YES" data-off="NO"></span>
</label>
										</td>		
											  @else
										<td>
										<input type="checkbox" checked="yes">
											<span class="switch-label" data-on="YES" data-off="NO"></span>
											<!-- 
<span class="label label-sm label-warning">
												UnUsed </span>
 -->
										</td>
										@endif		
										
									</tr>
								@endforeach	
									
								</tbody>
							</table>

						</div>
						<!-- /panel content -->

						<!-- panel footer -->
						<div class="panel-footer">



						</div>
						<!-- /panel footer -->

					</div>
					<!-- /PANEL -->


					<!-- 
						PANEL CLASSES:
							panel-default
							panel-danger
							panel-warning
							panel-info
							panel-success

						INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
								All pannels should have an unique ID or the panel collapse status will not be stored!
					-->
					
					<!-- /PANEL -->


					<!-- 
						PANEL CLASSES:
							panel-default
							panel-danger
							panel-warning
							panel-info
							panel-success

						INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
								All pannels should have an unique ID or the panel collapse status will not be stored!
					-->
					
					<!-- /PANEL -->


					<!-- 
						PANEL CLASSES:
							panel-default
							panel-danger
							panel-warning
							panel-info
							panel-success

						INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
								All pannels should have an unique ID or the panel collapse status will not be stored!
					-->
					
					<!-- /PANEL -->


					<!-- 
						PANEL CLASSES:
							panel-default
							panel-danger
							panel-warning
							panel-info
							panel-success

						INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
								All pannels should have an unique ID or the panel collapse status will not be stored!
					-->
					
					<!-- /PANEL -->


				</div>
			</section>
			<!-- /MIDDLE -->

		</div>



	
		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets-admin/plugins/';</script>
		<script type="text/javascript" src="assets-admin/plugins/jquery/jquery-2.2.3.min.js"></script>
		<script type="text/javascript" src="assets-admin/js/app.js"></script>

		<!-- PAGE LEVEL SCRIPTS -->
		<script type="text/javascript">
			loadScript(plugin_path + "datatables/js/jquery.dataTables.min.js", function(){
				loadScript(plugin_path + "datatables/js/dataTables.tableTools.min.js", function(){
					loadScript(plugin_path + "datatables/js/dataTables.colReorder.min.js", function(){
						loadScript(plugin_path + "datatables/js/dataTables.scroller.min.js", function(){
							loadScript(plugin_path + "datatables/dataTables.bootstrap.js", function(){
								loadScript(plugin_path + "select2/js/select2.full.min.js", function(){

									if (jQuery().dataTable) {

										// Datatable with TableTools
										function initTable1() {
											var table = jQuery('#sample_1');

											/* Table tools samples: https://www.datatables.net/release-datatables/extras/TableTools/ */

											/* Set tabletools buttons and button container */

											jQuery.extend(true, jQuery.fn.DataTable.TableTools.classes, {
												"container": "btn-group pull-right tabletools-topbar",
												"buttons": {
													"normal": "btn btn-sm btn-default",
													"disabled": "btn btn-sm btn-default disabled"
												},
												"collection": {
													"container": "DTTT_dropdown dropdown-menu tabletools-dropdown-menu"
												}
											});

											var oTable = table.dataTable({
												"order": [
													[0, 'asc']
												],
												
												"lengthMenu": [
													[5, 15, 20, -1],
													[5, 15, 20, "All"] // change per page values here
												],
												// set the initial value
												"pageLength": 10,

												"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

												"tableTools": {
													"sSwfPath": plugin_path + "datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
													"aButtons": [{
														"sExtends": "pdf",
														"sButtonText": "PDF"
													}, {
														"sExtends": "csv",
														"sButtonText": "CSV"
													}, {
														"sExtends": "xls",
														"sButtonText": "Excel"
													}, {
														"sExtends": "print",
														"sButtonText": "Print",
														"sInfo": 'Please press "CTR+P" to print or "ESC" to quit',
														"sMessage": "Generated by DataTables"
													}]
												}
											});

											var tableWrapper = jQuery('#sample_1_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper

											tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
										}

										// Datatable with TableTools
										function initTable2() {
											var table = jQuery('#sample_2');

											/* Table tools samples: https://www.datatables.net/release-datatables/extras/TableTools/ */

											/* Set tabletools buttons and button container */

											jQuery.extend(true, jQuery.fn.DataTable.TableTools.classes, {
												"container": "btn-group tabletools-btn-group pull-right",
												"buttons": {
													"normal": "btn btn-sm btn-default",
													"disabled": "btn btn-sm btn-default disabled"
												}
											});

											var oTable = table.dataTable({
												"order": [
													[0, 'asc']
												],
												"lengthMenu": [
													[5, 15, 20, -1],
													[5, 15, 20, "All"] // change per page values here
												],

												// set the initial value
												"pageLength": 10,
												"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

												"tableTools": {
													"sSwfPath":plugin_path +  "datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
													"aButtons": [{
														"sExtends": "pdf",
														"sButtonText": "PDF"
													}, {
														"sExtends": "csv",
														"sButtonText": "CSV"
													}, {
														"sExtends": "xls",
														"sButtonText": "Excel"
													}, {
														"sExtends": "print",
														"sButtonText": "Print",
														"sInfo": 'Please press "CTRL+P" to print or "ESC" to quit',
														"sMessage": "Generated by DataTables"
													}, {
														"sExtends": "copy",
														"sButtonText": "Copy"
													}]
												}
											});

											var tableWrapper = jQuery('#sample_2_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
											tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
										}

										// Show/Hide Columns
										function initTable3() {
											var table = jQuery('#sample_3');

											/* Formatting function for row expanded details */
											function fnFormatDetails(oTable, nTr) {
												var aData = oTable.fnGetData(nTr);
												var sOut = '<table>';
												sOut += '<tr><td>Platform(s):</td><td>' + aData[2] + '</td></tr>';
												sOut += '<tr><td>Engine version:</td><td>' + aData[3] + '</td></tr>';
												sOut += '<tr><td>CSS grade:</td><td>' + aData[4] + '</td></tr>';
												sOut += '<tr><td>Others:</td><td>Could provide a link here</td></tr>';
												sOut += '</table>';

												return sOut;
											}

											/*
											 * Insert a 'details' column to the table
											 */
											var nCloneTh = document.createElement('th');
											nCloneTh.className = "table-checkbox";
											
											var nCloneTd = document.createElement('td');
											nCloneTd.innerHTML = '<span class="row-details row-details-close"></span>';

											table.find('thead tr').each(function () {
												this.insertBefore(nCloneTh, this.childNodes[0]);
											});

											table.find('tbody tr').each(function () {
												this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
											});

											var oTable = table.dataTable({
												"columnDefs": [{
													"orderable": false,
													"targets": [0]
												}],
												"order": [
													[1, 'asc']
												],
												"lengthMenu": [
													[5, 15, 20, -1],
													[5, 15, 20, "All"] // change per page values here
												],
												// set the initial value
												"pageLength": 10,
											});

											var tableWrapper = jQuery('#sample_4_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
											var tableColumnToggler = jQuery('#sample_4_column_toggler');

											/* modify datatable control inputs */
											tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown

											/* Add event listener for opening and closing details
											 * Note that the indicator for showing which row is open is not controlled by DataTables,
											 * rather it is done here
											 */
											table.on('click', ' tbody td .row-details', function () {
												var nTr = jQuery(this).parents('tr')[0];
												if (oTable.fnIsOpen(nTr)) {
													/* This row is already open - close it */
													jQuery(this).addClass("row-details-close").removeClass("row-details-open");
													oTable.fnClose(nTr);
												} else {
													/* Open this row */
													jQuery(this).addClass("row-details-open").removeClass("row-details-close");
													oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
												}
											});

											/* handle show/hide columns*/
											jQuery('input[type="checkbox"]', tableColumnToggler).change(function () {
												/* Get the DataTables object again - this is not a recreation, just a get of the object */
												var iCol = parseInt(jQuery(this).attr("data-column"));
												var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
												oTable.fnSetColumnVis(iCol, (bVis ? false : true));
											});
										}

										// Scroller
										function initTable4() {

											var table = jQuery('#sample_4');

											/* Fixed header extension: http://datatables.net/extensions/scroller/ */

											var oTable = table.dataTable({
												"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // datatable layout without  horizobtal scroll
												"scrollY": "300",
												"deferRender": true,
												"order": [
													[0, 'asc']
												],
												"lengthMenu": [
													[5, 15, 20, -1],
													[5, 15, 20, "All"] // change per page values here
												],
												"pageLength": 10 // set the initial value            
											});


											var tableWrapper = jQuery('#sample_5_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
											tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
										}

										// Columns Reorder
										function initTable5() {

											var table = jQuery('#sample_5');

											/* Fixed header extension: http://datatables.net/extensions/keytable/ */

											var oTable = table.dataTable({
												"order": [
													[0, 'asc']
												],
												"lengthMenu": [
													[5, 15, 20, -1],
													[5, 15, 20, "All"] // change per page values here
												],
												"pageLength": 10, // set the initial value,
												"columnDefs": [{  // set default column settings
													'orderable': false,
													'targets': [0]
												}, {
													"searchable": false,
													"targets": [0]
												}],
												"order": [
													[1, "asc"]
												]           
											});

											var oTableColReorder = new jQuery.fn.dataTable.ColReorder( oTable );

											var tableWrapper = jQuery('#sample_6_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
											tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
										}


										// Init each table
										initTable1();
										initTable2();
										initTable3();
										initTable4();
										initTable5();

									}

								});
							});
						});
					});
				});
			});
		</script>
		<script>
    
    			$('.categorySelect').on('hide.bs.modal', function (
    
    	
    
    ) {
    // do something…
    console.log('Modal closed');
    //var npdp=0;
    $('.myModal').modal();
    //window.location.reload();
    // $('.totalprice').val('');
//     $('.perdayprice').val('');
//     $('.byWhen').val('');
});
    
    //var text = $('#DynamicValueAssignedHere').find('input[name="FirstName"]').val();
    
     $('.perdayprice').keyup(function(){
    //$('#DynamicValueAssignedHere').find('input[name="FirstName"]').keyup(function() {
    	//var dat=moment().format('YYYY-MM-DD'); 
    	//console.log('current date' +dat );
		//var dat=(d.getMonth()+1) + "-" + d.getDate() + "-" + d.getFullYear();
    	var newPerDayPrice = $(this).val();
    	console.log('new price per day' +newPerDayPrice );
    	console.log('Object ID' +$(this).attr('id'));
    	var category = $(this).attr('id');
    	var arr = category.split('_');
    	var eid=arr[1];
    	var totalpriceid = 'totalprice'+'_'+eid;
    	var perdaypriceid = 'perdayprice'+'_'+eid;
    	var bywhenid = 'byWhen'+'_'+eid;
    	console.log(totalpriceid);
    	var totalPrice = $('#'+totalpriceid).val();
    	console.log('total price' + totalPrice);
    	var noofdays = totalPrice / newPerDayPrice;
    	console.log('no of days' + noofdays);
    	var dat  = moment().add(noofdays, 'days');
    	dat = dat.format('YYYY-MM-DD');
    	console.log('current date' +dat );
    	
    	$('#'+bywhenid).val(dat);
    	
	});
	
	$('.byWhen').on("change",function(){
    
    	//$('.byWhen').datepicker();
    	//$('.byWhen').on("change",function(){
        var dat = $(this).val();
        console.log('Object ID' +$(this).attr('id'));
        var category = $(this).attr('id');
    	var arr = category.split('_');
    	var eid=arr[1];
    	var totalpriceid = 'totalprice'+'_'+eid;
    	var perdaypriceid = 'perdayprice'+'_'+eid;
    	var bywhenid = 'byWhen'+'_'+eid;
        
        
        var curdat=moment().format('YYYY-MM-DD'); 
        var chosenday = moment(dat);
        var curday = moment(curdat);
        var duration = moment.duration(chosenday.diff(curday));
        var noofdays = duration.asDays();
        //diff = diff.format('YYYY-MM-DD');
        console.log(' days' +noofdays );
    	
    	var totalPrice = $('#'+totalpriceid).val();
    	console.log('total price' + totalPrice);
    	var newPerDayPrice = totalPrice / noofdays;
    	newPerDayPrice = Math.round(newPerDayPrice);
    	console.log('new per day price' + newPerDayPrice);
    	$('#'+perdaypriceid).val(newPerDayPrice);
    	
	});


    </script>
	</body>
</html>	