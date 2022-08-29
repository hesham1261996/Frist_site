@extends('include.head')
@include('include.navigation')
@section('content')
			<!-- Content body -->
			<div class="content-body">
				<!-- Content -->
				<div class="content">
					<div class="page-header d-md-flex justify-content-between">
						<div>
							<h3>Welcome back,{{\Str::limit(auth()->user()->name , '6')}}</h3>
							<p class="text-muted">This page shows an overview for your account summary.</p>
						</div>
						<div class="mt-3 mt-md-0">
							<div id="dashboard-daterangepicker" class="btn btn-outline-light">
								<span></span>
							</div>
							<a href="#" class="btn btn-primary ml-0 ml-md-2 mt-2 mt-md-0 dropdown-toggle" data-toggle="dropdown">Actions</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="#" class="dropdown-item">Download</a>
								<a href="#" class="dropdown-item">Print</a>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<h6 class="card-title mb-2">Statistics</h6>
										<div class="dropdown">
											<a href="#" class="btn btn-floating" data-toggle="dropdown">
												<i class="ti-more-alt"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<div>
										<div class="list-group list-group-flush">
											<div class="list-group-item d-flex justify-content-between align-items-center px-0">
												<div>
													<h5>Items</h5>
													<div>All the Items</div>
												</div>
												<h3 class="text-primary mb-0">{{$items->count()}}</h3>
											</div>
											<div class="list-group-item d-flex justify-content-between align-items-center px-0">
												<div>
													<h5>Customers</h5>
													<div>all Customers </div>
												</div>
												<div>
													<h3 class="text-success mb-0">{{$users->count()}}</h3>
												</div>
											</div>
											<div class="list-group-item d-flex justify-content-between align-items-center px-0">
												<div>
													<h5>Categories</h5>
													<div>Total categories in website</div>
												</div>
												<div>
													<h3 class="text-primary mb-0">{{$categories->count()}}</h3>
												</div>
											</div>
										</div>
									</div>
									<div class="mt-3">
										<a href="#" class="btn btn-success">Statistics Detail</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<h6 class="card-title mb-2">Report</h6>
										<div class="dropdown">
											<a href="#" class="btn btn-floating" data-toggle="dropdown">
												<i class="ti-more-alt"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<div>
										<div class="list-group list-group-flush">
											<div class="list-group-item d-flex justify-content-between align-items-center px-0">
												<div>
													<h5>Stats</h5>
													<div>Last month targets</div>
												</div>
												<h3 class="text-success mb-0">$1,23M</h3>
											</div>
											<div class="list-group-item d-flex justify-content-between align-items-center px-0">
												<div>
													<h5>Payments</h5>
													<div>Week's expenses</div>
												</div>
												<div>
													<h3 class="text-danger mb-0">- $58,90</h3>
												</div>
											</div>
											<div class="list-group-item d-flex justify-content-between align-items-center px-0">
												<div>
													<h5>members </h5>
													<div>Total members subscription</div>
												</div>
												<div>
													<h3 class="text-info mb-0">65</h3>
												</div>
											</div>
										</div>
									</div>
									<div class="mt-3">
										<a href="#" class="btn btn-info">Report Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<h6 class="card-title">Recent members <strong>{{count($users)}}</strong> Users</h6>
							<div class="table-responsive">
								<table id="user-list" class="table table-lg text-center">
									<thead>
									<tr>
										<th>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input"
													id="user-list-select-all">
												<label class="custom-control-label"
													for="user-list-select-all"></label>
											</div>
										</th>
										<th>ID</th>
										<th class="name-aline">Name</th>
										<th>Email</th>
										<th>Gander</th>
										<th>phone_number</th>
										<th>Date</th>
										<th>Status</th>
										<th class="text-right">Action</th>
									</tr>
									</thead>
									<tbody>
									@foreach ($users as $user)
										
									
									<tr>
										<td></td>
										<td>{{$user->id}}</td>
										<td>
											<div class="d-flex align-items-center">
												<figure class="avatar rounded-circle mr-2">
													<a class="image-popup"
													href="media/image/user/user.jpg">
														<img src="media/image/user/user.jpg"
															alt="image">
													</a>
												</figure>
												<a class="user-name" href="#">
													{{$user->name}}
												</a>
											</div>
										</td>
										<td>{{$user->email}}</td>
										<td>{{$user->gender}}</td>
										<td>{{$user->phone_number}}</td>
										<td>{{$user->created_at->diffForHumans()}}</td>
										<td>
											<span class="badge bg-danger-bright text-danger">Blocked</span>
										</td>
										<td class="text-right">
											<div class="dropdown">
												<a href="#" data-toggle="dropdown" class="btn btn-floating"
												aria-haspopup="true" aria-expanded="false">
													<i class="ti-more-alt"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="{{route('admin.show' , $user)}}" class="dropdown-item">View Profile</a>
													<a href="{{route('admin.edit' ,$user)}}" class="dropdown-item">Edit</a>
													<a href="#" class="dropdown-item text-danger">Delete</a>
												</div>
											</div>
										</td>
									</tr>
									@endforeach	
									</tbody>
								</table>
							</div>
						</div>
					</div>

				<!--	&lt;!&ndash; Modal &ndash;&gt;
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-body text-center">
									<div class="row my-3">
										<div class="col-md-6 ml-auto mr-auto">
											<figure>
												<img class="img-fluid" src="assets/media/svg/upgrade.svg" alt="upgrade">
											</figure>
										</div>
									</div>
									<h4 class="mb-3 text-center">Get an Upgrade</h4>
									<div class="row my-3">
										<div class="col-md-10 ml-auto mr-auto">
											<p class="text-muted">Get additional 500 GB space for your documents and files. Expand your storage and enjoy your business. Change plan for more space.</p>
											<button class="btn btn-primary" data-dismiss="modal">Plan Upgrade</button>
										</div>
									</div>
									<a href="#" class="align-items-center d-flex link-1 small justify-content-center" data-dismiss="modal">
										<i class="ti-close font-size-10 mr-1"></i>Close
									</a>
								</div>
							</div>
						</div>
					</div>-->
				</div>
				<!-- ./ Content -->

				<!-- Footer -->
				<footer class="content-footer">
					<div>© 2022 Innovations Oasis</div>
					<div>
						<nav class="nav">
							<a href="#" class="nav-link">Licenses</a>
							<a href="#" class="nav-link">Contact Us</a>
							<a href="#" class="nav-link">Get Help</a>
						</nav>
					</div>
				</footer>
				<!-- ./ Footer -->
			</div>
			<!-- ./ Content body -->
		</div>
		<!-- ./ Content wrapper -->
	</div>

@endsection