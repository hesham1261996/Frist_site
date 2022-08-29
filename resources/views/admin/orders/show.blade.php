@extends('include.head')
@include('include.navigation')
    @section('content')
    <div class="content-body">
        <div class="content">
            <h3>Customer data</h3>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">id</th>
                    <td>{{ 222000 + $order->id}}</td>
                </tr>
                <tr>
                    <th scope="row">name</th>
                    <td>{{$order->name}}</td>
                </tr>
                <tr>
                    <th scope="row">phone</th>
                    <td colspan="2">{{$order->phone}}</td>
                </tr>
                <tr>
                    <th scope="row">address</th>
                    <td colspan="2">{{$order->address}}</td>

                </tr>
                <tr>
                    <th scope="row">Status</th>
                    <td colspan="2">{{$order->status}}</td>

                </tr>
                <tr>
                    <th scope="row">Date</th>
                    <td colspan="2">{{$order->created_at->startOfDay()}}</td>

                </tr>
                </tbody>
            </table>
            <h3>orders</h3>
            
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
                        <th class="name-aline">Name prouduct</th>
                        <th>price</th>
                        <th>catrgory</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    @foreach ($order->items as $item) 
                    <tbody>
                        <tr>
                            <td></td>
                            <td>{{$item->id}}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <figure class="avatar rounded-circle mr-2">
                                        <a class="image-popup"
                                            href="{{asset('media')}}/image/user/user.jpg">
                                            @if ($item->photo)
                                            <img src="/images/{{$item->photo->filename}}"
                                            alt="image">
                                            @else
                                            <img src="{{asset('media')}}/image/user/user.jpg"
                                            alt="image">
                                            @endif
                                        </a>
                                    </figure>
                                    <a class="user-name" href="{{route('items.show' , $item)}}">
                                        {{\Str::limit($item->title, '20') }}
                                    </a>
                                </div>
                            </td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->category->title}}</td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="btn btn-floating"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-more-alt"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{route('items.show' , $item)}}" class="dropdown-item">
                                            <i data-feather="eye"></i>
                                            View Profile
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    
                    @endforeach    
                </table>
            
            
        </div>
    </div>    
    @endsection        