<body>
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-icon"></div>
		<span>Loading...</span>
	</div>
	<!-- ./ Preloader -->

	<!-- Layout wrapper -->
	<div class="layout-wrapper">
		<!-- Header -->
		<div class="header d-print-none">
			<div class="header-container">
				<div class="header-left">
					<div class="navigation-toggler">
						<a href="#" data-action="navigation-toggler">
							<i data-feather="menu"></i>
						</a>
					</div>
					<div class="header-logo">
						<a href=index.html>
							<div class="img-box">
								<img src="{{asset('assets')}}/media/image/logo/logo.png">
							</div>
							<h3 class="m-b-0">Control panel</h3>
						</a>
					</div>
				</div>
				<div class="header-body">
					<div class="header-body-left">
						<ul class="navbar-nav">
							<li class="nav-item mr-3">
								<div class="header-search-form">
									<form>
										<div class="input-group">
											<div class="input-group-prepend">
												<button class="btn btn-search">
													<i class="p-0 m-0" data-feather="search"></i>
												</button>
												<select class="selectpicker" multiple data-selected-text-format="count" title="Choose">
													<option>members</option>
													<option>customers</option>
													<option>trainers</option>
													<option>activities</option>
													<option>assessments</option>
												</select>
											</div>
											<input type="text" class="form-control" placeholder="Search">
											<div class="input-group-append">
												<button class="btn header-search-close-btn">
													<i data-feather="x"></i>
												</button>
											</div>
										</div>
									</form>
								</div>
							</li>
						</ul>
					</div>

					<div class="header-body-right">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="#" class="nav-link mobile-header-search-btn" title="Search">
									<i data-feather="search"></i>
								</a>
							</li>
							<li class="nav-item dropdown d-none d-md-block">
								<a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
									<i class="maximize m-0" data-feather="maximize"></i>
									<i class="minimize m-0" data-feather="minimize"></i>
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="settings.html" title="Dashboard Settings" data-toggle="tooltip">
									<i class="p-0 m-0" data-feather="settings"></i>
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="#" title="View Website" data-toggle="tooltip">
									<i class="p-0 m-0" data-feather="eye"></i>
								</a>
							</li>
							<li class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
									<figure class="avatar avatar-sm">
										<img src="{{asset('images')}}/{{auth()->user()->photo->filename}}"class="rounded-circle" alt="avatar">
									</figure>
									<span class="ml-2 d-sm-inline d-none">{{auth()->user()->name}}</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
									<div class="text-center py-4">
										<figure class="avatar avatar-lg mb-3 border-0">
											<img src="{{asset('images')}}/{{auth()->user()->photo->filename}}" class="rounded-circle" alt="image">
										</figure>
										
										<h5 class="text-center">{{auth()->user()->name}}</h5>
										<div class="mb-3 small text-center text-muted">admin</div>
										<a href="#" class="btn btn-outline-light btn-rounded">Manage Your Account</a>
									</div>
									<div class="list-group">
										<a href="#" class="list-group-item">View Website</a>
										<a href="#" class="list-group-item">View Profile</a>
										@auth
										<form method="POST" action="{{ route('logout') }}">
											@csrf
												<a href="{{route('logout')}}" class="list-group-item text-danger" data-sidebar-target="#settings" onclick="event.preventDefault();
												this.closest('form').submit();">Sign Out!</a>
										</form>	
										@else
										<a href="{{route('login')}}" class="list-group-item">Login</a>
										@endauth

									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<ul class="navbar-nav ml-auto">
					<li class="nav-item header-toggler">
						<a href="#" class="nav-link">
							<i data-feather="arrow-down"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- ./ Header -->

		<!-- Content wrapper -->
		<div class="content-wrapper">
			<!-- begin::navigation -->
			<div class="navigation">
				<div class="navigation-header">
					<span>Navigation</span>
					<a href="#">
						<i class="ti-close"></i>
					</a>
				</div>
				<div class="navigation-menu-body">
					<ul>
						<li>
							<a class="active" href='/admin'>
								<span class="nav-link-icon">
									<i data-feather="pie-chart"></i>
								</span>
								<span>Dashboard</span>
							</a>
						</li>
						<li>
							<a href="{{route('customers.index')}}">
								<span class="nav-link-icon">
									<i class="fa-solid fa-users"></i>
								</span>
								<span>Customers</span>
								<span class="badge badge-success">{{App\models\User::where('Admin' , '2')->count()}}</span>
							</a>
						</li>
						<li>
							<a href="{{route('orders.index')}}">
								<span class="nav-link-icon">
									<i class="fas fa-shopping-cart"></i>
								</span>
								<span>Order</span>
								<span class="badge badge-success">10</span>
							</a>
						</li>
						<li>
							<a href="{{route('admin.index')}}">
								<span class="nav-link-icon">
									<i class="fa-solid fa-user-tie"></i>
								</span>
								<span>Moderators</span>
								<span class="badge bg-info">{{App\models\User::where('Admin' , '1')->count()}}</span>
							</a>
						</li>
						<li>
							<a href="{{route('categories.index')}}">
								<span class="nav-link-icon">
									<i class="fas fa-align-left"></i>
								</span>
								<span>Categories</span>
								<span class="badge bg-info">{{App\models\Category::count()}}</span>
							</a>
						</li>
						<li>
							<a href="{{route('items.index')}}">
								<span class="nav-link-icon">
									<i class="fab fa-product-hunt"></i>
								</span>
								<span>Products</span>
								<span class="badge bg-info">{{App\models\Item::count()}}</span>
							</a>
						</li>
						<li>
							<a href="calendar.html">
								<span class="nav-link-icon">
									<i class="fa-solid fa-calendar-days"></i>
								</span>
								<span>Calendar</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="nav-link-icon">
									<i class="fa-solid fa-paste"></i>
								</span>
								<span>Reports</span>
							</a>
							<ul>
								<li>
									<a href="#">1</a>
								</li>
								<li>
									<a href="#">2</a>
								</li>
								<li>
									<a href="#">2</a>
								</li>
							</ul>
						</li>
						<li class="settings-pos">
							<a href="settings.html">
								<span class="nav-link-icon">
									<i data-feather="settings"></i>
								</span>
								<span>Settings</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- end::navigation -->
