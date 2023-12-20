@extends('backend.layouts.app')

@section('title',trans('Create Loads'))

@section('content')
  <!-- // Basic multiple Column Form section start -->
   <style>
    .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    background-color: #100909;
    opacity: 1;
}
   </style>
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <form class="form" method="post" action="{{route('loads.store')}}">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="contract_id">Contract Id <i class="text-danger">*</i></label>
                            <select name="contract_id" onchange="get_data(this)" class="form-control" id="contract_id" required>
                                <option value="">Select Contract</option>
                                    @forelse($contract as $c)
                                        <option data-remain="{{$c->totalweight  - $c->loads?->sum('totalweight')}}" value="{{$c->id}}" @if(old('contract_id')==$c->id) selected @endif>{{$c->contractnumber}} - {{$c->totalweight  - $c->loads?->sum('totalweight')}}</option>
                                    @empty
                                        <option value="">No Contract Found</option>
                                    @endforelse
                            </select>
                        </div>
                    </div>
                
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="driver_id">Driver Id <i class="text-danger">*</i></label>
                            <select name="driver_id" class="form-control" id="driver_id"  required>
                                <option value="">Select Driver</option>
                                    @forelse($driver as $d)
                                        <option value="{{$d->id}}" @if(old('driver_id')==$d->id) selected @endif>{{$d->name_en}}</option>
                                    @empty
                                        <option value="">No Driver Found</option>
                                    @endforelse
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="asset_id">Asset Id</label>
                            <select name="asset_id" onchange="loadcal(this)" class="form-control" id="asset_id" required >
                                <option value="">Select Asset</option>
                                    @forelse($asset as $a)
                                        <option data-cml="{{$a->cml}}" value="{{$a->id}}" @if(old('asset_id')==$a->id) selected @endif>{{$a->registrationnumber}}</option>
                                    @empty
                                        <option value="">No Asset Found</option>
                                    @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="product_id">Product Id</label>
                            <select name="product_id" class="form-control" id="product_id" >
                                <option value="">Select Product</option>
                                    @forelse($product as $p)
                                        <option value="{{$p->id}}" @if(old('product_id')==$p->id) selected @endif>{{$p->name}}</option>
                                    @empty
                                        <option value="">No Product Found</option>
                                    @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="startdate">Start date</label>
                            <input type="date" id="startdate" required class="form-control" value="{{ old('startdate')}}" name="startdate">
                            @if($errors->has('startdate'))
                                <span class="text-danger"> {{ $errors->first('startdate') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="finishdate">Finish date</label>
                            <input type="date" id="finishdate" required class="form-control" value="{{ old('finishdate')}}" name="finishdate">
                            @if($errors->has('finishdate'))
                                <span class="text-danger"> {{ $errors->first('finishdate') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="starttime">Start Time</label>
                            <input type="time" id="starttime" required class="form-control" value="{{ old('starttime')}}" name="starttime">
                            @if($errors->has('starttime'))
                                <span class="text-danger"> {{ $errors->first('starttime') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="finishtime">Finish Time</label>
                            <input type="time" id="finishtime" required class="form-control" value="{{ old('finishtime')}}" name="finishtime">
                            @if($errors->has('finishtime'))
                                <span class="text-danger"> {{ $errors->first('finishtime') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="totalweight">Total Weight</label>
                            <input type="text" id="totalweight" readonly class="form-control" value="{{ old('totalweight')}}" name="totalweight">
                            @if($errors->has('totalweight'))
                                <span class="text-danger"> {{ $errors->first('totalweight') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="totaldistance">Total distance</label>
                            <input type="text" id="totaldistance" readonly class="form-control" value="{{ old('totaldistance')}}" name="totaldistance">
                            @if($errors->has('totaldistance'))
                                <span class="text-danger"> {{ $errors->first('totaldistance') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="chargetype">Charge Type</label>
                            <select name="chargetype" class="form-control" id="chargetype" >
                                <option value="">Select Type</option>
                                <option value="1">Weight</option>
                                <option value="2">Kilometer</option>
                            </select>
                            @if($errors->has('chargetype'))
                                <span class="text-danger"> {{ $errors->first('chargetype') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" id="amount" readonly class="form-control" value="{{ old('amount')}}" name="amount">
                            @if($errors->has('amount'))
                                <span class="text-danger"> {{ $errors->first('amount') }}</span>
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
            
@endsection

@push('scripts')
    <script>
        var total_weight=chargetype=chargeamt=totaldistance=0;
        function get_data(e){
            let contract={!!json_encode($contract)!!}
            for(let i=0;i < contract.length; i++){
                if($(e).val()==contract[i].id){
                    $('#product_id').val(contract[i].product_id);
                    $('#totaldistance').val(contract[i].totaldistance);
                    $('#chargetype').val(contract[i].chargetype);
                    $('#asset_id').val('');
                    
                    totaldistance=contract[i].totaldistance;
                    chargetype=contract[i].chargetype;
                    chargeamt=contract[i].amount;
                    total_weight=$(e).find('option:selected').data('remain');
                    break;
                }
            }
        }

        function loadcal(e){
            let loadc=$(e).find('option:selected').data('cml');
            if(total_weight>loadc){
                $('#totalweight').val(loadc);
                if(chargetype==1)
                    $('#amount').val(loadc*chargeamt)
                else
                    $('#amount').val(totaldistance*chargeamt)
            }
            else{
                $('#totalweight').val(total_weight);
                if(chargetype==1)
                    $('#amount').val(total_weight*chargeamt)
                else
                    $('#amount').val(totaldistance*chargeamt)
            }
                
        }

        
    </script>
@endpush
