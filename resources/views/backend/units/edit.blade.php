@extends('backend.layouts.app')

@section('title',trans('Product Unit'))

@section('content')
  <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route('units.update',encryptor('encrypt',$unit->id))}}">
                                 @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="name">Name<i class="text-danger">*</i></label>
                                            <input type="text" id="name" class="form-control" value="{{ old('name',$unit->name)}}" name="name">
                                            @if($errors->has('name'))
                                                <span class="text-danger"> {{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                
                                   

                                     <!-- <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="created_by">Created_by</label>
                                            <input type="file" id="created_by" class="form-control" value="{{ old('created_by')}}" name="created_by">
                                            @if($errors->has('created_by'))
                                                <span class="text-danger"> {{ $errors->first('created_by') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
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
