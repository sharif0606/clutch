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
                <div class="row">
                
                    <div class="col-md-4 col-xs-12">
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

                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="finishdate">Year</label>
                            <select name="p_year" class="form-control" id="p_year">
                                <option value="">Select Year</option>
                                @for($i=2023; $i<=date('Y')+1; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                 @endfor
                             </select>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="startdate">Month</label>
                            <select name="p_month" class="form-control" id="p_month">
                                <option value="">Select Month</option>                                        
                                @for($i=1; $i<=12; $i++)
                                    <option value="{{date('m', strtotime('2020-'.$i.'-01'))}}">{{date('F', strtotime('2020-'.$i.'-01'))}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary" onclick="getload()">Get Load</button>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <table class="table">
                                <tr>
                                    <th>#SL</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Weight</th>
                                    <th>Distance</th>
                                    <th>Amount</th>
                                </tr>
                               <tbody class="paydata">

                               </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <div class="col-md-6 col-xs-12">
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
                    </div> --}}
                    
                    
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
        function getload(){
            let driver=$('#driver_id').val();
            let p_year=$('#p_year').val();
            let p_month=$('#p_month').val();
            $.ajax({
                autoFocus: true,
                url: "{{route('get_load')}}",
                method: 'GET',
                dataType: 'json',
                data: { driver: driver,p_year:p_year,p_month:p_month },
                success: function(res) {
                    console.log(res);
                    $('.paydata').html(res);
                   
                },
                error: function(e) {
                    console.log(e);
                }
            });
        }
        
        function cal_total(){
            let itemsub=dis_amt=0;
            let discount=$('#discount').val();
            $('.itemsub').each(function(){
                itemsub+=parseFloat($(this).val());
            });
            if(discount){
                dis_amt=(itemsub*(discount/100));
            }
            $('#sub_amount').val(itemsub);
            $('.sub_amount').text(itemsub);
            $('#disamt').val(dis_amt);
            $('.disamt').text(dis_amt);
            $('#total_amount').val(itemsub - dis_amt);
            $('.total_amount').text(itemsub - dis_amt);
            
        }
    </script>
@endpush
