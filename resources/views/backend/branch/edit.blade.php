@extends('backend.layouts.app')

@section('title',trans('Create Users'))

@section('content')
<div class="row">
    <div class="col-xs-12">
        <form class="form" method="post" enctype="multipart/form-data" action="{{route('branch.update',encryptor('encrypt',$branch->id))}}">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="company_id" class="form-label">Company Id</label>
                        <select name="company_id" class="form-control" id="company_id" >
                            <option value="">Select Company</option>
                            @forelse($company as $u)
                                <option value="{{$u->id}}" @if(old('company_id',$branch->company_id)==$u->id) selected @endif>{{$u->name}}</option>
                            @empty
                                <option value="">No Company Found</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="Name">Name<i class="text-danger">*</i></label>
                        <input type="text" id="Name" class="form-control" value="{{ old('Name',$branch->name)}}" name="Name">
                        @if($errors->has('Name'))
                            <span class="text-danger"> {{ $errors->first('Name') }}</span>
                        @endif
                    </div>
                </div>
            
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="ContactPerson">ContactPerson <i class="text-danger">*</i></label>
                        <input type="text" id="ContactPerson" class="form-control" value="{{ old('ContactPerson',$branch->contactperson)}}" name="ContactPerson">
                        @if($errors->has('ContactPerson'))
                            <span class="text-danger"> {{ $errors->first('ContactPerson') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="contactNumber">Contact Number (English) <i class="text-danger">*</i></label>
                        <input type="text" id="contactNumber" class="form-control" value="{{ old('contactNumber',$branch->contactnumber)}}" name="contactNumber">
                        @if($errors->has('contactNumber'))
                            <span class="text-danger"> {{ $errors->first('contactNumber') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" class="form-control" value="{{ old('address',$branch->address)}}" name="address">
                        @if($errors->has('address'))
                            <span class="text-danger"> {{ $errors->first('address') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
