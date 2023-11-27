@extends('backend.layouts.app')
@section('title',trans('Assets List'))

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-xs-12">
            <div class="card">
                
                <!-- table bordered -->
                <div class="table-responsive"><div>
                    <a class="pull-right fs-1" href="{{route('assets.create')}}"><i class="fa fa-plus btn btn-primary"></i></a>
                </div>
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('Name')}}</th>
                                <th scope="col">{{__('Registration Number')}}</th>
                                <th scope="col">{{__('Driver Id')}}</th>
                                <th scope="col">{{__('Registration Card')}}</th>
                                <th scope="col">{{__('General Mass Limits (GML)')}}</th>
                                <th scope="col">{{__('Concessional Mass Limits (CML)')}}</th>
                                <th scope="col">{{__('Higher Mass Limits (HML)')}}</th>
                            
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $p)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$p->name}}</td>
                                <td>{{$p->registrationnumber}}</td>
                                <td>{{$p->driver_id}}</td>
                                <td><img width="50px" src="{{asset('public/uploads/asset/'.$p->registrationcard)}}" alt=""></td>
                                <td>{{$p->gml}}</td>
                                <td>{{$p->cml}}</td>
                                <td>{{$p->hml}}</td>
                                
                                <!-- or <td>{{ $p->status == 1?"Active":"Inactive" }}</td>-->
                                <td class="white-space-nowrap">
                                    <a href="{{route('assets.edit',encryptor('encrypt',$p->id))}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form id="form{{$p->id}}" action="{{route('assets.destroy',encryptor('encrypt',$p->id))}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="7" class="text-center">No Pruduct Found</th>
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