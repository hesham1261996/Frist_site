@extends('include.head')
@include('include.navigation')
    @section('content')
    <div class="content-body">
        <div class="content">
            <div class="add-user">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                <div class="page-header d-md-flex justify-content-between">
                    <div>
                        <h3>Orders</h3>
                        <nav aria-label="breadcrumb" class="d-flex align-items-start">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href='/admin'>Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Pages</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">moderator</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="btn-header-action mt-2 mt-md-0">
                        <!--
                            <a type="button" href="add-user.html" class="btn btn-danger">Add Member</a>
                        -->
                        <!--open model-->
                        <a  href="{{route('orders.create')}}" class="btn btn-danger m-r-10" title="Add Member"
                            
                            data-bs-target="#staticBackdrop">
                            <i data-feather="plus-circle"></i>
                            Add order
                        </a>
                        <!--<button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFilter" aria-expanded="false"
                                aria-controls="collapseFilter">
                            Filter button
                        </button>-->

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Recent orders</h6>
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
                                    <th class="name-aline">Name customer</th>
                                    <th>address</th>
                                    <th>phone</th>
                                    <th>total price</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                    
                                
                                <tr>
                                    <td></td>
                                    <td>{{$order->id}}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <figure class="avatar rounded-circle mr-2">
                                            </figure>
                                            <a class="user-name" href="{{route('orders.show' , $order)}}">
                                                {{$order->name}}
                                            </a>
                                        </div>
                                    </td>
                                    <td>{{$order->address}}</td>
                                    <td>{{$order->phone}}</td>
                                    <td>{{$order->price}}</td>
                                    <td>{{$order->created_at->diffForHumans()}}</td>
                                    <td>
                                        <span <?php if($order->status == 'review'){ echo 'class="btn btn-danger"' ;}else{echo'class="btn btn-success"';} ?>>
                                        @if ($order->status == 'review')
                                            review
                                        @else
                                            complate
                                        @endif
                                        </span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a href="#" data-toggle="dropdown" class="btn btn-floating"
                                            aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-more-alt"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{route('orders.show' , $order)}}" class="dropdown-item">View Profile</a>
                                                <a href="{{route('orders.edit' ,$order)}}" class="dropdown-item">Edit</a>
                                                <form action="{{route('orders.destroy' , $order)}}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    
                                                    <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                        <i data-feather="trash-2"></i>
                                                        Delete
                                                    </button>
                                                </form>
                                                
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
            </div>
        </div>
    </div>



    @endsection