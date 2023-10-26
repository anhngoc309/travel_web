@if(Auth::check())
<div class="top-header">
    <div class="container">
        <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
            <li class="hm"><a href="{{ route('/') }}"><i class="fa fa-home"></i></a></li>
            <li class="prnt"><a href="{{ route('profile') }}">My Profile</a></li>
            <li class="prnt"><a href="{{ route('change_password') }}">Change Password</a></li>
            <li class="prnt"><a href="{{ route('tour_history') }}">My Tour History</a></li>
            <li class="prnt"><a href="{{ route('issue_tickets') }}">Issue Tickets</a></li>
        </ul>
        <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
            <li class="tol">Welcome :</li>
            <li class="sig">{{ Auth::user()->Name }}</li>
            <li class="sigi"><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
@else
<div class="top-header">
    <div class="container">
        <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
            {{-- <li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class="hm"><a href="admin/index.php">Admin Login</a></li> --}}
        </ul>
        <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
            <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal">Sign Up</a></li>
            <li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4">Sign In</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
@endif


<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="{{ route('/') }}">Tourism <span>Management System</span></a>
		</div>
		<div class="lock fadeInDown animated" data-wow-delay=".5s">
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">SAFE &amp; SECURE </div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="{{ route('/') }}">Home</a></li>
							<li><a href="{{ route('aboutus') }}">About</a></li>
								<li><a href="{{ route('list_tour')}}">Tour Packages</a></li>
								<li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
								<li><a href="{{ route('term') }}">Terms of Use</a></li>
								<li><a href="{{ route('contact')}}">Contact Us</a></li>
								<?php if($_SESSION['login']){?>
								<li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a>  </li>
								<?php } else { ?>
								<li><a href="{{ route('enquiry')}}"> Enquiry </a>  </li>
								<?php } ?>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>

		<div class="clearfix"></div>
	</div>
</div>
