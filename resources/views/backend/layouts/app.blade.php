<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','clutch')</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        
        <!-- Data table CSS -->
        <link href="{{asset('public/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
        
        <!-- Toast CSS -->
        <link href="{{asset('public/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
      
        <!-- Custom CSS -->
        <link href="{{asset('public/dist/css/style.css')}}" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <!-- Styles -->
        @stack('styles')
    </head>
    
<body>
	<!-- Preloader 
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>-->
	<!-- /Preloader -->
    <div class="wrapper theme-5-active pimary-color-pink">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="index.html">
							<img class="brand-img" src="../img/logo.png" alt="brand"/>
							<span class="brand-text">Grandin</span>
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
				<form id="search_form" role="search" class="top-nav-search collapse pull-left">
					<div class="input-group">
						<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
						<span class="input-group-btn">
						<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
						</span>
					</div>
				</form>
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					<li>
						<a id="open_right_sidebar" href="#"><i class="zmdi zmdi-settings top-nav-icon"></i></a>
					</li>
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="./img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
							</li>
							<li>
								<a href="{{route('logOut')}}"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>	
		</nav>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="active" href="{{route('dashboard')}}">
						<div class="pull-left">
							<i class="fa fa-dashboard mr-20"></i>
							<span class="right-nav-text">Dashboard</span>
						</div>
						<div class="pull-right"></div>
						<div class="clearfix"></div>
					</a>
				</li>
				<li>
					<a href="{{route('assets.index')}}">
						<div class="pull-left">
							<i class="fa fa-truck mr-20"></i>
							<span class="right-nav-text">Assets</span>
						</div>
						<div class="pull-right"></div>
						<div class="clearfix"></div>
					</a>
				</li>
				<li>
					<a href="{{route('customers.index')}}">
						<div class="pull-left">
							<i class="fa fa-users mr-20"></i>
							<span class="right-nav-text">Customers</span>
						</div>
						<div class="pull-right"></div>
						<div class="clearfix"></div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#setting_dr">
						<div class="pull-left">
							<i class="fa fa-cogs mr-20"></i>
							<span class="right-nav-text">Settings</span>
						</div>
						<div class="pull-right">
							<i class="zmdi zmdi-caret-down"></i>
						</div>
						<div class="clearfix"></div>
					</a>
					<ul id="setting_dr" class="collapse collapse-level-1">
						<li>
							<a href="{{route('companies.index')}}">Company</a>
						</li>
						<li>
							<a href="{{route('branch.index')}}">Branch</a>
						</li>
						<li>
							<a href="{{route('user.index')}}">User</a>
						</li>
						<li>
							<a href="{{route('role.index')}}">Role</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- /Right Sidebar Menu -->
        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
				@yield('content')
			</div>
			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2018 &copy; Round-54. </p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="{{asset('public/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('public/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
	<!-- Data table JavaScript -->
	<script src="{{asset('public/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="{{asset('public/dist/js/jquery.slimscroll.js')}}"></script>
	
	
	
	<!-- Fancy Dropdown JS -->
	<script src="{{asset('public/dist/js/dropdown-bootstrap-extended.js')}}"></script>
	
	<!-- Sparkline JavaScript -->
	<script src="{{asset('public/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>
	
	<!-- Owl JavaScript -->
	<script src="{{asset('public/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
	
	<!-- Toast JavaScript -->
	<script src="{{asset('public/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
	
	<!-- Switchery JavaScript -->
	<script src="{{asset('public/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
	@stack('scripts')
	{!! Toastr::message() !!}
	<!-- Init JavaScript -->
	<script src="{{asset('public/dist/js/init.js')}}"></script>
        
</body>
    
</html>
