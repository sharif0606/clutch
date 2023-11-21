@extends('backend.layouts.app')

@section('title',trans('Create Users'))

@section('content')
  <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route('branch.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="Name">Name<i class="text-danger">*</i></label>
                                            <input type="text" id="Name" class="form-control" value="{{ old('Name')}}" name="Name">
                                            @if($errors->has('Name'))
                                                <span class="text-danger"> {{ $errors->first('Name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="ContactPerson">ContactPerson <i class="text-danger">*</i></label>
                                            <input type="text" id="ContactPerson" class="form-control" value="{{ old('ContactPerson')}}" name="ContactPerson">
                                            @if($errors->has('ContactPerson'))
                                                <span class="text-danger"> {{ $errors->first('ContactPerson') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="contactNumber">Contact Number (English) <i class="text-danger">*</i></label>
                                            <input type="text" id="contactNumber" class="form-control" value="{{ old('contactNumber')}}" name="ContactNumber">
                                            @if($errors->has('contactNumber'))
                                                <span class="text-danger"> {{ $errors->first('contactNumber') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" id="address" class="form-control" value="{{ old('address')}}" name="address">
                                            @if($errors->has('address'))
                                                <span class="text-danger"> {{ $errors->first('address') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="logo">Logo</label>
                                            <input type="file" id="image" class="form-control" placeholder="Image" name="logo">
                                            @if($errors->has('logo'))
                                                <span class="text-danger"> {{ $errors->first('logo') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
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
