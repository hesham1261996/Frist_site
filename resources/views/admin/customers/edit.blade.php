@extends('include.head')
@include('include.navigation')
@section('content')        <!-- Content body -->
<div class="content-body">
    <!-- Content -->
    <div class="content add-user edit-user">

        <div class="row">
            <div class="col-md-7 m-auto">
                <form class="user-form" action="{{route('customers.update' , $user)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <ul class="nav nav-pills mb-3"  role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active"  id="pills-home-tab" data-toggle="pill" href=""
                            role="tab" aria-controls="pills-home" aria-selected="true">
                                Edit Customer
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
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                        <input type="text"  value="{{$user->name}}" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>
    
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                        <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('password') }}" value="{{ old('password') }}"  autofocus>
                                        <input  type="hidden"
                                        name="Admin"
                                        value="2"
                                        class="form-control txt txtEmail"
                                        placeholder="insert your passeord address">
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Email') }}</label>
                                        <input type="email"  value="{{$user->email}}" name="email" id="input-password" class="form-control form-control-alternative{{ $errors->has('Email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('phone_number') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('phone_number') }}</label>
                                        <input type="text"  value="{{$user->phone_number}}" name="phone_number" id="input-password" class="form-control form-control-alternative{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" placeholder="{{ __('phone_number') }}" value="{{ old('phone_number') }}" required autofocus>
                                        @if ($errors->has('phone_number'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone_number') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="m-b-10 col-sm-12 col-md-6 form-group">
                                        <label class="form-label">Gender</label>
                                        <select name="gender" class="form-control select2 select2-hide-search">
                                            <option <?php if($user->gender == 'male')echo 'selected' ?> >male</option>
                                            <option <?php if($user->gender == 'female')echo'selected' ?> >Female</option>
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
