@extends('backend.layouts.app')

@section('title',trans('Create Customers'))

@section('content')
  <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route('customers.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="name">Name<i class="text-danger">*</i></label>
                                            <input type="text" id="name" class="form-control" value="{{ old('name')}}" name="name">
                                            @if($errors->has('name'))
                                                <span class="text-danger"> {{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="contactperson">ContactPerson <i class="text-danger">*</i></label>
                                            <input type="text" id="contactperson" class="form-control" value="{{ old('contactperson')}}" name="contactperson">
                                            @if($errors->has('contactperson'))
                                                <span class="text-danger"> {{ $errors->first('contactperson') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="contactnumber">Contact Number (English) <i class="text-danger">*</i></label>
                                            <input type="text" id="contactnumber" class="form-control" value="{{ old('contactnumber')}}" name="contactnumber">
                                            @if($errors->has('contactnumber'))
                                                <span class="text-danger"> {{ $errors->first('contactnumber') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" id="email" class="form-control" value="{{ old('email')}}" name="email">
                                            @if($errors->has('email'))
                                                <span class="text-danger"> {{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" id="address" class="form-control" value="{{ old('address')}}" name="address">
                                            @if($errors->has('address'))
                                                <span class="text-danger"> {{ $errors->first('address') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                   
                                    
                                </div>
                                
                                <div class="row">
                                    <div class="col-xs-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
