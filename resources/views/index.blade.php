<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bursary Management System</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <script src={{ asset('bootstrap/jquery/jquery-3.5.1.min.js') }}></script>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
		<div class="heade">
			<a href="{{url('/')}}" class="home" style="text-decoration: none" onmouseover="this.style.color='white'" onmouseout="this.style.color='lime'">B-M-S</a>
		</div>
		 <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
			<div class="collapse navbar-collapse" id="navbarNav">
	       <ul class="navbar-nav ml-auto pl-5 pr-5 mr-5">
				<li class="nav-item active mr-5 p-3 " style="">
					<a class="nav-link font-weight-bold" href="{{url('/')}}" style="">Home</a>
				</li>
				<li class="nav-item mr-5 p-3">
					<a class="nav-link font-weight-bold" href="{{url('applications')}}" style="">Applications</a>
				</li>
				<li class="nav-item mr-5 p-3">
					<a class="nav-link font-weight-bold" href="{{url('applicants')}}" style="">Applicants</a>
				</li>
				<li class="nav-item mr-5 p-3">
					<a class="nav-link font-weight-bold"  href="{{url('settings')}}" style="">Settings</a>
				</li>
                <li class="nav-item mr-5 p-3">
					<a class="nav-link font-weight-bold"  href="{{url('logout')}}" style="color:white">Dan@ndong</a>
				</li>
                <li class="nav-item mr-5 p-3">
					<a class="nav-link font-weight-bold"  href="{{url('logout')}}" style="">Logout</a>
				</li>
                <li class="nav-item mr-5 p-3">
					<a class="nav-link font-weight-bold"  href="{{url('login')}}" style="">Login</a>
				</li>
			</ul>
</div>
</nav>
<div class="container-fluid">
    <div class="col-md-4 mt-5">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center font-weight-bold">Add New Applicants</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    @csrf
                <label for="" class="font-weight-bold">First Name :</label>
                <input type="text" name="first_name" class="form-control" id="">
                <label for="" class="font-weight-bold">Second Name :</label>
                <input type="text" name="second_name" class="form-control" id="">
                <label for="" class="font-weight-bold">Parent :</label>
                <input type="text" name="Parent/Guardian" class="form-control" id="">
                <label for="" class="font-weight-bold">ID No :</label>
                <input type="text" name="Id_no" class="form-control" id="">
                <label for="" class="font-weight-bold">Phone :</label>
                <input type="text" name="phone" class="form-control" id="">
                <label for="" class="font-weight-bold">Location :</label>
                <input type="text" name="location" class="form-control" id="">
                <input type="submit" class="btn btn-primary mt-2" value="Add New">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <!-- /END Separator -->
            <!-- Menu with submenu -->
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-dashboard fa-fw mr-3"></span>
                    <span class="menu-collapsed">Dashboard</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Charts</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Reports</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Tables</span>
                </a>
            </div>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Profile</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Settings</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Password</span>
                </a>
            </div>
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-tasks fa-fw mr-3"></span>
                    <span class="menu-collapsed">Tasks</span>
                </div>
            </a>
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>OPTIONS</small>
            </li>
            <!-- /END Separator -->
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-calendar fa-fw mr-3"></span>
                    <span class="menu-collapsed">Calendar</span>
                </div>
            </a>
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-envelope-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">Messages <span class="badge badge-pill badge-primary ml-2">5</span></span>
                </div>
            </a>
            <!-- Separator without title -->
            <li class="list-group-item sidebar-separator menu-collapsed"></li>
            <!-- /END Separator -->
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-question fa-fw mr-3"></span>
                    <span class="menu-collapsed">Help</span>
                </div>
            </a>
            <a href="#top" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                    <span id="collapse-text" class="menu-collapsed">Collapse</span>
                </div>
            </a>
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->
    <!-- MAIN -->
    <div class="col p-4">
        <h1 class="display-4">Main Menu</h1>
        <div class="card">
            <h5 class="card-header font-weight-light">Dashboard</h5>
            <div class="card-body">
                <ul>
                    <li>Users</li>
                    <li>Applicants</li>
                    <li>Settings</li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
<script src={{asset('bootstrap/js/bootstrap.min.js')}}></script>
<script src={{asset('bootstrap/popper/popper.min.js')}}></script>
<script src={{asset('bootstrap/js/bootstrap.js')}}></script>
<script src="">
    // Hide submenus
$('#body-row .collapse').collapse('hide'); 

// Collapse/Expand icon
$('#collapse-icon').addClass('fa-angle-double-left'); 

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
});

function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
    
    // Treating d-flex/d-none on separators with title
    var SeparatorTitle = $('.sidebar-separator-title');
    if ( SeparatorTitle.hasClass('d-flex') ) {
        SeparatorTitle.removeClass('d-flex');
    } else {
        SeparatorTitle.addClass('d-flex');
    }
    
    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
}
</script>
</html>