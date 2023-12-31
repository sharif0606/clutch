@extends('backend.layouts.app')

@section('title',trans('Create Products'))

@section('content')
  <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route('products.store')}}">
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
                                            <label for="product_type_id">Product type Id <i class="text-danger">*</i></label>
                                            <select name="product_type_id"         class="form-control" id="product_type_id" >
                                                <option value="">Product type Id</option>
                                                    @forelse($product_type_id as $p)
                                                        <option value="{{$p->id}}" @if(old('product_type_id')==$p->id) selected @endif>{{$p->name}}</option>
                                                    @empty
                                                        <option value="">No Product Found</option>
                                                    @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="unit_id">Unit Id <i class="text-danger">*</i></label>
                                            <select name="unit_id"         class="form-control" id="unit_id" >
                                                <option value="">Unit Id</option>
                                                    @forelse($unit as $p)
                                                        <option value="{{$p->id}}" @if(old('unit_id')==$p->id) selected @endif>{{$p->name}}</option>
                                                    @empty
                                                        <option value="">No Unit Found</option>
                                                    @endforelse
                                            </select>
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
