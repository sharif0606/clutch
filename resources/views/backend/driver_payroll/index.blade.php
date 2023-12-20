@extends('backend.layouts.app')
@section('title',trans('Driver Payroll'))

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-xs-12">
            <div class="card">
                
                <!-- table bordered -->
                <div class="table-responsive"><div>
                    <a class="pull-right fs-1" href="{{route('driver_payroll.create')}}"><i class="fa fa-plus btn btn-primary"></i></a>
                </div>
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                
                                <th scope="col">{{__('driver_id')}}</th>
                                <th scope="col">{{__('month')}}</th>
                                <th scope="col">{{__('year')}}</th>
                                <th scope="col">{{__('number_of_load')}}</th>
                                
                                <th scope="col">{{__('total_amount')}}</th>
                            
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $p)
                            <tr>
                                <th scope="row">{{ $p->id }}</th>
                                <td>{{$p->driver_id}}</td>
                                <td>{{$p->month}}</td>
                                <td>{{$p->year}}</td>
                                <td>{{$p->number_of_load}}</td>
                                <td>{{$p->total_amount}}</td>
                                
                                <!-- or <td>{{ $p->status == 1?"Active":"Inactive" }}</td>-->
                                <td class="white-space-nowrap">
                                    <a href="{{route('driver_payroll.edit',encryptor('encrypt',$p->id))}}">
                                        <i class="fa fa-edit btn btn-primary"></i>
                                    </a>
                                    <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form id="form{{$p->id}}" action="{{route('driver_payroll.destroy',encryptor('encrypt',$p->id))}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="14" class="text-center">No Driver Found</th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{$data->links()}}
</section>
@endsection