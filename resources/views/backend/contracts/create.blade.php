@extends('backend.layouts.app')

@section('title',trans('Create Contract'))

@section('content')
  <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route('contracts.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="contractnumber">Contract Number<i class="text-danger">*</i></label>
                                            <input type="text" id="contractnumber" class="form-control" value="{{ old('contractnumber')}}" name="contractnumber">
                                            @if($errors->has('contractnumber'))
                                                <span class="text-danger"> {{ $errors->first('contractnumber') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="customer_id">Customer Id <i class="text-danger">*</i></label>
                                            <input type="text" id="customer_id" class="form-control" value="{{ old('customer_id')}}" name="customer_id">
                                            @if($errors->has('customer_id'))
                                                <span class="text-danger"> {{ $errors->first('customer_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="product_id">Product Id  <i class="text-danger">*</i></label>
                                            <input type="text" id="product_id" class="form-control" value="{{ old('product_id')}}" name="product_id">
                                            @if($errors->has('product_id'))
                                                <span class="text-danger"> {{ $errors->first('product_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="chargetype">Charge Type</label>
                                            <input type="text" id="chargetype" class="form-control" value="{{ old('chargetype')}}" name="chargetype">
                                            @if($errors->has('chargetype'))
                                                <span class="text-danger"> {{ $errors->first('chargetype') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="amount">Amount</label>
                                            <input type="text" id="amount" class="form-control" value="{{ old('amount')}}" name="amount">
                                            @if($errors->has('amount'))
                                                <span class="text-danger"> {{ $errors->first('amount') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="startdate">Start date</label>
                                            <input type="date" id="startdate" class="form-control" value="{{ old('startdate')}}" name="startdate">
                                            @if($errors->has('startdate'))
                                                <span class="text-danger"> {{ $errors->first('startdate') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="finishdate">Finish date</label>
                                            <input type="date" id="finishdate" class="form-control" value="{{ old('finishdate')}}" name="finishdate">
                                            @if($errors->has('finishdate'))
                                                <span class="text-danger"> {{ $errors->first('finishdate') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="collectform">Collectform</label>
                                            <input type="text" id="collectform" class="form-control" value="{{ old('collectform')}}" name="collectform">
                                            @if($errors->has('collectform'))
                                                <span class="text-danger"> {{ $errors->first('collectform') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="deliveredto">Delivered to</label>
                                            <input type="text" id="deliveredto" class="form-control" value="{{ old('deliveredto')}}" name="deliveredto">
                                            @if($errors->has('deliveredto'))
                                                <span class="text-danger"> {{ $errors->first('deliveredto') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="totalweight">Total Weight</label>
                                            <input type="text" id="totalweight" class="form-control" value="{{ old('totalweight')}}" name="totalweight">
                                            @if($errors->has('totalweight'))
                                                <span class="text-danger"> {{ $errors->first('totalweight') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="totaldistance">Total distance</label>
                                            <input type="text" id="totaldistance" class="form-control" value="{{ old('totaldistance')}}" name="totaldistance">
                                            @if($errors->has('totaldistance'))
                                                <span class="text-danger"> {{ $errors->first('totaldistance') }}</span>
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
