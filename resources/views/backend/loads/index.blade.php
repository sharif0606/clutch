@extends('backend.layouts.app')
@section('title',trans('Load List'))

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-xs-12">
            <div class="card">
                
                <!-- table bordered -->
                <div class="table-responsive"><div>
                    <a class="pull-right fs-1" href="{{route('loads.create')}}"><i class="fa fa-plus btn btn-primary"></i></a>
                </div>
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('contract_id')}}</th>
                                <th scope="col">{{__('driver_id')}}</th>
                                <th scope="col">{{__('asset_id')}}</th>
                                <th scope="col">{{__('product_id')}}</th>
                                <th scope="col">{{__('startdate')}}</th>
                                <th scope="col">{{__('finishdate')}}</th>
                                <th scope="col">{{__('starttime')}}</th>
                                <th scope="col">{{__('finishtime')}}</th>
                                <th scope="col">{{__('totalweight')}}</th>
                                <th scope="col">{{__('totaldistance')}}</th>
                                <th scope="col">{{__('chargetype')}}</th>
                                <th scope="col">{{__('amount')}}</th>
                            
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $p)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$p->contract_id}}</td>
                                <td>{{$p->driver_id}}</td>
                                <td>{{$p->asset_id}}</td>
                                <td>{{$p->product_id}}</td>
                                <td>{{$p->startdate}}</td>
                                <td>{{$p->finishdate}}</td>
                                <td>{{$p->starttime}}</td>
                                <td>{{$p->finishtime}}</td>
                                <td>{{$p->totalweight}}</td>
                                <td>{{$p->totaldistance}}</td>
                                <td>{{$p->chargetype}}</td>
                                <td>{{$p->amount}}</td>
                                
                                <!-- or <td>{{ $p->status == 1?"Active":"Inactive" }}</td>-->
                                <td class="white-space-nowrap">
                                    <a href="{{route('loads.edit',encryptor('encrypt',$p->id))}}">
                                        <i class="fa fa-edit btn btn-primary"></i>
                                    </a>
                                    <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form id="form{{$p->id}}" action="{{route('loads.destroy',encryptor('encrypt',$p->id))}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="14" class="text-center">No Pruduct Found</th>
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