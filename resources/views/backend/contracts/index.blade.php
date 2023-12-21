@extends('backend.layouts.app')
@section('title',trans('Contract List'))

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-xs-12">
            <div class="card">
                
                <!-- table bordered -->
                <div class="table-responsive"><div>
                    <a class="pull-right fs-1" href="{{route('contracts.create')}}"><i class="fa fa-plus btn btn-primary"></i></a>
                </div>
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('contractnumber')}}</th>
                                <th scope="col">{{__('customer_id')}}</th>
                                <th scope="col">{{__('product_id')}}</th>
                                <th scope="col">{{__('chargetype')}}</th>
                                <th scope="col">{{__('amount')}}</th>
                                <th scope="col">{{__('startdate')}}</th>
                                <th scope="col">{{__('finishdate')}}</th>
                                <th scope="col">{{__('collectform')}}</th>
                                <th scope="col">{{__('deliveredto')}}</th>
                                <th scope="col">{{__('totalweight')}}</th>
                                <th scope="col">{{__('totaldistance')}}</th>
                            
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $chargetype=array('','Weight','Kilometer');
                            @endphp
                            @forelse($data as $p)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$p->contractnumber}}</td>
                                <td>{{$p->customers?->name}}</td>
                                <td>{{$p->products?->name}}</td>
                                <td>{{$chargetype[$p->chargetype]}}</td>
                                <td>{{$p->amount}}</td>
                                <td>{{$p->startdate}}</td>
                                <td>{{$p->finishdate}}</td>
                                <td>{{$p->collectform}}</td>
                                <td>{{$p->deliveredto}}</td>
                                <td>{{$p->totalweight}}</td>
                                <td>{{$p->totaldistance}}</td>
                                
                                <!-- or <td>{{ $p->status == 1?"Active":"Inactive" }}</td>-->
                                <td class="white-space-nowrap">
                                    <a href="{{route('contracts.edit',encryptor('encrypt',$p->id))}}">
                                        <i class="fa fa-edit btn btn-primary"></i>
                                    </a>
                                    <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form id="form{{$p->id}}" action="{{route('contracts.destroy',encryptor('encrypt',$p->id))}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="13" class="text-center">No Pruduct Found</th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection