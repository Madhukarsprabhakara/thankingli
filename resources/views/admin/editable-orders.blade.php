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
		<link href="assets-admin/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

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
					<h1>Editable Datatables</h1>
					<ol class="breadcrumb">
						<li><a href="#">Tables</a></li>
						<li class="active">Editable Datatables</li>
					</ol>
				</header>
				<!-- /page title -->
				<div id="content" class="padding-20">

					<div class="row">
                                        <!-- <div class="col-md-3 col-sm-3 "></div> -->
                                        <div class="col-md-8 push-md-3 col-sm-8         ">
                                                <!-- INLINE SEARCH -->
                                                        <div class="inline-search clearfix mb-60">
                                                                <form method="get" id="searchcode" action="/searchcode" class="widget_search">
                                                                        <input type="search" placeholder="Search for purchase codes" id="s" name="searchcode" class="serch-input">
                                                                        <button type="submit">
                                                                                <i class="fa fa-search"></i>
                                                                        </button>
                                                                </form>
                                                        </div>
                                                        <!-- /INLINE SEARCH -->
                                        </div>
                                </div>

				</div>

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
								<strong>EDITABLE DATATABLE</strong> <!-- panel title -->
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
								@if(isset($searchNames))
								@foreach ($searchNames as $order)
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
                                                                                        <span class="label label-warning">Used </span>
                                                                                </td>
                                                                                          @else
                                                                                <td>
                                                                                        <a href="/business/markused/{{$order->purchase_code}}" class="btn btn-3d btn-sm btn-reveal btn-green">
        <i class="et-megaphone"></i>
        <span>Mark used</span>
        </a>
                                                                                </td>
                                                                                @endif    	
										
									</tr>
								@endforeach	
								@endif
								</tbody>
							</table>

						</div>
						<!-- /panel content -->

						<!-- panel footer -->
						<div class="panel-footer">

<!-- pre code -->
<div class="text-left">
	<a class="btn btn-xs btn-info" href="javascript:;" onclick="jQuery('#pre-0').slideToggle();">Show Code</a>
</div>
<pre id="pre-0" class="text-left noradius text-danger softhide margin-top-10">
<span class="text-success">&lt;!-- HTML DATATABLE --&gt;</span>
&lt;table class="table table-striped table-hover table-bordered" id="sample_editable_1"&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;Username&lt;/th&gt;
			&lt;th&gt;Full Name&lt;/th&gt;
			&lt;th&gt;Points&lt;/th&gt;
			&lt;th&gt;Notes&lt;/th&gt;
			&lt;th&gt;Edit&lt;/th&gt;
			&lt;th&gt;Delete&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;

	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;td&gt;
				 alex
			&lt;/td&gt;
			&lt;td&gt;
				 Alex Nilson
			&lt;/td&gt;
			&lt;td&gt;
				 1234
			&lt;/td&gt;
			&lt;td class="center"&gt;
				 power user
			&lt;/td&gt;
			&lt;td&gt;
				&lt;a class="edit" href="javascript:;"&gt;
				Edit &lt;/a&gt;
			&lt;/td&gt;
			&lt;td&gt;
				&lt;a class="delete" href="javascript:;"&gt;
				Delete &lt;/a&gt;
			&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;
				 lisa
			&lt;/td&gt;
			&lt;td&gt;
				 Lisa Wong
			&lt;/td&gt;
			&lt;td&gt;
				 434
			&lt;/td&gt;
			&lt;td class="center"&gt;
				 new user
			&lt;/td&gt;
			&lt;td&gt;
				&lt;a class="edit" href="javascript:;"&gt;
				Edit &lt;/a&gt;
			&lt;/td&gt;
			&lt;td&gt;
				&lt;a class="delete" href="javascript:;"&gt;
				Delete &lt;/a&gt;
			&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;


<span class="text-success">&lt;!-- CSS DATATABLE --&gt;</span>
&lt;link href="assets-admin/css/layout-datatable.css" rel="stylesheet" type="text/css" /&gt;



<span class="text-success">&lt;!-- JS DATATABLE --&gt;</span>
&lt;script type="text/javascript"&gt;
loadScript(plugin_path + "datatables/js/jquery.dataTables.min.js", function(){
	loadScript(plugin_path + "datatables/dataTables.bootstrap.js", function(){
		loadScript(plugin_path + "select2/js/select2.full.min.js", function(){

			if (jQuery().dataTable) {

				function restoreRow(oTable, nRow) {
					var aData = oTable.fnGetData(nRow);
					var jqTds = $('&gt;td', nRow);

					for (var i = 0, iLen = jqTds.length; i &lt; iLen; i++) {
						oTable.fnUpdate(aData[i], nRow, i, false);
					}

					oTable.fnDraw();
				}

				function editRow(oTable, nRow) {
					var aData = oTable.fnGetData(nRow);
					var jqTds = $('&gt;td', nRow);
					jqTds[0].innerHTML = '&lt;input type="text" class="form-control input-small" value="' + aData[0] + '"&gt;';
					jqTds[1].innerHTML = '&lt;input type="text" class="form-control input-small" value="' + aData[1] + '"&gt;';
					jqTds[2].innerHTML = '&lt;input type="text" class="form-control input-small" value="' + aData[2] + '"&gt;';
					jqTds[3].innerHTML = '&lt;input type="text" class="form-control input-small" value="' + aData[3] + '"&gt;';
					jqTds[4].innerHTML = '&lt;a class="edit" href=""&gt;Save&lt;/a&gt;';
					jqTds[5].innerHTML = '&lt;a class="cancel" href=""&gt;Cancel&lt;/a&gt;';
				}

				function saveRow(oTable, nRow) {
					var jqInputs = $('input', nRow);
					oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
					oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
					oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
					oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
					oTable.fnUpdate('&lt;a class="edit" href=""&gt;Edit&lt;/a&gt;', nRow, 4, false);
					oTable.fnUpdate('&lt;a class="delete" href=""&gt;Delete&lt;/a&gt;', nRow, 5, false);
					oTable.fnDraw();
				}

				function cancelEditRow(oTable, nRow) {
					var jqInputs = $('input', nRow);
					oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
					oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
					oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
					oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
					oTable.fnUpdate('&lt;a class="edit" href=""&gt;Edit&lt;/a&gt;', nRow, 4, false);
					oTable.fnDraw();
				}

				var table = $('#sample_editable_1');

				var oTable = table.dataTable({
					"lengthMenu": [
						[5, 15, 20, -1],
						[5, 15, 20, "All"] // change per page values here
					],
					// set the initial value
					"pageLength": 10,

					"language": {
						"lengthMenu": " _MENU_ records"
					},
					"columnDefs": [{ // set default column settings
						'orderable': true,
						'targets': [0]
					}, {
						"searchable": true,
						"targets": [0]
					}],
					"order": [
						[0, "asc"]
					] // set first column as a default sort by asc
				});

				var tableWrapper = $("#sample_editable_1_wrapper");

				tableWrapper.find(".dataTables_length select").select2({
					showSearchInput: false //hide search box with special css class
				}); // initialize select2 dropdown

				var nEditing = null;
				var nNew = false;

				$('#sample_editable_1_new').click(function (e) {
					e.preventDefault();

					if (nNew && nEditing) {
						if (confirm("Previose row not saved. Do you want to save it ?")) {
							saveRow(oTable, nEditing); // save
							$(nEditing).find("td:first").html("Untitled");
							nEditing = null;
							nNew = false;

						} else {
							oTable.fnDeleteRow(nEditing); // cancel
							nEditing = null;
							nNew = false;
							
							return;
						}
					}

					var aiNew = oTable.fnAddData(['', '', '', '', '', '']);
					var nRow = oTable.fnGetNodes(aiNew[0]);
					editRow(oTable, nRow);
					nEditing = nRow;
					nNew = true;
				});

				table.on('click', '.delete', function (e) {
					e.preventDefault();

					if (confirm("Are you sure to delete this row ?") == false) {
						return;
					}

					var nRow = $(this).parents('tr')[0];
					oTable.fnDeleteRow(nRow);
					alert("Deleted! Do not forget to do some ajax to sync with backend :)");
				});

				table.on('click', '.cancel', function (e) {
					e.preventDefault();

					if (nNew) {
						oTable.fnDeleteRow(nEditing);
						nNew = false;
					} else {
						restoreRow(oTable, nEditing);
						nEditing = null;
					}
				});

				table.on('click', '.edit', function (e) {
					e.preventDefault();

					/* Get the row as a parent of the link that was clicked on */
					var nRow = $(this).parents('tr')[0];

					if (nEditing !== null && nEditing != nRow) {
						/* Currently editing - but not this row - restore the old before continuing to edit mode */
						restoreRow(oTable, nEditing);
						editRow(oTable, nRow);
						nEditing = nRow;
					} else if (nEditing == nRow && this.innerHTML == "Save") {
						/* Editing this row and want to save it */
						saveRow(oTable, nEditing);
						nEditing = null;
						alert("Updated! Do not forget to do some ajax to sync with backend :)");
					} else {
						/* No edit in progress - let's start one */
						editRow(oTable, nRow);
						nEditing = nRow;
					}
				});

			}

		});
	});
});
&lt;/script"&gt;
</pre>
<!-- /pre code -->

						</div>
						<!-- /panel footer -->

					</div>
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
				loadScript(plugin_path + "datatables/dataTables.bootstrap.js", function(){
					loadScript(plugin_path + "select2/js/select2.full.min.js", function(){

						if (jQuery().dataTable) {

							function restoreRow(oTable, nRow) {
								var aData = oTable.fnGetData(nRow);
								var jqTds = $('>td', nRow);

								for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
									oTable.fnUpdate(aData[i], nRow, i, false);
								}

								oTable.fnDraw();
							}

							function editRow(oTable, nRow) {
								var aData = oTable.fnGetData(nRow);
								var jqTds = $('>td', nRow);
								jqTds[0].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[0] + '">';
								jqTds[1].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[1] + '">';
								jqTds[2].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[2] + '">';
								jqTds[3].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[3] + '">';
								jqTds[4].innerHTML = '<a class="edit" href="">Save</a>';
								jqTds[5].innerHTML = '<a class="cancel" href="">Cancel</a>';
							}

							function saveRow(oTable, nRow) {
								var jqInputs = $('input', nRow);
								oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
								oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
								oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
								oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
								oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 4, false);
								oTable.fnUpdate('<a class="delete" href="">Delete</a>', nRow, 5, false);
								oTable.fnDraw();
							}

							function cancelEditRow(oTable, nRow) {
								var jqInputs = $('input', nRow);
								oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
								oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
								oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
								oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
								oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 4, false);
								oTable.fnDraw();
							}

							var table = $('#sample_editable_1');

							var oTable = table.dataTable({
								"lengthMenu": [
									[5, 15, 20, -1],
									[5, 15, 20, "All"] // change per page values here
								],
								// set the initial value
								"pageLength": 10,

								"language": {
									"lengthMenu": " _MENU_ records"
								},
								"columnDefs": [{ // set default column settings
									'orderable': true,
									'targets': [0]
								}, {
									"searchable": true,
									"targets": [0]
								}],
								"order": [
									[0, "asc"]
								] // set first column as a default sort by asc
							});

							var tableWrapper = $("#sample_editable_1_wrapper");

							tableWrapper.find(".dataTables_length select").select2({
								showSearchInput: false //hide search box with special css class
							}); // initialize select2 dropdown

							var nEditing = null;
							var nNew = false;

							$('#sample_editable_1_new').click(function (e) {
								e.preventDefault();

								if (nNew && nEditing) {
									if (confirm("Previose row not saved. Do you want to save it ?")) {
										saveRow(oTable, nEditing); // save
										$(nEditing).find("td:first").html("Untitled");
										nEditing = null;
										nNew = false;

									} else {
										oTable.fnDeleteRow(nEditing); // cancel
										nEditing = null;
										nNew = false;
										
										return;
									}
								}

								var aiNew = oTable.fnAddData(['', '', '', '', '', '']);
								var nRow = oTable.fnGetNodes(aiNew[0]);
								editRow(oTable, nRow);
								nEditing = nRow;
								nNew = true;
							});

							table.on('click', '.delete', function (e) {
								e.preventDefault();

								if (confirm("Are you sure to delete this row ?") == false) {
									return;
								}

								var nRow = $(this).parents('tr')[0];
								oTable.fnDeleteRow(nRow);
								alert("Deleted! Do not forget to do some ajax to sync with backend :)");
							});

							table.on('click', '.cancel', function (e) {
								e.preventDefault();

								if (nNew) {
									oTable.fnDeleteRow(nEditing);
									nNew = false;
								} else {
									restoreRow(oTable, nEditing);
									nEditing = null;
								}
							});

							table.on('click', '.edit', function (e) {
								e.preventDefault();

								/* Get the row as a parent of the link that was clicked on */
								var nRow = $(this).parents('tr')[0];

								if (nEditing !== null && nEditing != nRow) {
									/* Currently editing - but not this row - restore the old before continuing to edit mode */
									restoreRow(oTable, nEditing);
									editRow(oTable, nRow);
									nEditing = nRow;
								} else if (nEditing == nRow && this.innerHTML == "Save") {
									/* Editing this row and want to save it */
									saveRow(oTable, nEditing);
									nEditing = null;
									alert("Updated! Do not forget to do some ajax to sync with backend :)");
								} else {
									/* No edit in progress - let's start one */
									editRow(oTable, nRow);
									nEditing = nRow;
								}
							});

						}

					});
				});
			});
		</script>

	</body>
</html>