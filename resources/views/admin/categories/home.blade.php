@extends('include.head')
@include('include.navigation')
    @section('content')
        <!-- Content body -->
        <div class="content-body">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <!-- Content -->
            <div class="content">
                <div class="add-category">
                    <div class="page-header d-md-flex justify-content-between">
                        <div>
                            <h3>Catrgoties</h3>
                            <nav aria-label="breadcrumb" class="d-flex align-items-start">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href='/admin'>Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">categorys</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="btn-header-action mt-2 mt-md-0">
                            <!--
                                <a type="button" href="add-category.html" class="btn btn-danger">Add Member</a>
                            -->
                            <!--open model-->
                            <a  href="{{route('categories.create')}}" class="btn btn-danger m-r-10" title="Add Member"
                                
                                data-bs-target="#staticBackdrop">
                                <i data-feather="plus-circle"></i>
                                Add Categories
                            </a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseFilter" role="button"
                                aria-expanded="false" aria-controls="collapseFilter">
                                <i data-feather="filter"></i>
                                Filter a href
                            </a>
                            <!--<button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFilter" aria-expanded="false"
                                    aria-controls="collapseFilter">
                                Filter button
                            </button>-->

                        </div>
                    </div>

                    <div class="collapse filter-panel" id="collapseFilter">
                        <button type="button" class="close" data-bs-toggle="collapse" href="#collapseFilter">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                        <div class="card card-body">
                            <div class="row m-0">
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-l-5 p-r-5 m-b-10">
                                    <select class="selectpicker" multiple title="Choose one of the following...">
                                        <option>members</option>
                                        <option>customers</option>
                                        <option>trainers</option>
                                        <option>activities</option>
                                        <option>assessments</option>
                                    </select>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-l-5 p-r-5 m-b-10">
                                    <select class="selectpicker">
                                        <option>members</option>
                                        <option>customers</option>
                                        <option>trainers</option>
                                        <option>activities</option>
                                        <option>assessments</option>
                                    </select>

                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-l-5 p-r-5 m-b-10">
                                    <select class="selectpicker" data-live-search="true">
                                        <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                        <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                    </select>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-l-5 p-r-5 m-b-10">
                                    <div id="dashboard-daterangepicker" class="btn btn-outline-light w-100">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-l-5 p-r-5 p-5">
                                    <div class="form-group form-check m-b-0 p-t-5 p-b-5">
                                        <input type="checkbox" class="form-check-input" id="Check_1">
                                        <label class="form-check-label" for="Check_1">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 p-l-5 p-r-5 p-5">
                                    <div class="d-flex">
                                        <div class="form-check form-check-inline m-b-0 p-t-5 p-b-5">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                radio
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline m-b-0 p-t-5 p-b-5">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                radio
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-filterIt btn-primary">filter it</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <td></td>
                                                <th scope="col">Title</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Data</th>
                                                <th scope="col">Option</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($categories as $category)
                                                
                                            
                                            <tr>
                                                <th scope="row">{{$category->id}}</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <figure class="avatar rounded-circle mr-2">
                                                            <a class="image-popup"
                                                                href="{{asset('media')}}/image/user/user.jpg">
                                                                @if ($category->photo)
                                                                <img src="/images/{{$category->photo->filename}}"
                                                                alt="image">
                                                                @else
                                                                <img src="{{asset('media')}}/image/user/user.jpg"
                                                                alt="image">
                                                                @endif

                                                            </a>
                                                        </figure>
                                                    </div>
                                                </td>
                                                <td><a href="{{route('categories.show' , $category)}}">{{\Str::limit($category->title , '10')}}</a>
                                                </td>
                                                <td>{{\Str::limit( $category->description , '10')}}</td>
                                                <td>{{$category->created_at->diffForHumans()}}</td>
                                                <td class="text">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown" class="btn btn-floating"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-more-alt"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item">
                                                                <i data-feather="eye"></i>

                                                                View Profile
                                                            </a>
                                                            <a href="{{route('categories.edit', $category)}}" class="dropdown-item">
                                                                <i data-feather="edit"></i>
                                                                Edit
                                                            </a>
                                                            <form action="{{route('categories.destroy' , $category)}}" method="POST">
                                                                @method('delete')
                                                                @csrf
                                                                    <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this category?") }}') ? this.parentElement.submit() : ''">
                                                                        <i data-feather="trash-2"></i>
                                                                        Delete
                                                                    </button>

                                                                
                                                            </form>
                                                        </div>
                                                    </td>    </div>
                                            </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./ Content -->
            </div>

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

            <!-- ./ Content body -->
        </div>
        <!-- ./ Content wrapper -->
    </div>
    </div>

    @endsection

    <script>
        $('.image-popup').magnificPopup({
            type: 'image',
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out',
                opener: function (openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
        $('input[name="daterangepicker"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });
    </script>
