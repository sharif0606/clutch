@extends('backend.layouts.appAuth')
@section('title','Sign Up')
@section('content')
    <div class="wrapper pa-0">
        <header class="sp-header">
            <div class="sp-logo-wrap pull-left">
                <a href="index.html">
                    <img class="brand-img mr-10" src="../img/logo.png" alt="brand"/>
                    <span class="brand-text">Grandin</span>
                </a>
            </div>
            <div class="form-group mb-0 pull-right">
                <span class="inline-block pr-10">Do you have a account?</span>
                <a class="inline-block btn btn-primary  btn-rounded" href="{{route('login')}}">Sign In</a>
            </div>
            <div class="clearfix"></div>
        </header>
        <!-- Main Content -->
        <div class="page-wrapper pa-0 ma-0 auth-page">
                <div class="container-fluid">
                    <!-- Row -->
                    <div class="table-struct full-width full-height">
                        <div class="table-cell vertical-align-middle auth-form-wrap">
                            <div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="mb-30">
                                            <h3 class="text-center txt-dark mb-10">Sign up to Grandin</h3>
                                            <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                                        </div>  
                                        <div class="form-wrap">
                                            <form action="{{route('register.store')}}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="FullName">Full Name</label>
                                                    <input type="text" class="form-control" name="FullName" value="{{old('FullName')}}" required="" id="FullName" placeholder="Your Full Name">
                                                    @if($errors->has('FullName'))
                                                        <small class="d-block text-danger">
                                                            {{$errors->first('FullName')}}
                                                        </small>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="EmailAddress">Email address</label>
                                                    <input type="email" class="form-control" required="" id="EmailAddress" name="EmailAddress" value="{{old('EmailAddress')}}" placeholder="Enter email">
                                                    @if($errors->has('EmailAddress'))
                                                        <small class="d-block text-danger">
                                                            {{$errors->first('EmailAddress')}}
                                                        </small>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="contact_no_en">Contact Number</label>
                                                    <input type="text" class="form-control" required="" id="contact_no_en" name="contact_no_en" value="{{old('contact_no_en')}}" placeholder="Phone Number">
                                                    @if($errors->has('contact_no_en'))
                                                        <small class="d-block text-danger">
                                                            {{$errors->first('contact_no_en')}}
                                                        </small>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label class="pull-left control-label mb-10" for="password">Password</label>
                                                    <input type="password" class="form-control" required="" id="password" name="password" placeholder="Enter pwd">
                                                    @if($errors->has('password'))
                                                        <small class="d-block text-danger">
                                                            {{$errors->first('password')}}
                                                        </small>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label class="pull-left control-label mb-10" for="password_confirmation">Confirm Password</label>
                                                    <input type="password" class="form-control" required="" id="password_confirmation" name="password_confirmation" placeholder="Enter pwd">
                                                </div>
                                                
                                                <div class="form-group text-center">
                                                    <button type="submit" class="btn btn-primary btn-rounded">sign Up</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->   
                </div>
                
            </div>
            <!-- /Main Content -->
    </div>
@endsection
