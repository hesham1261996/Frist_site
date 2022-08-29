@extends('include.head')
@include('include.navigation')
@section('content')        <!-- Content body -->
<div class="content-body">
    <!-- Content -->
    <div class="content add-user edit-user">

        <div class="row">
            <div class="col-md-7 m-auto">
                <form class="user-form" action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <ul class="nav nav-pills mb-3"  role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active"  id="pills-home-tab" data-toggle="pill" href="#pills-home"
                            role="tab" aria-controls="pills-home" aria-selected="true">
                                Add admin
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="form-box">
                                <div class="avatar-upload" title="For best results, use an image at least 256px by 256px in either .jpg or .png format" data-toggle="tooltip" data-placement="top">
                                    <div class="avatar-edit">
                                        <input type='file' name="image" id="imageUpload"
                                            accept=".png, .jpg, .jpeg"/>
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview"
                                            style="background-image: url({{asset('assets')}}/media/image/user/user.jpg);">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-0 w-100 m-auto">
                                    <div class="m-b-10 col-sm-6 form-group">
                                        <label class="form-label">Name</label>
                                        <input  type="text"
                                                name="name"
                                                class="form-control txt txtName"
                                                placeholder="insert your Name">
                                        <input  type="hidden"
                                                class="form-control txt">
                                    </div>
                                    <div class="m-b-10 col-sm-12 col-md-6 form-group">
                                        <label class="form-label">Password</label>
                                        <input  type="password"
                                                name="password"
                                                class="form-control txt txtEmail"
                                                placeholder="insert your Email address">
                                        <input  type="hidden"
                                        name="Admin"
                                        value="1"
                                        class="form-control txt txtEmail"
                                        placeholder="insert your Email address">
                                    </div>

                                    <div class="m-b-10 col-sm-12 col-md-6 form-group">
                                        <label class="form-label">Email</label>
                                        <input  type="email"
                                                name="email"
                                                class="form-control txt txtEmail"
                                                placeholder="insert your Email address">
                                    </div>
                                    <div class="m-b-10 col-sm-12 col-md-6 form-group">
                                        <label class="form-label">phone number</label>
                                        <input  class="form-control"
                                                name="phone_number"
                                                data-type="number"
                                                type="text" minlength="14" maxlength="14"
                                                placeholder="insert your phone number">
                                    </div>
                                    <div class="m-b-10 col-sm-12 col-md-6 form-group">
                                        <label class="form-label">Gender</label>
                                        <select name="gender" class="form-control select2 select2-hide-search">
                                            <option>male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="buttons-controls">
                                        <button type="submit"   class="btn btn-success toast-success btn-notify-success">Add</button>
                                        <button type="button" class="close sweet-delete">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-history" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="form-box">
                                <div class="row p-0 w-100 m-auto">
                                    <div class="m-b-10 col-sm-12 col-md-6 form-group">
                                    </div>
                                    <div class="m-b-10 col-sm-12 col-md-6 form-group">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ./ Content body -->
        
@endsection
