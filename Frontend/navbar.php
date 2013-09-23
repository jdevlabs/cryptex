<?php>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="#" name="top">Cryptex-2</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="divider-vertical"></li>
							<li><a href="#"><i class="icon-home"></i> Home</a></li>
							<li class="divider-vertical"></li>
							<li><a href="#"><i class="icon-question-sign"></i> Problem</a></li>
							<li class="divider-vertical"></li>
							<li><a href="#"><i class="icon-envelope"></i> Messages</a></li>
							<li class="divider-vertical"></li>
        		          			<li><a href="#"><i class="icon-list"></i> Leaderboard</a></li>
							<li class="divider-vertical"></li>
        		          			<li><a href="#"><i class="icon-gift"></i> Hints</a></li>
						</ul>
						<ul class="nav pull-right">
							<li><a href="#">Sign Up</a></li>
        		          			<li class="divider-vertical"></li>
							<li class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
								<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
									<form method="post" action="login" accept-charset="UTF-8">
										<input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username"name="username">
										<input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
										<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
										<label class="string optional" for="user_remember_me"> Remember me</label>
										<input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
										<label style="text-align:center;margin-top:5px">or</label>
										<input class="btn btn-primary btn-block" type="button" id="sign-in-Facebook" value="Sign In with Facebook">
									</form>
								</div>
							</li>
							<li class="divider-vertical"></li>
							<li class="dropdown">
								<a class="dropdown-toggle" href="#"  data-toggle="dropdown"><i class="icon-user"></i><strong class="caret"></strong></a>
								<div class="dropdown-menu span3 " style="padding: 15px; padding-bottom: 0px;">
									<form method="post" action="login" accept-charset="UTF-8">
										<div class="row pull-right">
											<div class="span1"><a href="#" class="thumbnail"><img src="assets/img/user7.svg" alt="avatar"></a>
											</div>
										</div>
										<h3 style="margin-bottom: 15px;"> User </h3>
									<!--	<label><span class=" badge badge-info">Level : 1000</span></label>
										<label><span class=" badge badge-info">Hints  : 0</span></label>
										<label> level : </label>
										<label> hints taken : </label>
								                <li class="divider"></li>
                            							<li><a href="#"><i class="icon-list"></i> Leaderboard</a></li>
                            							<li><a href="#"><i class="icon-off"></i> Logout</a></li> -->
									</form>
								</div>
							</li>
						</ul>
					</div>
				<!--/.nav-collapse -->
				</div>
			</div>
			<!--/.navbar-inner -->
		</div>
		<!--/.navbar -->
<?>
