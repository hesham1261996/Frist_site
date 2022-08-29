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
        <div class="add-item">
            <div class="page-header d-md-flex justify-content-between">
                <div>
                    <h3>Items</h3>
                    <nav aria-label="breadcrumb" class="d-flex align-items-start">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href='/admin'>Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Pages</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">items</li>
                        </ol>
                    </nav>
                </div>
                <div class="btn-header-action mt-2 mt-md-0">
                    <!--
                        <a type="button" href="add-item.html" class="btn btn-danger">Add Member</a>
                    -->
                    <!--open model-->
                    <a  href="{{route('items.create')}}" class="btn btn-danger m-r-10" title="Add Member"
                        
                        data-bs-target="#staticBackdrop">
                        <i data-feather="plus-circle"></i>
                        Add items
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
            <div class="container-fluid mt--7">
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">{{ __('items') }}</h3>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a href="{{ route('items.create') }}" class="btn btn-sm btn-primary">{{ __('Add item') }}</a>
                                    </div>
                                </div>
                            </div>
                            
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
                            
                            @if (count($items))
                                <div class="row">
                                    
                                    @foreach ($items as $item)
                                    <div class="col-sm-4">
                                        
                                        <div class="card" style="width: 18rem;">
                                            
                                            @if ($item->photo)
                                                <img width="100px" src="/images/{{$item->photo->filename}}" class="card-img-top" alt="...">
                                            @else
                                                <img width="100px" src="{{asset('assets')}}/media/image/user/user.jpg" class="card-img-top" alt="...">
                                            @endif
                                            <div class="card-body">
                                            <h5 class="card-title">{{$item->title}}</h5>
                                            <h2 class="card-title">{{$item->price}} $</h2>
                                            <form action="{{route('items.destroy' , $item)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('items.edit', $item)}}" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="{{route('items.show' , $item)}}" class="btn btn-info btn-sm">Show</a>
                                                <button type="button" class="btn btn-danger btn-sm" value="Delete" onclick="confirm('{{ __("Are you sure you want to delete this item?") }}') ? this.parentElement.submit() : ''">Delete</button>
                                            </form>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            @else
                                there are not found items
                            @endif
                            <div class="card-footer py-4">
                                <nav class="d-flex justify-content-end" aria-label="...">
                                    {{ $items->links() }}
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>    
@endsection
