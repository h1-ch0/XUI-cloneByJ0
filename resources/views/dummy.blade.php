<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Xtream UI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="noindex,nofollow">
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/libs/jquery-nice-select/nice-select.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/jquery-toast/jquery.toast.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/treeview/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/nestable2/jquery.nestable.min.css" rel="stylesheet" />
        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
		        <link href="assets/css/app_sidebar.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
		    </head>
    <body class="topbar-dark left-side-menu-light ">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
					<li class="notification-list username">
						<a class="nav-link text-white waves-effect" href="./edit_profile.php" role="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit Profile">
							admin						</a>
					</li>
                                                            <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown">
														<a href="./settings.php" class="dropdown-item notify-item"><span>Settings</span></a>
														<a href="./ips.php" class="dropdown-item notify-item"><span>Blocked IP's</span></a>
														<a href="./isps.php" class="dropdown-item notify-item"><span>Blocked ISP's</span></a>
														<a href="./useragents.php" class="dropdown-item notify-item"><span>Blocked User Agents</span></a>
														<a href="./stream_categories.php" class="dropdown-item notify-item"><span>Categories</span></a>
														<a href="./channel_order.php" class="dropdown-item notify-item"><span>Channel Order</span></a>
														<a href="./epgs.php" class="dropdown-item notify-item"><span>EPG's</span></a>
														<a href="./watch.php" class="dropdown-item notify-item"><span>Folder Watch</span></a>
														<a href="./groups.php" class="dropdown-item notify-item"><span>Groups</span></a>
														<a href="./mass_delete.php" class="dropdown-item notify-item"><span>Mass Delete</span></a>
														<a href="./packages.php" class="dropdown-item notify-item"><span>Packages</span></a>
														<a href="./process_monitor.php?server=1" class="dropdown-item notify-item"><span>Process Monitor</span></a>
														<a href="./rtmp_ips.php" class="dropdown-item notify-item"><span>RTMP IP's</span></a>
														<a href="./subresellers.php" class="dropdown-item notify-item"><span>Subresellers</span></a>
														<a href="./profiles.php" class="dropdown-item notify-item"><span>Transcode Profiles</span></a>
													</div>
                    </li>
                                        <li class="notification-list">
                        <a href="./logout.php" class="nav-link right-bar-toggle waves-effect text-white">
                            <i class="fe-power noti-icon"></i>
                        </a>
                    </li>
                </ul>
                <!-- LOGO -->
                <div class="logo-box">
                    <a href="dashboard.php" class="logo text-center">
                        <span class="logo-lg">
                            <img src="assets/images/logo.png" alt="" height="26">
                        </span>
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="26">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect text-white">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
                <div class="slimscroll-menu">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul class="metismenu" id="side-menu">
                            <li>
                                <a href="./dashboard.php"><i class="la la-dashboard"></i><span>Dashboard</span></a>
                            </li>
                                                        <li>
                                <a href="#"><i class="la la-server"></i><span>Servers</span><span class="arrow-right"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
									                                    <li><a href="./server.php">Add Load Balancer</a></li>
                                    <li><a href="./install_server.php">Install Load Balancer</a></li>
									                                    <li><a href="./servers.php">Manage Servers</a></li>
									                                    <div class="separator"></div>
                                                                        <li><a href="./live_connections.php">Live Connections</a></li>
									                                    <li><a href="./user_activity.php">Activity Logs</a></li>
                                    <li><a href="./user_ips.php">Line IP Usage</a></li>
									                                </ul>
                            </li>
                            							<li>
                                <a href="#"> <i class="la la-user"></i><span>Users</span><span class="arrow-right"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
									                                    <li><a href="./user.php">Add User</a></li>
									                                    <li><a href="./users.php">Manage Users</a></li>
									                                    <li><a href="./user_mass.php">Mass Edit Users</a></li>
									                                    <div class="separator"></div>
                                                                        <li><a href="./reg_user.php">Add Registered User</a></li>
									                                    <li><a href="./reg_users.php">Manage Registered Users</a></li>
									                                    <div class="separator"></div>
                                                                        <li><a href="./credit_logs.php">Credit Logs</a></li>
									                                    <li><a href="./client_logs.php">Client Logs</a></li>
									                                    <li><a href="./reg_user_logs.php">Reseller Logs</a></li>
									                                </ul>
                            </li>
							                            <li>
                                <a href="#"> <i class="la la-tablet"></i><span>Devices</span><span class="arrow-right"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
									                                    <li><a href="./user.php?mag">Add MAG Device</a></li>
                                    <li><a href="./mag.php">Link MAG User</a></li>
									                                    <li><a href="./mags.php">Manage MAG Devices</a></li>
									                                    <div class="separator"></div>
                                                                        <li><a href="./user.php?e2">Add Enigma Device</a></li>
                                    <li><a href="./enigma.php">Link Enigma User</a></li>
									                                    <li><a href="./enigmas.php">Manage Enigma Devices</a></li>
									                                    <div class="separator"></div>
                                    <li><a href="./mag_events.php">MAG Event Logs</a></li>
									                                </ul>
                            </li>
							                            <li>
                                <a href="#"> <i class="la la-video-camera"></i><span>VOD</span><span class="arrow-right"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
																		<li><a href="./movie.php">Add Movie</a></li>
																		<li><a href="./movie.php?import">Import Movies</a></li>
																		<li><a href="./movies.php">Manage Movies</a></li>
																		<div class="separator"></div>
																		<li><a href="./serie.php">Add Series</a></li>
																		<li><a href="./series.php">Manage Series</a></li>
																		<li><a href="./episodes.php">Manage Episodes</a></li>
									                                    <div class="separator"></div>
                                    									<li><a href="./movie_mass.php">Mass Edit Movies</a></li>
																		<li><a href="./series_mass.php">Mass Edit Series</a></li>
                                            <li><a href="./episodes_mass.php">Mass Edit Episodes</a></li>
									                                </ul>
                            </li>
							                            <li>
                                <a href="#"> <i class="mdi mdi-radio-tower"></i><span>Stations</span><span class="arrow-right"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
																		<li><a href="./radio.php">Add Station</a></li>
																		<li><a href="./radios.php">Manage Stations</a></li>
																		                                    <div class="separator"></div>
									<li><a href="./radio_mass.php">Mass Edit Stations</a></li>
									                                </ul>
                            </li>
							                            <li>
                                <a href="#"> <i class="la la-play-circle-o"></i><span>Streams</span><span class="arrow-right"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
									                                    <li><a href="./stream.php">Add Stream</a></li>
									                                    <li><a href="./created_channel.php">Create Channel</a></li>
									                                    <li><a href="./stream.php?import">Import Streams</a></li>
									                                    <li><a href="./streams.php">Manage Streams</a></li>
									                                    <div class="separator"></div>
                                                                        <li><a href="./stream_mass.php">Mass Edit Streams</a></li>
									                                    <li><a href="./stream_logs.php">Stream Logs</a></li>
																		<li><a href="./stream_tools.php">Stream Tools</a></li>
									                                    <li><a href="./fingerprint.php">Fingerprint</a></li>
									                                </ul>
                            </li>
							                            <li>
                                <a href="#"> <i class="mdi mdi-flower-tulip-outline"></i><span>Bouquets</span><span class="arrow-right"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
									                                    <li><a href="./bouquet.php">Add Bouquet</a></li>
									                                    <li><a href="./bouquets.php">Manage Bouquets</a></li>
                                                                        <li><a href="./bouquet_sort.php">Order Bouquets</a></li>
									                                </ul>
                            </li>
                                                        <li>
                                <a href="./tickets.php"> <i class="la la-envelope"></i><span>Tickets</span></a>
                            </li>
                                                    </ul>
                    </div>
                    <!-- End Sidebar -->
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->
            </div>        <div class="content-page"><div class="content"><div class="container-fluid">
        				                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <ul class="nav nav-tabs nav-bordered dashboard-tabs" style="flex-wrap: nowrap !important;">
                                <li class="nav-item">
                                    <a data-id="home" href="#" class="nav-link active">
                                        Overview                                    </a>
                                </li>
                                                                <li class="nav-item">
                                    <a data-id="1" href="#" class="nav-link">
                                        Main Server                                    </a>
                                </li>
                                                            </ul>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 
                <div class="tab-content">
                    <div class="tab-pane show active" id="server-home">
                        <div class="row">
                            <div class="col-md-6 col-xl-2">
																<a href="./live_connections.php">
																	<div class="card-box active-connections">
										<div class="row">
											<div class="col-6">
																								<div class="avatar-sm bg-soft-purple rounded">
													<i class="fe-zap avatar-title font-22 text-purple"></i>
												</div>
																							</div>
											<div class="col-6">
												<div class="text-right">
													<h3 class="text-dark my-1"><span data-plugin="counterup" class="entry">0</span></h3>
													<p class="text-muted mb-1 text-truncate">Open Connections</p>
												</div>
											</div>
										</div>
									</div> <!-- end card-box-->
																</a>
								                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-2">
																<a href="./live_connections.php">
																	<div class="card-box online-users">
										<div class="row">
											<div class="col-6">
																								<div class="avatar-sm bg-soft-success rounded">
													<i class="fe-users avatar-title font-22 text-success"></i>
												</div>
																							</div>
											<div class="col-6">
												<div class="text-right">
													<h3 class="text-dark my-1"><span data-plugin="counterup" class="entry">0</span></h3>
													<p class="text-muted mb-1 text-truncate">Online Users</p>
												</div>
											</div>
										</div>
									</div> <!-- end card-box-->
																</a>
								                            </div> <!-- end col -->
							
							<div class="col-md-6 col-xl-2">
																<a href="./streams.php?filter=1">
																	<div class="card-box active-streams">
										<div class="row">
											<div class="col-6">
																								<div class="avatar-sm bg-soft-pink rounded">
													<i class="fe-play avatar-title font-22 text-pink"></i>
												</div>
																							</div>
											<div class="col-6">
												<div class="text-right">
													<h3 class="text-dark my-1"><span data-plugin="counterup" class="entry">0</span></h3>
													<p class="text-muted mb-1 text-truncate">Online Streams</p>
												</div>
											</div>
										</div>
									</div> <!-- end card-box-->
																</a>
								                            </div> <!-- end col -->
							
							<div class="col-md-6 col-xl-2">
																<a href="./streams.php?filter=2">
																	<div class="card-box offline-streams">
										<div class="row">
											<div class="col-6">
																								<div class="avatar-sm bg-soft-info rounded">
													<i class="fe-pause avatar-title font-22 text-info"></i>
												</div>
																							</div>
											<div class="col-6">
												<div class="text-right">
													<h3 class="text-dark my-1"><span data-plugin="counterup" class="entry">0</span></h3>
													<p class="text-muted mb-1 text-truncate">Offline Streams</p>
												</div>
											</div>
										</div>
									</div> <!-- end card-box-->
																</a>
								                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-2">
																<a href="./live_connections.php">
																	<div class="card-box input-flow">
										<div class="row">
											<div class="col-6">
																								<div class="avatar-sm bg-soft-purple rounded">
													<i class="fe-zap avatar-title font-22 text-purple"></i>
												</div>
																							</div>
											<div class="col-6">
												<div class="text-right">
													<h3 class="text-dark my-1"><span data-plugin="counterup" class="entry">0</span><small>Mbps</small></h3>
													<p class="text-muted mb-1 text-truncate">Total Input</p>
												</div>
											</div>
										</div>
									</div> <!-- end card-box-->
																</a>
								                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-2">
																<a href="./live_connections.php">
																	<div class="card-box output-flow">
										<div class="row">
											<div class="col-6">
																								<div class="avatar-sm bg-soft-purple rounded">
													<i class="fe-zap avatar-title font-22 text-purple"></i>
												</div>
																							</div>
											<div class="col-6">
												<div class="text-right">
													<h3 class="text-dark my-1"><span data-plugin="counterup" class="entry">0</span><small>Mbps</small></h3>
													<p class="text-muted mb-1 text-truncate">Total Output</p>
												</div>
											</div>
										</div>
									</div> <!-- end card-box-->
																</a>
								                            </div> <!-- end col -->                            
                                                        
														<div class="col-xl-3 col-md-6">
								<div class="card-header bg-purple py-3 text-white">
																		<div class="float-right">
										<a href="./live_connections.php?server_id=1" class="arrow-none card-drop">
											<i class="mdi mdi-play"></i>
										</a>
									</div>
																		<h5 class="card-title mb-0 text-white">Main Server</h5>
								</div>
								<div class="card-header py-3 text-white bg-white">
									<div class="row">
										<div class="col-md-4" align="center">
											<h4 class="header-title">Conns.</h4>
											<p class="sub-header" id="s_1_conns">0</p>
										</div>
										<div class="col-md-4" align="center">
											<h4 class="header-title">Users</h4>
											<p class="sub-header" id="s_1_users">0</p>
										</div>
										<div class="col-md-4" align="center">
											<h4 class="header-title">Online</h4>
											<p class="sub-header" id="s_1_online">0</p>
										</div>
									</div>
									<div class="row" style="margin-bottom:-20px;">
										<div class="col-md-4" align="center">
											<h4 class="header-title">Input</h4>
											<p class="sub-header" id="s_1_input">0 Mbps</p>
										</div>
										<div class="col-md-4" align="center">
											<h4 class="header-title">Output</h4>
											<p class="sub-header" id="s_1_output">0 Mbps</p>
										</div>
										<div class="col-md-4" align="center">
											<h4 class="header-title">Uptime</h4>
											<p class="sub-header" id="s_1_uptime">0d 0h</p>
										</div>
									</div>
								</div>
								<div class="card-box">
									<div class="row">
                                        <div class="col-md-6" align="center">
                                            <a href="./process_monitor.php?server=1">
                                                <h4 class="header-title">CPU Usage</h4>
                                                <input id="s_1_cpu" data-plugin="knob" data-width="64" data-height="64" data-fgColor="#675db7" data-bgColor="#e8e7f4" value="0" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
                                            </a>
                                        </div>
                                        <div class="col-md-6" align="center">
                                            <a href="./process_monitor.php?server=1&mem">
                                                <h4 class="header-title">Mem Usage</h4>
                                                <input id="s_1_mem" data-plugin="knob" data-width="64" data-height="64" data-fgColor="#675db7" data-bgColor="#e8e7f4" value="0" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
                                            </a>
                                        </div>
									</div>
								</div>
							</div>
							                        </div>
                    </div>
                    
                    <div class="tab-pane tab-pane-server" id="server-tab">
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box active-connections">
                                    <div class="row">
                                        <div class="col-6">
											                                            <div class="avatar-sm bg-soft-purple rounded">
                                                <i class="fe-zap avatar-title font-22 text-purple"></i>
                                            </div>
											                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup" class="entry">0</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Open Connections</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <h6 class="text-uppercase">Total Connections <span class="float-right entry-percentage">0</span></h6>
                                        <div class="progress progress-sm m-0">
																						<div class="progress-bar bg-purple" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
											                                                <span class="sr-only">0%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box online-users">
                                    <div class="row">
                                        <div class="col-6">
											                                            <div class="avatar-sm bg-soft-success rounded">
                                                <i class="fe-users avatar-title font-22 text-success"></i>
                                            </div>
											                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup" class="entry">0</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Online Users</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <h6 class="text-uppercase">Total Active <span class="float-right entry-percentage">0</span></h6>
                                        <div class="progress progress-sm m-0">
											                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
											                                                <span class="sr-only">0%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box input-flow">
                                    <div class="row">
                                        <div class="col-6">
											                                            <div class="avatar-sm bg-soft-primary rounded">
                                                <i class="fe-trending-down avatar-title font-22 text-primary"></i>
                                            </div>
											                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup" class="entry">0</span> <small>Mbps</small></h3>
                                                <p class="text-muted mb-1 text-truncate">Input Flow</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <h6 class="text-uppercase">Network Load <span class="float-right entry-percentage">0%</span></h6>
                                        <div class="progress progress-sm m-0">
											                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
											                                                <span class="sr-only">0%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box output-flow">
                                    <div class="row">
                                        <div class="col-6">
											                                            <div class="avatar-sm bg-soft-info rounded">
                                                <i class="fe-trending-up avatar-title font-22 text-info"></i>
                                            </div>
											                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup" class="entry">0</span> <small>Mbps</small></h3>
                                                <p class="text-muted mb-1 text-truncate">Output Flow</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <h6 class="text-uppercase">Network Load <span class="float-right entry-percentage">0%</span></h6>
                                        <div class="progress progress-sm m-0">
											                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
											                                                <span class="sr-only">0%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                            
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box active-streams">
                                    <div class="row">
                                        <div class="col-6">
											                                            <div class="avatar-sm bg-soft-purple rounded">
                                                <i class="fe-arrow-up-right avatar-title font-22 text-purple"></i>
                                            </div>
											                                        </div>
                                        <div class="col-6">
                                            <a href="javascript:void(0);" onClick="onlineStreams()">
                                            <div class="text-right">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup" class="entry">0</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Online Streams</p>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" onClick="offlineStreams()">
                                    <div class="mt-3">
                                        <h6 class="text-uppercase">Offline Streams <span class="float-right entry-percentage">0</span></h6>
                                        <div class="progress progress-sm m-0">
											                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
											                                                <span class="sr-only">0%</span>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box cpu-usage">
                                    <div class="row">
                                        <div class="col-6">
											                                            <div class="avatar-sm bg-soft-success rounded">
                                                <i class="fe-cpu avatar-title font-22 text-success"></i>
                                            </div>
											                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup" class="entry">0</span><small>%</small></h3>
                                                <p class="text-muted mb-1 text-truncate">CPU Usage</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <h6 class="text-uppercase">&nbsp;</h6>
                                        <div class="progress progress-sm m-0">
											                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
											                                                <span class="sr-only">0%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box mem-usage">
                                    <div class="row">
                                        <div class="col-6">
											                                            <div class="avatar-sm bg-soft-primary rounded">
                                                <i class="fe-terminal avatar-title font-22 text-primary"></i>
                                            </div>
											                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup" class="entry">0</span><small>%</small></h3>
                                                <p class="text-muted mb-1 text-truncate">Mem Usage</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <h6 class="text-uppercase">&nbsp;</h6>
                                        <div class="progress progress-sm m-0">
											                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
											                                                <span class="sr-only">0%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                           
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box uptime">
                                    <div class="row">
                                        <div class="col-6">
											                                            <div class="avatar-sm bg-soft-info rounded">
                                                <i class="fe-power avatar-title font-22 text-info"></i>
                                            </div>
											                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark my-1 entry">--</h3>
                                                <p class="text-muted mb-1 text-truncate">System Uptime</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <h6 class="text-uppercase">&nbsp;</span></h6>
                                        <div class="progress-sm m-0"></div>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->

                        </div>
                    </div>
                </div>
                <!-- end row -->
				               
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
        </div>        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 copyright text-center">Copyright &copy; 2025 - <a href="https://xtream-ui.com">Xtream UI</a> R22F - Early Access</div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="assets/libs/peity/jquery.peity.min.js"></script>
		<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/libs/jquery-number/jquery.number.js"></script>
        <script src="assets/libs/datatables/dataTables.bootstrap4.js"></script>
        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>
        <script src="assets/js/app.min.js"></script>
        
        <script>
        rServerID = "home";
		rChart = null;
		rDates = null;
		rOptions = null;
        
        function offlineStreams() {
            window.location.href = "./streams.php?filter=2&server=" + window.rServerID;
        }
        
        function onlineStreams() {
            window.location.href = "./streams.php?filter=1&server=" + window.rServerID;
        }
		
        function getStats(auto=true) {
            var rStart = Date.now();
            if (window.rServerID == "home") {
                rURL = "./api.php?action=stats";
            } else {
                rURL = "./api.php?action=stats&server_id=" + window.rServerID;
            }
            $.getJSON(rURL, function(data) {
                // Open Connections
                var rCapacity = Math.ceil((data.open_connections / data.total_connections) * 100);
                if (isNaN(rCapacity)) { rCapacity = 0; }
                $(".active-connections .entry").html($.number(data.open_connections, 0));
                $(".active-connections .entry-percentage").html($.number(data.total_connections, 0));
                $(".active-connections .progress-bar").prop("aria-valuenow", rCapacity);
                $(".active-connections .progress-bar").css("width", rCapacity.toString() + "%");
                $(".active-connections .sr-only").html(rCapacity.toString() + "%");
                // Online Users
                var rCapacity = Math.ceil((data.online_users / data.total_users) * 100);
                if (isNaN(rCapacity)) { rCapacity = 0; }
                $(".online-users .entry").html($.number(data.online_users, 0));
                $(".online-users .entry-percentage").html($.number(data.total_users, 0));
                $(".online-users .progress-bar").prop("aria-valuenow", rCapacity);
                $(".online-users .progress-bar").css("width", rCapacity.toString() + "%");
                $(".online-users .sr-only").html(rCapacity.toString() + "%");
                // Network Load - Input
                var rCapacity = Math.ceil((Math.ceil(data.bytes_received) / data.network_guaranteed_speed) * 100);
                if (isNaN(rCapacity)) { rCapacity = 0; }
                $(".input-flow .entry").html($.number(Math.ceil(data.bytes_received), 0));
                $(".input-flow .entry-percentage").html(rCapacity.toString() + "%");
                $(".input-flow .progress-bar").prop("aria-valuenow", rCapacity);
                $(".input-flow .progress-bar").css("width", rCapacity.toString() + "%");
                $(".input-flow .sr-only").html(rCapacity.toString() + "%");
                // Network Load - Output
                var rCapacity = Math.ceil((Math.ceil(data.bytes_sent) / data.network_guaranteed_speed) * 100);
                if (isNaN(rCapacity)) { rCapacity = 0; }
                $(".output-flow .entry").html($.number(Math.ceil(data.bytes_sent), 0));
                $(".output-flow .entry-percentage").html(rCapacity.toString() + "%");
                $(".output-flow .progress-bar").prop("aria-valuenow", rCapacity);
                $(".output-flow .progress-bar").css("width", rCapacity.toString() + "%");
                $(".output-flow .sr-only").html(rCapacity.toString() + "%");
                // Active Streams
                var rCapacity = Math.ceil((data.total_running_streams / (data.offline_streams + data.total_running_streams)) * 100);
                if (isNaN(rCapacity)) { rCapacity = 0; }
                $(".active-streams .entry").html($.number(data.total_running_streams, 0));
                $(".active-streams .entry-percentage").html($.number(data.offline_streams, 0));
                $(".active-streams .progress-bar").prop("aria-valuenow", rCapacity);
                $(".active-streams .progress-bar").css("width", rCapacity.toString() + "%");
                $(".active-streams .sr-only").html(rCapacity.toString() + "%");
				$(".offline-streams .entry").html($.number(data.offline_streams, 0));
                // CPU Usage
                $(".cpu-usage .entry").html(data.cpu);
                $(".cpu-usage .entry-percentage").html(data.cpu.toString() + "%");
                $(".cpu-usage .progress-bar").prop("aria-valuenow", data.cpu);
                $(".cpu-usage .progress-bar").css("width", data.cpu.toString() + "%");
                $(".cpu-usage .sr-only").html(data.cpu.toString() + "%");
                // Memory Usage
                $(".mem-usage .entry").html(data.mem);
                $(".mem-usage .entry-percentage").html(data.mem.toString() + "%");
                $(".mem-usage .progress-bar").prop("aria-valuenow", data.mem);
                $(".mem-usage .progress-bar").css("width", data.mem.toString() + "%");
                $(".mem-usage .sr-only").html(data.mem.toString() + "%");
                // Uptime
				if (data.uptime) {
					$(".uptime .entry").html(data.uptime.split(" ").slice(0,2).join(" "));
				}
				// Per Server
				$(data.servers).each(function(i) {
					$("#s_" + data.servers[i].server_id + "_conns").html($.number(data.servers[i].open_connections, 0));
					$("#s_" + data.servers[i].server_id + "_users").html($.number(data.servers[i].online_users, 0));
					$("#s_" + data.servers[i].server_id + "_online").html($.number(data.servers[i].total_running_streams, 0));
					$("#s_" + data.servers[i].server_id + "_input").html($.number(Math.ceil(data.servers[i].bytes_received), 0) + " Mbps");
					$("#s_" + data.servers[i].server_id + "_output").html($.number(Math.ceil(data.servers[i].bytes_sent), 0) + " Mbps");
					$("#s_" + data.servers[i].server_id + "_cpu").val(data.servers[i].cpu).trigger('change');
					$("#s_" + data.servers[i].server_id + "_mem").val(data.servers[i].mem).trigger('change');
					if (data.servers[i].uptime) {
						$("#s_" + data.servers[i].server_id + "_uptime").html(data.servers[i].uptime.split(" ").slice(0,2).join(" "));
					}
				});
                if (auto) {
                    if (Date.now() - rStart < 1000) {
                        setTimeout(getStats, 1000 - (Date.now() - rStart));
                    } else {
                        getStats();
                    }
                }
            }).fail(function() {
                if (auto) {
                    setTimeout(getStats, 1000);
                }
            });
        }
        
        $('.dashboard-tabs .nav-link').on('click', function (e) {
            window.rServerID = $(e.target).data("id");
            getStats(false);
            $(".nav-link").each(function() {
                $(this).removeClass("active");
            });
            $(e.target).addClass("active");
            if (window.rServerID == "home") {
                if (!$("#server-home").is(":visible")) {
                    $("#server-tab").hide();
                    $("#server-home").show();
                }
            } else {
                if (!$("#server-tab").is(":visible")) {
                    $("#server-home").hide();
                    $("#server-tab").show();
                }
            }
        });
		        $(document).ready(function() {
            getStats();
			        });
        </script>
    </body>
</html>
