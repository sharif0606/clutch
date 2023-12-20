@extends('backend.layouts.app')

@section('title',trans('Create driver_payroll'))

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
            <form class="form" method="post" action="{{route('driver_payroll.store')}}">
                @csrf
                @method('PATCH')
                <div class="row">
                
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
                            <label for="startdate">Month</label>
                            <input type="date" id="startdate" required class="form-control" value="{{ old('startdate')}}" name="startdate">
                            @if($errors->has('startdate'))
                                <span class="text-danger"> {{ $errors->first('startdate') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="finishdate">Year</label>
                            <input type="date" id="finishdate" required class="form-control" value="{{ old('finishdate')}}" name="finishdate">
                            @if($errors->has('finishdate'))
                                <span class="text-danger"> {{ $errors->first('finishdate') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="number_of_load">Number Of Load</label>
                            <input type="text" id="number_of_load" readonly class="form-control" value="{{ old('number_of_load')}}" name="number_of_load">
                            @if($errors->has('number_of_load'))
                                <span class="text-danger"> {{ $errors->first('number_of_load') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="total_amount">Total Amount</label>
                            <input type="text" id="amount" readonly class="form-control" value="{{ old('total_amount')}}" name="total_amount">
                            @if($errors->has('total_amount'))
                                <span class="text-danger"> {{ $errors->first('total_amount') }}</span>
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
