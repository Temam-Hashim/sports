<?php include "includes/header.php"?>



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="index.html">
									<i class="menu-icon icon-dashboard"></i>
									Dashboard
								</a>
							</li>
							<li>
								<a href="activity.html">
									<i class="menu-icon icon-bullhorn"></i>
									News Feed
								</a>
							</li>
							<li>
								<a href="message.html">
									<i class="menu-icon icon-inbox"></i>
									Inbox
									<b class="label green pull-right">11</b>
								</a>
							</li>
							
							<li>
								<a href="task.html">
									<i class="menu-icon icon-tasks"></i>
									Tasks
									<b class="label orange pull-right">19</b>
								</a>
							</li>
						</ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                                <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									More Pages
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="other-login.html">
											<i class="icon-inbox"></i>
											Login
										</a>
									</li>
									<li>
										<a href="other-user-profile.html">
											<i class="icon-inbox"></i>
											Profile
										</a>
									</li>
									<li>
										<a href="other-user-listing.html">
											<i class="icon-inbox"></i>
											All Users
										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="#">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

						
					
						
					
					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module message">
							<div class="module-head">
								<h3>Task Management Tool</h3>
							</div>
							<div class="module-option clearfix">
								<div class="pull-left">
									Filter : &nbsp;
									<div class="btn-group">
										<button class="btn">All</button>
										<button class="btn dropdown-toggle" data-toggle="dropdown">
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#">All</a></li>
											<li><a href="#">In Progress</a></li>
											<li><a href="#">Done</a></li>
											<li class="divider"></li>
											<li><a href="#">New task</a></li>
											<li><a href="#">Overdue Task</a></li>
										</ul>
									</div>
								</div>
								<div class="pull-right">
									<a href="#" class="btn btn-primary">Create Task</a>
								</div>
							</div>
							<div class="module-body table">								

								<table class="table table-message">
									<tbody>
										<tr class="heading">
											<td class="cell-icon"></td>
											<td class="cell-title">Task</td>
											<td class="cell-status hidden-phone hidden-tablet">Status</td>
											<td class="cell-time align-right">Due Date</td>
										</tr>
										<tr class="task">
											<td class="cell-icon"><i class="icon-checker high"></i></td>
											<td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
											<td class="cell-status hidden-phone hidden-tablet"><b class="due">Missed</b></td>
											<td class="cell-time align-right">Just Now</td>
										</tr>
										<tr class="task">
											<td class="cell-icon"><i class="icon-checker"></i></td>
											<td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
											<td class="cell-status hidden-phone hidden-tablet"><b class="due">Missed</b></td>
											<td class="cell-time align-right">Just Now</td>
										</tr>
										<tr class="task">
											<td class="cell-icon"><i class="icon-checker"></i></td>
											<td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
											<td class="cell-status hidden-phone hidden-tablet"><b class="due">Missed</b></td>
											<td class="cell-time align-right">Yesterday</td>
										</tr>
										<tr class="task resolved">
											<td class="cell-icon"><i class="icon-checker high"></i></td>
											<td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
											<td class="cell-status hidden-phone hidden-tablet"></td>
											<td class="cell-time align-right">15 July 2014</td>
										</tr>
										<tr class="task resolved">
											<td class="cell-icon"><i class="icon-checker high"></i></td>
											<td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
											<td class="cell-status hidden-phone hidden-tablet"></td>
											<td class="cell-time align-right">15 July 2014</td>
										</tr>
                                        <tr class="task resolved">
											<td class="cell-icon"><i class="icon-checker high"></i></td>
											<td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
											<td class="cell-status hidden-phone hidden-tablet"></td>
											<td class="cell-time align-right">15 July 2014</td>
										</tr>
                                        <tr class="task resolved">
											<td class="cell-icon"><i class="icon-checker high"></i></td>
											<td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
											<td class="cell-status hidden-phone hidden-tablet"></td>
											<td class="cell-time align-right">15 July 2014</td>
										</tr>
                                        <tr class="task resolved">
											<td class="cell-icon"><i class="icon-checker high"></i></td>
											<td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
											<td class="cell-status hidden-phone hidden-tablet"></td>
											<td class="cell-time align-right">15 July 2014</td>
										</tr>
                                        <tr class="task resolved">
											<td class="cell-icon"><i class="icon-checker high"></i></td>
											<td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
											<td class="cell-status hidden-phone hidden-tablet"></td>
											<td class="cell-time align-right">15 July 2014</td>
										</tr>
                                        <tr class="task resolved">
											<td class="cell-icon"><i class="icon-checker high"></i></td>
											<td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
											<td class="cell-status hidden-phone hidden-tablet"></td>
											<td class="cell-time align-right">15 July 2014</td>
										</tr>
                                        <tr class="task resolved">
											<td class="cell-icon"><i class="icon-checker high"></i></td>
											<td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
											<td class="cell-status hidden-phone hidden-tablet"></td>
											<td class="cell-time align-right">15 July 2014</td>
										</tr>
                                        <tr class="task resolved">
											<td class="cell-icon"><i class="icon-checker high"></i></td>
											<td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
											<td class="cell-status hidden-phone hidden-tablet"></td>
											<td class="cell-time align-right">15 July 2014</td>
										</tr>
                                        <tr class="task resolved">
											<td class="cell-icon"><i class="icon-checker high"></i></td>
											<td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
											<td class="cell-status hidden-phone hidden-tablet"></td>
											<td class="cell-time align-right">15 July 2014</td>
										</tr>
									</tbody>
								</table>


							</div>
							<div class="module-foot">
							</div>
						</div>
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<?php include "includes/footer.php"?>