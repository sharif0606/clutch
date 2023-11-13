@extends('layouts.appAuth')

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
                <span class="inline-block pr-10">Don't have an account?</span>
                <a class="inline-block btn btn-primary  btn-rounded" href="{{route('register')}}">Sign Up</a>
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
                                        <h3 class="text-center txt-dark mb-10">Sign in to Grandin</h3>
                                        <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                                    </div>  
                                    <div class="form-wrap">
                                        <form action="{{route('login.check')}}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="username">Contact Number / Email Address</label>
                                                <input type="text" class="form-control" required="" id="username" name="username" value="{{old('username')}}" placeholder="Phone Number/Email Address">
                                                @if($errors->has('username'))
                                                    <small class="d-block text-danger">
                                                        {{$errors->first('username')}}
                                                    </small>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
                                                <a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a>
                                                <div class="clearfix"></div>
                                                <input type="password" class="form-control" required="" id="password" name="password" placeholder="Enter pwd">
                                                @if($errors->has('password'))
                                                    <small class="d-block text-danger">
                                                        {{$errors->first('password')}}
                                                    </small>
                                                @endif
                                            </div>
                                            
                                            

                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-primary  btn-rounded">sign in</button>
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
