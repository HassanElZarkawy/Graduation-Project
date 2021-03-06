<?php $stats = $viewModel->get('stats'); $users = $viewModel->get('users'); ?>

<style>
	td, th {
		text-align: center !important;
	}
</style>


				<!-- Start info box -->
				<div class="row top-summary">
					<div class="col-lg-3 col-md-6">
						<div class="widget green-1 animated fadeInDown">
							<div class="widget-content padding">
								<div class="widget-icon">
									<i class="icon-globe-inv"></i>
								</div>
								<div class="text-box">
									<p class="maindata">TOTAL <b>CASES</b></p>
									<h2><span class="animate-number" data-value="<?php echo $stats->Cases?>" data-duration="1000">0</span></h2>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="widget-footer">
								<div class="row">
									<div class="col-sm-12">
										<i class="fa fa-caret-down rel-change"></i> <a style="color: white;" href=""><b>SEE</b> ALL</a>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="widget darkblue-2 animated fadeInDown">
							<div class="widget-content padding">
								<div class="widget-icon">
									<i class="icon-bag"></i>
								</div>
								<div class="text-box">
									<p class="maindata">TOTAL <b>Users</b></p>
									<h2><span class="animate-number" data-value="<?php echo $stats->Users ?>" data-duration="1000">0</span></h2>

									<div class="clearfix"></div>
								</div>
							</div>
							<div class="widget-footer">
								<div class="row">
									<div class="col-sm-12">
										<i class="fa fa-caret-down rel-change"></i> <a style="color: white;" href="<?php echo $root . 'users' ?>"><b>SEE</b> ALL</a>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="widget orange-4 animated fadeInDown">
							<div class="widget-content padding">
								<div class="widget-icon">
									<i class="fa fa-dollar"></i>
								</div>
								<div class="text-box">
									<p class="maindata">TOTAL <b>POSTS</b></p>
									<h2><span class="animate-number" data-value="<?php echo $stats->Posts ?>" data-duration="1000">0</span></h2>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="widget-footer">
								<div class="row">
									<div class="col-sm-12">
										<i class="fa fa-caret-down rel-change"></i> <a style="color: white;" href=""><b>SEE</b> ALL</a>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="widget lightblue-1 animated fadeInDown">
							<div class="widget-content padding">
								<div class="widget-icon">
									<i class="fa fa-users"></i>
								</div>
								<div class="text-box">
									<p class="maindata">TOTAL <b>ORGANIZATIONS</b></p>
									<h2><span class="animate-number" data-value="<?php echo $stats->Orgs ?>" data-duration="3000">0</span></h2>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="widget-footer">
								<div class="row">
									<div class="col-sm-12">
										<i class="fa fa-caret-down rel-change"></i> <a style="color: white;" href=""><b>SEE</b> ALL</a>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

				</div>
				<!-- End of info box -->

				<div class="row">
					<div class="col-lg-8 portlets">
						<div id="website-statistics1" class="widget">
							<div class="widget-header transparent">
								<h2><i class="icon-chart-line"></i> <strong>Website</strong> Statistics</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									  <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
										<i class="fa fa-cogs"></i>
									  </a>
									  <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
									  </ul>
									 <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
									<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content">
								<div id="website-statistic" class="statistic-chart">	
									<div class="row stacked">
										<div class="col-sm-12">
											<div class="toolbar">
												<div class="pull-left">
													<div class="btn-group">
														<a href="#" class="btn btn-default btn-xs">Daily</a>
														<a href="#" class="btn btn-default btn-xs active">Monthly</a>
														<a href="#" class="btn btn-default btn-xs">Yearly</a>
													</div>
												</div>
												<div class="pull-right">
													<div class="btn-group">
													  <a class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
													    Export <i class="icon-down-open-2"></i>
													  </a>
													  <ul class="dropdown-menu pull-right" role="menu">
													    <li><a href="#">Export as PDF</a></li>
													    <li><a href="#">Export as CSV</a></li>
													    <li><a href="#">Export as PNG</a></li>
													    <li class="divider"></li>
													    <li><a href="#">Separated link</a></li>
													  </ul>
													</div>
													<a href="#" class="btn btn-primary btn-xs"><i class="icon-cog-2"></i></a>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="clearfix"></div>
											<div id="morris-home" class="morris-chart" style="height: 270px;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>


					</div>
					<div class="col-lg-4 col-md-4 portlets">
						<div style="display: block !important;" class="widget darkblue-2">
							<div class="widget-header">
							<div class="additional-btn left-toolbar">
								<div class="btn-group">
								  <a class="additional-icon" id="dropdownMenu2" data-toggle="dropdown">
									Calculator <i class="fa fa-angle-down"></i>
								  </a>
								  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
									<li><a href="#">Save</a></li>
									<li><a href="#">Export</a></li>
									<li class="divider"></li>
									<li><a href="#">Quit</a></li>
								  </ul>
								</div>
							</div>
							<div class="additional-btn">
								<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
								  
									<a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
							</div>
							</div>
							<div id="calculator" class="widget-content">
								<div class="calc-top col-xs-12">
									<div class="row">
										<div class="col-xs-3"><span class="calc-clean">C</span></div>
										<div class="col-xs-9"><div class="calc-screen"></div></div>
									</div>
								</div>
								
								<div class="calc-keys col-xs-12">
									<div class="row">
										<div class="col-xs-3"><span>7</span></div>
										<div class="col-xs-3"><span>8</span></div>
										<div class="col-xs-3"><span>9</span></div>
										<div class="col-xs-3"><span class="calc-operator">+</span></div>
									</div>
									<div class="row">
										<div class="col-xs-3"><span>4</span></div>
										<div class="col-xs-3"><span>5</span></div>
										<div class="col-xs-3"><span>6</span></div>
										<div class="col-xs-3"><span class="calc-operator">-</span></div>
									</div>
									<div class="row">
										<div class="col-xs-3"><span>1</span></div>
										<div class="col-xs-3"><span>2</span></div>
										<div class="col-xs-3"><span>3</span></div>
										<div class="col-xs-3"><span class="calc-operator">รท</span></div>
									</div>
									<div class="row">
										<div class="col-xs-3"><span>0</span></div>
										<div class="col-xs-3"><span>.</span></div>
										<div class="col-xs-3"><span class="calc-eval">=</span></div>
										<div class="col-xs-3"><span class="calc-operator">x</span></div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-8 portlets">
						<div class="widget">
							<div class="widget-header">
								<h2><i class="icon-chart-pie-1"></i> <strong>Sales</strong> Report</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									  <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
										<i class="fa fa-cogs"></i>
									  </a>
									  <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
									  </ul>
									 <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
									<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content">
								<div class="row stacked">
									<div class="col-sm-5 mini-stats">
										<div id="morris-bar-home" class="morris-chart" style="height: 170px;"></div>
										<div class="sales-report-data">
											<span class="pull-left">Completed Sales</span><span class="pull-right">65 / 174</span>
											<div class="progress progress-xs">
												<div style="width: 38%;" class="progress-bar bg-blue-1"></div>
											</div>
											<div class="clearfix"></div>
											<span class="pull-left">Return(s) Processed</span><span class="pull-right">22 / 25</span>
											<div class="progress progress-xs">
												<div style="width: 88%;" class="progress-bar bg-lightblue-1"></div>
											</div>
											<div class="clearfix"></div>
											<span class="pull-left">Shipped Products</span><span class="pull-right">418 / 624</span>
											<div class="progress progress-xs">
												<div style="width: 58%;" class="progress-bar"></div>
											</div>
											<div class="clearfix"></div>
											<span class="pull-left">Overall Product Stock</span><span class="pull-right">19%</span>
											<div class="progress progress-xs">
												<div style="width: 19%;" class="progress-bar bg-pink-1"></div>
											</div>
										</div>
									</div>
									<div class="col-sm-7">
										<div id="vector-map" style="height:370px"></div>
									</div>
								</div>
								<div class="clearfix"></div>
								<div id="sales-report" class="collapse in hidden-xs">
									<div class="table-responsive">
										<h4><i class="icon-chart-pie-1"></i> Latest<strong> Users</strong></h4>
										<table data-sortable class="table table-striped">
											<thead>
												<tr><th width="70">No</th><th width="120">Name</th><th>Gender</th><th width="100">Joined</th><th width="150">Last Known IP</th><th width="120">Payment Method</th></tr>
											</thead>
											<tbody>
												<?php $index = 0; foreach ($users as $user){ $index++; ?>
													<tr>
														<td><?php echo $index; ?></td>
														<td><strong><?php echo $user->Name; ?></strong></td>
														<td><strong class="text-warning"><?php echo strtoupper($user->Gender); ?></strong></td>
														<td><strong><?php echo $user->DateJoined; ?></strong></td>
														<td><span class="label label-primary"><?php echo $user->LastIP; ?></span></td>
														<td><strong><?php echo $user->PaymentMethod; ?></strong></td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 portlets">
						<div class="row">
							<div class="col-sm-12">
								<div id="todo-app" class="widget">
									<div class="widget-header centered">
										<div class="left-btn"><a class="btn btn-sm btn-default add-todo"><i class="fa fa-plus"></i></a></div>
										<h2>Todo List</h2>
										<div class="additional-btn">
											<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
											<a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
											<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
											<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
											<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
										</div>
									</div>
									<div class="widget-content padding-sm">
										<ul class="todo-list">
											<li>
												<span class="check-icon"><input type="checkbox" /></span>
												<span class="todo-item">Generate monthly sales report for John</span>
												<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
												<span class="todo-tags pull-right">
													<div class="label label-success">New</div>
												</span>
											</li>
											<li class="high">
												<span class="check-icon"><input type="checkbox" /></span>
												<span class="todo-item">Mail those reports to John</span>
												<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
											</li>
											<li>
												<span class="check-icon"><input type="checkbox" /></span>
												<span class="todo-item">Don't forget to send those reports to John</span>
												<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
											</li>
											<li class="medium">
												<span class="check-icon"><input type="checkbox" /></span>
												<span class="todo-item">If you forgot, go back to office to pick them up</span>
												<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
												<span class="todo-tags pull-right">
													<div class="label label-info">Today</div>
												</span>
											</li>
											<li class="low">
												<span class="check-icon"><input type="checkbox" /></span>
												<span class="todo-item">Deliver reports by hand to John</span>
												<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
											</li>
											<li>
												<span class="check-icon"><input type="checkbox" /></span>
												<span class="todo-item">Say John that you are sorry</span>
												<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
											</li>
											<li>
												<span class="check-icon"><input type="checkbox" /></span>
												<span class="todo-item">Beg for your job...</span>
												<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
												<span class="todo-tags pull-right">
													<div class="label label-danger">Important</div>
												</span>
											</li>
											<li>
												<span class="check-icon"><input type="checkbox" /></span>
												<span class="todo-item">Look for a new job</span>
												<span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
												<span class="todo-tags pull-right">
													<div class="label label-warning"><i class="icon-search"></i></div>
												</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div id="notes-app" class="widget">
									<div class="notes-line"></div>
									<div class="widget-header centered transparent">
										<div class="left-btn btn-group"><a class="btn btn-sm btn-primary add-note"><i class="fa fa-plus"></i></a><a class="btn btn-sm btn-primary back-note-list"><i class="icon-align-justify"></i></a></div>
										<h2>Notes</h2>
										<div class="additional-btn">
											<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
											<a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
											<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
											<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
											<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
										</div>
									</div>
									<div class="widget-content padding-sm">
										<div id="notes-list">
											<div class="scroller">
												<ul class="list-unstyled">
												</ul>
											</div>
										</div>
										<div id="note-data">
											<form>
												<textarea class="form-control" id="note-text" placeholder="Your note..."></textarea>
											</form>
										</div>
										<div class="status-indicator">Saved</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 portlets">
						<div id="weather-widget" class="widget">
							<div class="widget-header transparent">
								<h2><strong>Weather</strong> Widget</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									  <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
										<i class="fa fa-cogs"></i>
									  </a>
									  <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
									  </ul>
									 <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
									<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div id="weather" class="widget-content">

							</div><i class="wi-day-rain-mix"></i>
							<button class="js-geolocation btn btn-sm btn-default" style="display: none;">Use Your Location</button>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portlets">
						<div id="calendar-widget2" class="widget blue-1">
							<div class="widget-header transparent">
								<h2><strong>Calendar</strong> Widget</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div id="calendar-box2" class="widget-content col-sm-12">

							</div>
						</div>
					</div>
					
				</div>

				<div class="row">
					<div class="col-lg-8 col-md-6 portlets">

					</div>
					<div class="col-lg-4 col-md-6 portlets">
						<div id="stock-app" class="widget green-3">
							<div class="widget-header transparent">
								<h2><strong>Stock</strong> Markets</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									  <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
										<i class="fa fa-cogs"></i>
									  </a>
									  <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
									  </ul>
									 <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
									<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content">
								<div id="website-statistic3" class="statistic-chart">	
									<div class="row">
										<div class="col-xs-6">
											<h2>NASDAQ</h2>
										</div>
										<div class="col-xs-6">
											<label id="nasdaq-status" class="stock-status"></label>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h2>DOW JONES</h2>
										</div>
										<div class="col-xs-6">
											<label id="dow-status" class="stock-status"></label>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h2>S&P</h2>
										</div>
										<div class="col-xs-6">
											<label id="sp-status" class="stock-status"></label>
										</div>
									</div>
								</div>
								<div id="home-chart-3"></div>
							</div>
							<div class="widget-footer">
							</div>
						</div>
					</div>
				</div>