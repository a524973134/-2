<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Ready Bootstrap Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
	<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="Publish.js"></script>
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="First.html" class="logo">
					信息统计系统
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-envelope"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-bell"></i>
								<span class="notification">3</span>
							</a>
							<ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="la la-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													New user registered
												</span>
												<span class="time">5 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-success"> <i class="la la-comment"></i> </div>
											<div class="notif-content">
												<span class="block">
													Rahmad commented on Admin
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="assets/img/profile2.jpg" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-danger"> <i class="la la-heart"></i> </div>
											<div class="notif-content">
												<span class="block">
													Farrah liked Admin
												</span>
												<span class="time">17 minutes ago</span> 
											</div>
										</a>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="la la-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="assets/img/profile.jpg" alt="user-img" width="36" class="img-circle"><span >杨谨铭</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="assets/img/profile.jpg" alt="user"></div>
										<div class="u-text">
											<h4>杨谨铭</h4>
											<p class="text-muted">hello@themekita.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
										</div>
									</li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
									<a class="dropdown-item" href="#"></i> My Balance</a>
									<a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="assets/img/profile.jpg">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									杨谨铭
									<span class="user-level">管理员</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
							<a href="index.php">
								<i class="la la-dashboard"></i>
								<p>最新任务</p>
								<span class="badge badge-danger">3</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="Publish.html">
								<i class="la la-keyboard-o"></i>
								<p>发布任务</p>
								<span class="badge badge-count"></span>
							</a>
						</li>
						<li class="nav-item">
							<a href="Statistics.html">
								<i class="la la-th"></i>
								<p>查询进度</p>
								<span class="badge badge-count">6</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">最新任务</h4>
						<div class="row">
							<div class="col-md-6" style="margin: auto;">
								<div class="card card-tasks" id="main">
									<div class="card-header ">
										<h4 class="card-title">Tasks</h4>
										<p class="card-category">To Do List</p>
									</div>
									<div class="card-body ">
										<div class="table-full-width">
											<table class="table">
												<thead>
													<tr>
														<th>
															<div class="form-check">
																<label class="form-check-label">
																	<input class="form-check-input  select-all-checkbox" type="checkbox" data-select="checkbox" data-target=".task-select">
																	<span class="form-check-sign"></span>
																</label>
															</div>
														</th>
														<th>Task</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
												<?php
												$servername = "localhost";
												$username = "root";
												$password = "123456";
												$dbname = "info";

												//编辑方法
												function edit(){
													//....
												  }
													
												// 创建连接
												$link = new mysqli($servername, $username, $password, $dbname);
												$q="SELECT tname FROM tablename";//设置查询指令
												$result=mysqli_query($link,$q);//执行查询
												if (mysqli_num_rows($result) > 0) {
													$ar = array();
													while($rows = mysqli_fetch_array($result))
													{
													    $ar[] = $rows['tname'];//把id存放到数组里
													}
													// $row = mysqli_fetch_array($result);
													$n = count($ar);
													for($j = 0; $j < $n; $j++) {
														echo 
														"
														<tr>
															<td>
																<div class=\"form-check\">
																	<label class=\"form-check-label\">
																		<input class=\"form-check-input task-select\" type=\"checkbox\">
																		<span class=\"form-check-sign\"></span>
																	</label>
																</div>
															</td>
															<td>$ar[$j]</td>
															<td class=\"td-actions text-right\">
																<div class=\"form-button-action\">
																	<button type=\"button\" data-toggle=\"tooltip\" title=\"编辑\" class=\"btn btn-link btn-simple-primary\" onclick=\"edit(this)\";>
																		<i class=\"la la-edit\"></i>
																	</button>
																	<button type=\"button\" data-toggle=\"tooltip\" title=\"删除\" class=\"btn btn-link btn-simple-danger\" onclick=\"removeTr(this)\";>
																		<i class=\"la la-times\"></i>
																	</button>
																</div>
															</td>
														</tr>
														";
													}
												}
												?>
													<!-- <tr>
														<td>
															<div class="form-check">
																<label class="form-check-label">
																	<input class="form-check-input task-select" type="checkbox">
																	<span class="form-check-sign"></span>
																</label>
															</div>
														</td>
														<td>15级校运会</td>
														<td class="td-actions text-right">
															<div class="form-button-action">
																<a href="Fill.html">
																<button type="button" data-toggle="tooltip" title="编辑" class="btn btn-link <btn-simple-primary">
																	<i class="la la-edit"></i>
																</button></a>
																<button type="button" data-toggle="tooltip" title="删除" class="btn btn-link btn-simple-danger" onclick="removeTr(this)";>
																	<i class="la la-times"></i>
																</button>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check">
																<label class="form-check-label">
																	<input class="form-check-input task-select" type="checkbox">
																	<span class="form-check-sign"></span>
																</label>
															</div>
														</td>
														<td>14级校运会</td>
														<td class="td-actions text-right">
															<div class="form-button-action">
																<button type="button" data-toggle="tooltip" title="编辑" class="btn btn-link <btn-simple-primary">
																	<i class="la la-edit"></i>
																</button>
																<button type="button" data-toggle="tooltip" title="删除" class="btn btn-link btn-simple-danger" onclick="removeTr(this)";>
																	<i class="la la-times"></i>
																</button>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check">
																<label class="form-check-label">
																	<input class="form-check-input task-select" type="checkbox">
																	<span class="form-check-sign"></span>
																</label>
															</div>
														</td>
														<td>15级贫困生
														</td>
														<td class="td-actions text-right">
															<div class="form-button-action">
																<button type="button" data-toggle="tooltip" title="编辑" class="btn btn-link <btn-simple-primary">
																	<i class="la la-edit"></i>
																</button>
																<button type="button" data-toggle="tooltip" title="删除" class="btn btn-link btn-simple-danger"  onclick="removeTr(this)";>
																	<i class="la la-times"></i>
																</button>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check">
																<label class="form-check-label">
																	<input class="form-check-input task-select" type="checkbox">
																	<span class="form-check-sign"></span>
																</label>
															</div>
														</td>
														<td>14级贫困生</td>
														<td class="td-actions text-right">
															<div class="form-button-action">
																<button type="button" data-toggle="tooltip" title="编辑" class="btn btn-link <btn-simple-primary">
																	<i class="la la-edit"></i>
																</button>
																<button type="button" data-toggle="tooltip" title="删除" class="btn btn-link btn-simple-danger"  onclick="removeTr(this)";>
																	<i class="la la-times"></i>
																</button>
															</div>
														</td>
													</tr> -->
												</tbody>
											</table>
										</div>
									</div>
									<div class="card-footer ">
										<div class="stats">
											<i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
										</div>
									</div>
								</div>
								<div class="card" style="display: none;">
									<div class="card-body">
										<form action="main.php" method="post">
											<div id="IPTitle" class="form-group">
												<label for="pillInput">Title</label>
												<input type="text" class="form-control input-pill" id="pillInput" name="IPtitle" placeholder="请输入你的任务名称">
											</div>
											<div id="IPCollege" class="form-group" style="display: none;">
												<label for="pillInput">College</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入你的学院">
											</div>
											<div id="IPClass" class="form-group" style="display: none;">
												<label for="pillInput">Class</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入你的班级">
											</div>
											<div id="IPStudentID" class="form-group" style="display: none;">
												<label for="pillInput">Student ID</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入你的学号">
											</div>
											<div id="IPName" class="form-group" style="display: none;">
												<label for="pillInput">Name</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入你的姓名">
											</div>
											<div id="IPGender" class="form-check" style="display: none;">
												<label>Gender</label><br/>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="optionsRadios" value=""  checked="">
													<span class="form-radio-sign">Male</span>
												</label>
												<label class="form-radio-label ml-3">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="">
													<span class="form-radio-sign">Female</span>
												</label>
											</div>
											<div id="IPNative" class="form-group" style="display: none;">
												<label for="pillInput">Native</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入你的籍贯">
											</div>
											<div id="IPSpe" class="form-group">
												<label for="comment">请输入特定信息：</label>
												<textarea class="form-control" id="comment" rows="5"></textarea>
											</div>
											<div class="form-group">
												<label for="exampleFormControlFile1">请上传相关文件：</label>
												<input type="file" class="form-control-file" id="exampleFormControlFile1">
											</div>
											<div class="card-action">
												<input type="submit" class="btn btn-success" value="发布任务">
												<!-- <button class="btn btn-success">发布任务</button> -->
												<!-- <button class="btn btn-danger">重置任务</button> -->
											</div>
										</form>										
									</div>
								</div>
								<div class="card" id="cet46" style="display: none;">
									<div class="card-body">
										<form action="index_cet46.php" method="post">
											<div class="form-group">
												<h4 class="page-title">英语四六级通过情况</h4>
											</div>
											<div id="IPTitle" class="form-group">
												<label for="pillInput">Title</label>
												<input type="text" class="form-control input-pill" id="pillInput" name="IPtitle" placeholder="请输入任务名称">
											</div>
											<div id="IPCollege" class="form-group">
												<label for="pillInput">College</label>
												<input type="text" class="form-control input-pill" id="pillInput" name="IPcollege" placeholder="请输入你的学院">
											</div>
											<div id="IPClass" class="form-group">
												<label for="pillInput">Class</label>
												<input type="text" class="form-control input-pill" id="pillInput" name="IPclass" placeholder="请输入你的班级">
											</div>
											<div id="IPStudentID" class="form-group">
												<label for="pillInput">Student ID</label>
												<input type="text" class="form-control input-pill" id="pillInput" name="IPID" placeholder="请输入你的学号">
											</div>
											<div id="IPName" class="form-group">
												<label for="pillInput">Name</label>
												<input type="text" class="form-control input-pill" id="pillInput" name="IPname" placeholder="请输入你的姓名">
											</div>
											<div id="IPCet46" class="form-check">
												<label>是否通过英语四级</label><br/>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="cet4" value="通过">
													<span class="form-radio-sign">是</span>
												</label>
												<label class="form-radio-label ml-3">
													<input class="form-radio-input" type="radio" name="cet4" value="未通过">
													<span class="form-radio-sign">否</span>
												</label>
											</div>
											<div id="IPCet46" class="form-check">
												<label>是否通过英语六级</label><br/>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="cet6" value="通过">
													<span class="form-radio-sign">是</span>
												</label>
												<label class="form-radio-label ml-3">
													<input class="form-radio-input" type="radio" name="cet6" value="未通过">
													<span class="form-radio-sign">否</span>
												</label>
											</div>
											<div class="card-action">
												<input type="submit" class="btn btn-success" value="提交">
												<!-- <button class="btn btn-success">发布任务</button> -->
												<!-- <button class="btn btn-danger">重置任务</button> -->
											</div>
										</form>										
									</div>
								</div>
								<div class="card" id="sportsMeeting" style="display: none;">
									<div class="card-body">
										<form action="index_sports.php" method="post">
											<div class="form-group">
												<h4 class="page-title">阳光体育运动会报名</h4>
											</div>
											<div id="IPTitle" class="form-group">
												<label for="pillInput">Title</label>
												<input type="text" class="form-control input-pill" id="pillInput" name="IPtitle" placeholder="请输入任务主题">
											</div>
											<div id="IPCollege" class="form-group">
												<label for="pillInput">College</label>
												<input type="text" class="form-control input-pill" id="pillInput" name="IPcollege" placeholder="请输入你的学院">
											</div>
											<div id="IPClass" class="form-group">
												<label for="pillInput">Class</label>
												<input type="text" class="form-control input-pill" id="pillInput" name="IPclass" placeholder="请输入你的班级">
											</div>
											<div id="IPStudentID" class="form-group">
												<label for="pillInput">Student ID</label>
												<input type="text" class="form-control input-pill" id="pillInput" name="IPID" placeholder="请输入你的学号">
											</div>
											<div id="IPName" class="form-group">
												<label for="pillInput">Name</label>
												<input type="text" class="form-control input-pill" id="pillInput" name="IPname" placeholder="请输入你的姓名">
											</div>
											<div id="IPGender" class="form-check">
												<label>Gender</label><br/>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="gender" value="男" id="male" onclick="checkBoxDivShowMaleItem(this)">
													<span class="form-radio-sign">男</span>
												</label>
												<label class="form-radio-label ml-3">
													<input class="form-radio-input" type="radio" name="gender" value="女" id="female" onclick="checkBoxDivShowFemaleItem(this)">
													<span class="form-radio-sign">女</span>
												</label>
											</div>
											<div id="IPMaleItem" class="form-group" style="display: none;">
												<label>Choose Items</label><br/>
												<p class="demo">
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" name="m1syts" value="1">
														<span class="form-check-sign">男子单人1分钟双摇跳绳</span>
													</label></br>
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" name="msjjsb" value="1">
														<span class="form-check-sign">男子单人双脚夹沙包掷远</span>
													</label></br>
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" name="m3msgh" value="1">
														<span class="form-check-sign">男子单人30米摸石过河</span>
													</label></br>
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" name="m1ydts" value="1">
														<span class="form-check-sign">男子双人1分钟原地跳绳</span>
													</label></br>
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" name="m2rsz5" value="1">
														<span class="form-check-sign">男子两人三足50米跑</span>
													</label></br>
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" name="mjl166" value="1">
														<span class="form-check-sign">16人x60米迎面接力</span>
													</label>
												</p>
											</div>
											<div id="IPFemaleItem" class="form-group" style="display: none;">
												<label>Choose Items</label><br/>
												<p class="demo">
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" name="f1syts" value="1">
														<span class="form-check-sign">女子单人1分钟双摇跳绳</span>
													</label></br>
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" name="fsjjsb" value="1">
														<span class="form-check-sign">女子单人双脚夹沙包掷远</span>
													</label></br>
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" name="f3msgh" value="1">
														<span class="form-check-sign">女子单人30米摸石过河</span>
													</label></br>
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" name="f1drjq" value="1">
														<span class="form-check-sign">女子单人1分钟毽球</span>
													</label></br>
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" name="f2rsz5" value="1">
														<span class="form-check-sign">女子两人三足50米跑</span>
													</label></br>
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" name="f2ydts" value="1">
														<span class="form-check-sign">女子双人1分钟原地跳绳</span>
													</label></br>
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" name="f2pqcd" value="1">
														<span class="form-check-sign">女子双人排球传垫</span>
													</label></br>
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" name="fjl166" value="1">
														<span class="form-check-sign">16人x60米迎面接力</span>
													</label>
												</p>
											</div>
											<div class="card-action">
												<input type="submit" class="btn btn-success" value="提交">
												<!-- <button class="btn btn-success">发布任务</button> -->
												<!-- <button class="btn btn-danger">重置任务</button> -->
											</div>
										</form>										
									</div>
								</div>
								<div class="card" id="poor" style="display: none;">
									<div class="card-body">
										<form action="Publish_poor.php" method="post">
											<div class="form-group">
												<h4 class="page-title">贫困生情况登记</h4>
											</div>
											<div id="IPTitle" class="form-group">
												<label for="pillInput">Title</label>
												<input type="text" class="form-control input-pill" id="pillInput" name="IPtitle" placeholder="请输入任务名称">
											</div>
											<div id="IPCollege" class="form-group">
												<label for="pillInput">College</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入你的学院">
											</div>
											<div id="IPClass" class="form-group">
												<label for="pillInput">Class</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入你的班级">
											</div>
											<div id="IPStudentID" class="form-group">
												<label for="pillInput">Student ID</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入你的学号">
											</div>
											<div id="IPName" class="form-group">
												<label for="pillInput">Name</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入你的姓名">
											</div>
											<div id="IPNative" class="form-group">
												<label for="pillInput">Native</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入你的籍贯">
											</div>
											<div id="IPYear" class="form-group">
												<label for="pillInput">Year</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入出生年月">
											</div>
											<div id="IPNation" class="form-group">
												<label for="pillInput">Nation</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入你的民族">
											</div>
											<div id="IPID" class="form-group">
												<label for="pillInput">ID</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入身份证号">
											</div>
											<div id="IPPolitics" class="form-group">
												<label for="pillInput">Politic Countenance</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入政治面貌">
											</div>
											<div id="IPPhone" class="form-group">
												<label for="pillInput">Phone</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入联系电话">
											</div>
											<div id="IPCardID" class="form-group">
												<label for="pillInput">Bank Card Number</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入联名工行卡号">
											</div>
											<div id="IPIncome" class="form-group">
												<label for="pillInput">Income</label>
												<input type="text" class="form-control input-pill" id="pillInput" placeholder="请输入家庭人均年收入">
											</div>
											<div id="IPGender" class="form-check">
												<label>Gender</label><br/>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="sex" value="">
													<span class="form-radio-sign">男</span>
												</label>
												<label class="form-radio-label ml-3">
													<input class="form-radio-input" type="radio" name="sex" value="">
													<span class="form-radio-sign">女</span>
												</label>
											</div>
											<div id="IPCet46" class="form-check">
												<label>是否享受城镇居民最低生活保障</label><br/>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="allowance" value="">
													<span class="form-radio-sign">是</span>
												</label>
												<label class="form-radio-label ml-3">
													<input class="form-radio-input" type="radio" name="allowance" value="">
													<span class="form-radio-sign">否</span>
												</label>
											</div>
											<div id="IPCet46" class="form-check">
												<label>是否孤儿、烈士子女、优抚家庭子女</label><br/>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="family" value="">
													<span class="form-radio-sign">是</span>
												</label>
												<label class="form-radio-label ml-3">
													<input class="form-radio-input" type="radio" name="family" value="">
													<span class="form-radio-sign">否</span>
												</label>
											</div>
											<div id="IPCet46" class="form-check">
												<label>是否身体残疾、重大疾病</label><br/>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="disease" value="">
													<span class="form-radio-sign">是</span>
												</label>
												<label class="form-radio-label ml-3">
													<input class="form-radio-input" type="radio" name="disease" value="">
													<span class="form-radio-sign">否</span>
												</label>
											</div>
											<div id="IPCet46" class="form-check">
												<label>是否遭受重大自然灾害、变故</label><br/>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="disaster" value="">
													<span class="form-radio-sign">是</span>
												</label>
												<label class="form-radio-label ml-3">
													<input class="form-radio-input" type="radio" name="disaster" value="">
													<span class="form-radio-sign">否</span>
												</label>
											</div>
											<div id="IPSpe" class="form-group">
												<label for="comment">请详述家庭情况：</label>
												<textarea class="form-control" id="comment" rows="5"></textarea>
											</div>
											<div class="card-action">
												<input type="submit" class="btn btn-success" value="发布任务">
												<!-- <button class="btn btn-success">发布任务</button> -->
												<!-- <button class="btn btn-danger">重置任务</button> -->
											</div>
										</form>										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<footer class="footer">
					<div class="container-fluid">
						<nav class="pull-left">
							<ul class="nav">
								<li class="nav-item">
									<a class="nav-link" href="#">
										
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">
										Help
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#license/#free-item">
										Licenses
									</a>
								</li>
							</ul>
						</nav>			
					</div>
				</footer>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">									
					<p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
					<p>
						<b>We'll let you know when it's done</b></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>
</html>