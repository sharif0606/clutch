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
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route('companies.update',encryptor('encrypt',$company->id))}}">
                                 @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="name">Name<i class="text-danger">*</i></label>
                                            <input type="text" id="name" class="form-control" value="{{ old('name',$company->name)}}" name="name">
                                            @if($errors->has('name'))
                                                <span class="text-danger"> {{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="contactperson">ContactPerson <i class="text-danger">*</i></label>
                                            <input type="text" id="contactperson" class="form-control" value="{{ old('contactperson',$company->contactperson)}}" name="contactperson">
                                            @if($errors->has('contactperson'))
                                                <span class="text-danger"> {{ $errors->first('contactperson') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="contactnumber">Contact Number<i class="text-danger">*</i></label>
                                            <input type="text" id="contactnumber" class="form-control" value="{{ old('contactnumber',$company->contactnumber)}}" name="contactnumber">
                                            @if($errors->has('contactnumber'))
                                                <span class="text-danger"> {{ $errors->first('contactnumber') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" id="address" class="form-control" value="{{ old('address',$company->address)}}" name="address">
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

                                     <!-- <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="created_by">Created_by</label>
                                            <input type="file" id="created_by" class="form-control" value="{{ old('created_by')}}" name="created_by">
                                            @if($errors->has('created_by'))
                                                <span class="text-danger"> {{ $errors->first('created_by') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="updated_by">Updated_by</label>
                                            <input type="file" id="updated_by" class="form-control" value="{{ old('updated_by')}}" name="updated_by">
                                            @if($errors->has('updated_by'))
                                                <span class="text-danger"> {{ $errors->first('updated_by') }}</span>
                                            @endif
                                        </div>
                                    </div> -->
                                    
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
