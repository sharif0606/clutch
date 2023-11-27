@extends('backend.layouts.app')

@section('title',trans('Create Assets'))

@section('content')
<div class="row">
    <div class="col-xs-12">
        <form class="form" method="post" enctype="multipart/form-data" action="{{route('assets.update',encryptor('encrypt',$asset->id))}}">
                @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="name">Name<i class="text-danger">*</i></label>
                        <input type="text" id="name" class="form-control" value="{{ old('name',$asset->name)}}" name="name">
                        @if($errors->has('name'))
                            <span class="text-danger"> {{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
            
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="registrationnumber">Registration Number <i class="text-danger">*</i></label>
                        <input type="text" id="registrationnumber" class="form-control" value="{{ old('registrationnumber',$asset->registrationnumber)}}" name="registrationnumber">
                        @if($errors->has('registrationnumber'))
                            <span class="text-danger"> {{ $errors->first('registrationnumber') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="driver_id" class="form-label">Driver Id	</label>
                        <select name="driver_id" class="form-control" id="driver_id" >
                            <option value="">Select Driver</option>
                            @forelse($user as $u)
                                <option value="{{$u->id}}" @if(old('driver_id',$asset->driver_id)==$u->id) selected @endif>{{$u->name_en}}</option>
                            @empty
                                <option value="">No Driver Found</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="registrationcard">Registration Card</label>
                        <input type="file" id="registrationcard" class="form-control" value="{{ old('registrationcard',$asset->registrationcard)}}" name="registrationcard">
                        @if($errors->has('registrationcard'))
                            <span class="text-danger"> {{ $errors->first('registrationcard') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="gml">General Mass Limits (GML)</label>
                        <input type="text" id="gml" class="form-control" value="{{ old('gml',$asset->gml)}}" name="gml">
                        @if($errors->has('gml'))
                            <span class="text-danger"> {{ $errors->first('gml') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="cml">Concessional Mass Limits (CML)</label>
                        <input type="text" id="cml" class="form-control" value="{{ old('cml',$asset->cml)}}" name="cml">
                        @if($errors->has('cml'))
                            <span class="text-danger"> {{ $errors->first('cml') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="hml">Higher Mass Limits (HML)</label>
                        <input type="text" id="hml" class="form-control" value="{{ old('hml',$asset->hml)}}" name="hml">
                        @if($errors->has('hml'))
                            <span class="text-danger"> {{ $errors->first('hml') }}</span>
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
@endsection
