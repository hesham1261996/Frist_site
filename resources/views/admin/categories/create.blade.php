@extends('include.head')
@include('include.navigation')
@section('content')        <!-- Content body -->
<div class="content-body">
    <!-- Content -->
    <div class="content add-user edit-user">

        <div class="row">
            <h3>Add Categories</h3>
            <div class="col-md-7 m-auto">
                <form class="user-form" action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <ul class="nav nav-pills mb-3"  role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active"  id="pills-home-tab" data-toggle="pill" href="#pills-home"
                            role="tab" aria-controls="pills-home" aria-selected="true">
                                Add Categories
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="form-box">
                                
                                <div class="avatar-upload" title="For best results, use an image at least 256px by 256px in either .jpg or .png format" data-toggle="tooltip" data-placement="top">
                                    <div class="avatar-edit">
                                        <input type='file'
                                                name="image"
                                                id="imageUpload"
                                            accept=".png, .jpg, .jpeg"/>
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview"
                                            style="background-image: url({{asset('assets')}}/media/image/academy-logo.jpg);">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-0 w-100 m-auto">
                                    <div class="m-b-10 col-sm-6 form-group">
                                        <label class="form-label">Name</label>
                                        <input  type="text"
                                                name="title"
                                                class="form-control txt txtName"
                                                placeholder="insert Category Name">
                                    </div>
                                    <div class="m-b-10 col-sm-12 col-md-6 form-group">
                                        <label class="form-label">Description</label>
                                        <input  type="text"
                                                name="description"
                                                class="form-control txt txtEmail"
                                                placeholder="insert descreipon">
                                    </div>
                                    <div class="buttons-controls">
                                        <button type="submit"   class="btn btn-success toast-success btn-notify-success">Add</button>
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
