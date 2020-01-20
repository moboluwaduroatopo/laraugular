@extends('layouts.navapp')
@section('my-content')
<div class="container-fluid">
		<!-- ============================================================== -->
		<!-- Bread crumb and right sidebar toggle -->
		<!-- ============================================================== -->
		<div class="row page-titles">
			<div class="col-md-5 align-self-center">
				<h3 class="text-themecolor">Dashboard V1</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
					<li class="breadcrumb-item active">Dashboard V1</li>
				</ol>
			</div>
			<div class="">
				<button class="right-side-toggle waves-effect waves-light bg-primary btn btn-circle btn-sm pull-right ml-10"><i class="ti-settings text-white"></i></button>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- End Bread crumb and right sidebar toggle -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Info box -->
		<!-- ============================================================== -->
		
		
		<div class="row counter">
			<!-- Column -->
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="d-flex pa-10 no-block">
							<div class="align-slef-center ">
							<h2 class="counter"><span class="counter-count">879</h2>

								
								<h6 class="text-muted mb-0 text-uppercase">TOTAL PROFIT</h6>
							</div>
							<div class="align-self-center display-6 ml-auto"> <div id="sparkline12" class="text-center w-100"></div></div>
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar bg-primary w-70-p h-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">50% Complete</span></div>
					</div>
				</div>
			</div>
			<!-- Column -->
			<!-- Column -->
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="d-flex pa-10 no-block">
							<div class="align-slef-center">
							   <h2 class="counter"><span class="counter-count">654</h2>
								<h6 class="text-muted mb-0 text-uppercase">ACTIVE USERS</h6>
							</div>
							<div class="align-self-center display-6 ml-auto"> <div id="sparkline8"     class="text-center w-100"></div></div>
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar bg-info w-70-p h-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">50% Complete</span></div>
					</div>
				</div>
			</div>
			<!-- Column -->
			<!-- Column -->
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="d-flex pa-10 no-block">
							<div class="align-slef-center">
							   <h2 class="counter"><span class="counter-count">984</h2>
								<h6 class="text-muted mb-0 text-uppercase">Emails Sent</h6>
							</div>
							<div class="align-self-center display-6 ml-auto"> <div id="sparkline11"></div></div>
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar bg-primary w-70-p h-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">50% Complete</span></div>
					</div>
				</div>
			</div>
			<!-- Column -->
			<!-- Column -->
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="d-flex pa-10 no-block">
							<div class="align-slef-center">
							   <h2 class="counter"><span class="counter-count">568</h2>
								<h6 class="text-muted mb-0 text-uppercase">Deals in Pipeline</h6>
							</div>
							<div class="align-self-center display-6 ml-auto"><div id="sparkline14" class="text-center"></div></div>
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar bg-danger w-70-p h-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">50% Complete</span></div>
					</div>
				</div>
			</div>
			<!-- Column -->
			<!-- Column -->
		</div>
		<!-- ============================================================== -->
		<!-- End Info box -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Over Visitor, Our income , slaes different and  sales prediction -->
		<!-- ============================================================== -->
		<div class="row">
			<!-- Column -->
			<div class="col-lg-4 col-md-12">
				<div class="card">
					<div class="card-body pt-0 pl-0 pr-0">
					   <div class="profile-box">
	  <div class="profile-cover-pic">
		<div class="fileupload btn btn-default"> <span class="btn-text"><i class="mdi mdi-pencil"></i></span>
		  <input class="upload" type="file">
		</div>
		<div class="profile-image-overlay"></div>
	  </div>
	  <div class="profile-info text-center">
		<div class="profile-img-wrap"> <img class="inline-block mb-10 img-fluid" src="../assets/images/users/profile.png" alt="user">
		  <div class="fileupload btn btn-default"> <span class="btn-text"><i class="mdi mdi-pencil"></i></span>
			<input class="upload" type="file">
		  </div>
		</div>
		<h5 class="block mt-10 mb-10 font-medium capitalize-font text-primary">Michelle Abraham</h5>
		<h6 class="block capitalize-font pb-15">CEO Xyz</h6>
	  </div>
	  <div class="social-info">
		<div class="row">
		  <div class="col-sm-4 text-center"> <span class="counts block head-font counter"><span class="counter-count">984</span></span> <span class="counts-text block">post</span></div>
		  <div class="col-sm-4 text-center"> <span class="counts block counter"><span class="counter-count">554</span></span> <span class="counts-text block">followers</span></div>
		  <div class="col-sm-4 text-center"> <span class="counts block counter"><span class="counter-count">55584</span></span> <span class="counts-text block">tweets</span></div>
		</div>
		<button class="btn btn-primary btn-block btn-anim mt-15" data-toggle="modal" data-target="#myModal1"><i class="fa fa-pencil mr-10"></i><span class="btn-text">Edit Profile</span></button>
		<div id="myModal1" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h5 class="modal-title" id="myModalLabel">Edit Profile</h5>
			  </div>
			  <div class="modal-body">
				<div class="row">
				  <div class="col-lg-12">
					<div class="">
					  <div class="panel-wrapper collapse in">
						<div class="panel-body pa-0">
						  <div class="col-sm-12 col-xs-12">
							<div class="form-wrap">
							  <form action="#">
								<div class="form-body overflow-hide">
								  <div class="form-group">
									<label class="control-label mb-10" for="exampleInputuname_1">Name</label>
									<div class="input-group">
									  <div class="input-group-addon"><i class="mdi mdi-account"></i></div>
									  <input type="text" class="form-control" id="exampleInputuname_1" placeholder="willard bryant">
									</div>
								  </div>
								  <div class="form-group">
									<label class="control-label mb-10" for="exampleInputEmail_1">Email address</label>
									<div class="input-group">
									  <div class="input-group-addon"><i class="mdi mdi-email"></i></div>
									  <input type="email" class="form-control" id="exampleInputEmail_1" placeholder="xyz@gmail.com">
									</div>
								  </div>
								  <div class="form-group">
									<label class="control-label mb-10" for="exampleInputContact_1">Contact number</label>
									<div class="input-group">
									  <div class="input-group-addon"><i class="mdi mdi-cellphone"></i></div>
									  <input type="email" class="form-control" id="exampleInputContact_1" placeholder="+102 9388333">
									</div>
								  </div>
								  <div class="form-group">
									<label class="control-label mb-10" for="exampleInputpwd_1">Password</label>
									<div class="input-group">
									  <div class="input-group-addon"><i class="mdi mdi-lock"></i></div>
									  <input type="password" class="form-control" id="exampleInputpwd_1" placeholder="Enter pwd" value="password">
									</div>
								  </div>
								  <div class="form-group">
									<label class="control-label mb-10">Gender</label>
									<div>
									  <div class="radio">
										<input type="radio" name="radio1" id="radio_1" value="option1" checked="">
										<label for="radio_1"> Male </label>
									  </div>
									  <div class="radio">
										<input type="radio" name="radio1" id="radio_2" value="option2">
										<label for="radio_2"> Female </label>
									  </div>
									</div>
								  </div>
								  <div class="form-group">
									<label class="control-label mb-10">Country</label>
									<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
									  <option value="Category 1">USA</option>
									  <option value="Category 2">Austrailia</option>
									  <option value="Category 3">India</option>
									  <option value="Category 4">UK</option>
									</select>
								  </div>
								</div>
								<button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Save</button>
								<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
							  </form>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
					</div>
				</div>
			</div>
			<!-- Column -->
			<div class="col-lg-5 col-md-12">
				<div class="card o-income">
					<div class="card-body">
						<div class="d-flex mb-30 no-block">
							<h5 class="card-title mb-0 align-self-center">Our Income</h5>
							<div class="ml-auto">
								<select class="custom-select b-0">
									<option selected="">January</option>
									<option value="1">February</option>
									<option value="2">March</option>
									<option value="3">April</option>
								</select>
							</div>
						</div>
						 <div id="extra-area-chart" style="height:320px; width:100%;"></div>
						
					</div>
				</div>
			</div>
			<!-- Column -->
			<div class="col-lg-3 col-md-12">
				<div class="row">
					<!-- Column -->
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								
								<div class="d-flex no-block">
								
									<div class="mr-auto no-shrink">
									<h5 class="card-title mb-5">Sales Difference</h5>
									   <h2 class="counter"><span class="counter-count">568</h2>
										<h6 class="text-muted">(150-165 Sales)</h6>
									</div>
									<div class="ml-auto chart-top">
										<div id="sales" class="" style=" width:80px; height:10px;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				   
<!-- Column -->
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
							   
								<div class="d-flex no-block">
								
									<div class="mr-auto no-shrink">
									 <h5 class="card-title mb-5">Sales Difference</h5>
										<h2 class="counter"><span class="counter-count">568</h2>
										<h6 class="text-muted">(150-165 Sales)</h6>
									</div>
									<div class="ml-auto chart-top">
										<div id="sales-2" class="" style=" width:80px; height:10px;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				   
				   <!-- Column -->
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
							   
								<div class="d-flex no-block">
								 
									<div class="mr-auto no-shrink">
									<h5 class="card-title mb-5">Sales Prediction</h5>
										<h2 class="counter"><span class="counter-count">568</h2>
										<h6 class="text-muted">(150-165 Sales)</h6>
									</div>
									<div class="ml-auto chart-top">
										<div id="prediction" style=" width:80px; height:10px;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Column -->
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Sales Chart and browser state-->
		<!-- ============================================================== -->
		<div class="row">
			<!-- Column -->
			<div class="col-lg-8">
				<div class="card">
					<div class="card-body">
						<div class="d-flex no-block">
							<div>
								<h5 class="card-title mb-0">Sales Chart</h5>
							</div>
							<div class="ml-auto">
								<ul class="list-inline text-center font-12">
									<li><i class="fa fa-circle text-success"></i> SITE A</li>
									<li><i class="fa fa-circle text-info"></i> SITE B</li>
									<li><i class="fa fa-circle text-primary"></i> SITE C</li>
								</ul>
							</div>
						</div>
					  
<div id="income-year" style="height:355px; width:100%;"></div>
					  
					</div>
				</div>
			</div>
			<!-- Column -->
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Browser Stats</h5>
						<table class="table browser mt-30 no-border">
							<tbody>
								<tr>
									<td style="width:40px"><img src="../assets/images/browser/chrome-logo.png" alt="logo"></td>
									<td>Google Chrome</td>
									<td class="text-right">23%</td>
								</tr>
								<tr>
									<td><img src="../assets/images/browser/firefox-logo.png" alt="logo"></td>
									<td>Mozila Firefox</td>
									<td class="text-right">15%</td>
								</tr>
								<tr>
									<td><img src="../assets/images/browser/safari-logo.png" alt="logo"></td>
									<td>Apple Safari</td>
									<td class="text-right">07%</td>
								</tr>
								<tr>
									<td><img src="../assets/images/browser/internet-logo.png" alt="logo"></td>
									<td>Internet Explorer</td>
									<td class="text-right">09%</td>
								</tr>
								<tr>
									<td><img src="../assets/images/browser/opera-logo.png" alt="logo"></td>
									<td>Opera mini</td>
									<td class="text-right">23%</td>
								</tr>
								<tr>
									<td><img src="../assets/images/browser/netscape-logo.png" alt="logo"></td>
									<td>Netscape Navigator</td>
									<td class="text-right">04%</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- End Sales Chart -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Projects of the Month -->
		<!-- ============================================================== -->
		<div class="row">
			<!-- Column -->
			<div class="col-lg-8">
				<div class="card">
					<div class="card-body">
						<div class="d-flex">
							<div>
								<h5 class="card-title">Projects of the Month</h5>
							</div>
							<div class="ml-auto">
								<select class="custom-select b-0">
									<option selected="">January</option>
									<option value="1">February</option>
									<option value="2">March</option>
									<option value="3">April</option>
								</select>
							</div>
						</div>
						<div class="table-responsive mt-20 no-wrap">
							<table class="table vm no-th-brd pro-of-month">
								<thead>
									<tr>
										<th colspan="2">Assigned</th>
										<th>Name</th>
										<th>Priority</th>
										<th>Budget</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="width:50px;"><span class="round">S</span></td>
										<td>
											<h6>Natalie Jinx</h6><small class="text-muted">Web Designer</small></td>
										<td>Admin</td>
										<td><span class="label label-success label-rounded">Low</span></td>
										<td>$3.9K</td>
									</tr>
									<tr class="active">
										<td><span class="round"><img src="../assets/images/users/2.jpg" alt="user" width="50"></span></td>
										<td>
											<h6>Andrew</h6><small class="text-muted">Project Manager</small></td>
										<td>Studio Ux</td>
										<td><span class="label label-info label-rounded">Medium</span></td>
										<td>$23.9K</td>
									</tr>
									<tr>
										<td><span class="round round-success">B</span></td>
										<td>
											<h6>Missa Kayne</h6><small class="text-muted">Developer</small></td>
										<td>Home Builder Theme</td>
										<td><span class="label label-primary label-rounded">High</span></td>
										<td>$12.9K</td>
									</tr>
									<tr>
										<td><span class="round round-primary">N</span></td>
										<td>
											<h6>Mark Twain</h6><small class="text-muted">Frontend Eng</small></td>
										<td>Admin</td>
										<td><span class="label label-danger label-rounded">Low</span></td>
										<td>$10.9K</td>
									</tr>
									<tr>
										<td><span class="round round-warning">M</span></td>
										<td>
											<h6>Micheal Doe</h6><small class="text-muted">Content Writer</small></td>
										<td>Creative Ecommerce</td>
										<td><span class="label label-success label-rounded">High</span></td>
										<td>$12.9K</td>
									</tr>
									<tr>
										<td><span class="round round-danger">N</span></td>
										<td>
											<h6>Johnathan</h6><small class="text-muted">Graphic</small></td>
										<td>Digital Agency</td>
										<td><span class="label label-info label-rounded">High</span></td>
										<td>$2.6K</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- Column -->
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<div class="d-flex no-block">
							<div>
								<h5 class="card-title mb-0">Weather</h5>
							</div>
							<div class="ml-auto">
								<select class="custom-select b-0">
									<option selected="">January</option>
									<option value="1">February</option>
									<option value="2">March</option>
									<option value="3">April</option>
								</select>
							</div>
						</div>
						<div class="d-flex align-items-center flex-row mt-30">
							<div class="p-2 display-5 text-info"><i class="wi wi-day-showers"></i> <span>73<sup>°</sup></span></div>
							<div class="p-2">
								<h3 class="mb-0">Saturday</h3><small>Jabalpur, India</small></div>
						</div>
						<table class="table no-border">
							<tbody>
								<tr>
									<td>Wind</td>
									<td class="font-medium">ESE 17 mph</td>
								</tr>
								<tr>
									<td>Humidity</td>
									<td class="font-medium">83%</td>
								</tr>
								<tr>
									<td>Pressure</td>
									<td class="font-medium">28.56 in</td>
								</tr>
								<tr>
									<td>Cloud Cover</td>
									<td class="font-medium">78%</td>
								</tr>
								<tr>
									<td>Ceiling</td>
									<td class="font-medium">25760 ft</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="card-body b-t">
						<ul class="list-unstyled row text-center city-weather-days">
							<li class="col"><i class="wi wi-day-sunny"></i><span>09:30</span>
								<h3>70<sup>°</sup></h3></li>
							<li class="col"><i class="wi wi-day-cloudy"></i><span>11:30</span>
								<h3>72<sup>°</sup></h3></li>
							<li class="col"><i class="wi wi-day-hail"></i><span>13:30</span>
								<h3>75<sup>°</sup></h3></li>
							<li class="col"><i class="wi wi-day-sprinkle"></i><span>15:30</span>
								<h3>76<sup>°</sup></h3></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- End Projects of the Month -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Comment - chats -->
		<!-- ============================================================== -->
		<div class="row">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Recent Comments</h5>
					</div>
					<!-- ============================================================== -->
					<!-- Comment widgets -->
					<!-- ============================================================== -->
					<div class="comment-widgets">
						<!-- Comment Row -->
						<div class="d-flex flex-row comment-row">
							<div class="p-2"><span class="round"><img src="../assets/images/users/1.jpg" alt="user" width="50"></span></div>
							<div class="comment-text w-100">
								<h5>James Anderson</h5>
								<p class="mb-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
								<div class="comment-footer">
									<span class="text-muted pull-right">April 14, 2018</span> <span class="label label-rounded label-info">Pending</span> <span class="action-icons">
											<a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
											<a href="javascript:void(0)"><i class="ti-check"></i></a>
											<a href="javascript:void(0)"><i class="ti-heart"></i></a>    
										</span> </div>
							</div>
						</div>
						<!-- Comment Row -->
						<div class="d-flex flex-row comment-row">
							<div class="p-2"><span class="round"><img src="../assets/images/users/2.jpg" alt="user" width="50"></span></div>
							<div class="comment-text active w-100">
								<h5>Michael Jorden</h5>
								<p class="mb-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
								<div class="comment-footer ">
									<span class="text-muted pull-right">April 14, 2018</span>
									<span class="label label-success label-rounded">Approved</span>
									<span class="action-icons active">
											<a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
											<a href="javascript:void(0)"><i class="icon-close"></i></a>
											<a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>    
										</span>
								</div>
							</div>
						</div>
						<!-- Comment Row -->
						<div class="d-flex flex-row comment-row">
							<div class="p-2"><span class="round"><img src="../assets/images/users/3.jpg" alt="user" width="50"></span></div>
							<div class="comment-text w-100">
								<h5>Johnathan Doeting</h5>
								<p class="mb-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
								<div class="comment-footer">
									<span class="text-muted pull-right">April 14, 2018</span>
									<span class="label label-rounded label-danger">Rejected</span>
									<span class="action-icons">
											<a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
											<a href="javascript:void(0)"><i class="ti-check"></i></a>
											<a href="javascript:void(0)"><i class="ti-heart"></i></a>    
										</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Recent Chats</h5>
						<div class="chat-box">
							<!--chat Row -->
							<ul class="chat-list">
								<!--chat Row -->
								<li>
									<div class="chat-img"><img src="../assets/images/users/1.jpg" alt="user"></div>
									<div class="chat-content">
										<h5>James Anderson</h5>
										<div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
									</div>
									<div class="chat-time">10:56 am</div>
								</li>
								<!--chat Row -->
								<li>
									<div class="chat-img"><img src="../assets/images/users/2.jpg" alt="user"></div>
									<div class="chat-content">
										<h5>Bianca Doe</h5>
										<div class="box bg-light-info">Text of the printing & type setting industry.</div>
									</div>
									<div class="chat-time">10:57 am</div>
								</li>
								<!--chat Row -->
								<li class="odd">
									<div class="chat-content">
										<div class="box bg-light-inverse">Neque porro quisquam est qui d.</div>
										<br>
									</div>
									<div class="chat-time">10:58 am</div>
								</li>
						   
								<!--chat Row -->
								<li>
									<div class="chat-img"><img src="../assets/images/users/3.jpg" alt="user"></div>
									<div class="chat-content">
										<h5>Angelina Rhodes</h5>
										<div class="box bg-light-info">Olorem ipsum quia dolor sit amet, consectetur.</div>
									</div>
									<div class="chat-time">11:00 am</div>
								</li>
								<!--chat Row -->
							</ul>
						</div>
					</div>
					<div class="card-body b-t">
						<div class="row">
							<div class="col-8">
								<textarea placeholder="Type your message here" class="form-control b-0"></textarea>
							</div>
							<div class="col-4 text-right">
								<button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-paper-plane-o"></i> </button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- End Comment - chats -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- End Page Content -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Right sidebar -->
		<!-- ============================================================== -->
		<!-- .right-sidebar -->
		<div class="right-sidebar">
			<div class="slimscrollright">
				<div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
				<div class="r-panel-body">
					<ul id="themecolors" class="mt-20">
						<li><b>With Light sidebar</b></li>
						<li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
						<li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
						<li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
						<li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
						<li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
						<li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
						<li class="d-block mt-30"><b>With Dark sidebar</b></li>
						<li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
						<li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
						<li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
						<li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
						<li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
						<li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- End Right sidebar -->
		<!-- ============================================================== -->
	</div>
@endsection