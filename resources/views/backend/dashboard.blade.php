@extends('backend.layouts.app')

@section('content')
<!-- Row -->
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-default card-view pa-0 bg-gradient">
            <div class="panel-wrapper collapse in">
                <div class="panel-body pa-0">
                    <div class="sm-data-box">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                    <span class="txt-light block counter"><span class="counter-anim">914,001</span></span>
                                    <span class="weight-500 uppercase-font block font-13 txt-light">Properties</span>
                                </div>
                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                    <i class="icon-direction data-right-rep-icon txt-light"></i>
                                </div>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-default card-view pa-0 bg-gradient1">
            <div class="panel-wrapper collapse in">
                <div class="panel-body pa-0">
                    <div class="sm-data-box">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                    <span class="txt-light block counter"><span class="counter-anim">46.41</span>%</span>
                                    <span class="weight-500 uppercase-font block txt-light">growth</span>
                                </div>
                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                    <i class="icon-graph  data-right-rep-icon txt-light"></i>
                                </div>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-default card-view pa-0 bg-gradient3">
            <div class="panel-wrapper collapse in">
                <div class="panel-body pa-0">
                    <div class="sm-data-box">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                    <span class="txt-light block counter"><span class="counter-anim">4,054</span></span>
                                    <span class="weight-500 uppercase-font block txt-light">Sales</span>
                                </div>
                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                    <i class="icon-layers data-right-rep-icon txt-light"></i>
                                </div>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-default card-view pa-0 bg-gradient2">
            <div class="panel-wrapper collapse in">
                <div class="panel-body pa-0">
                    <div class="sm-data-box">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                    <span class="txt-light block counter"><span class="counter-anim">4,054</span></span>
                                    <span class="weight-500 uppercase-font block txt-light">Rented</span>
                                </div>
                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                    <i class="icon-flag  data-right-rep-icon txt-light"></i>
                                </div>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Row -->

<!-- Row -->
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="panel card-view">
            <div class="panel-heading small-panel-heading relative">
                <div class="pull-left">
                    <h6 class="panel-title">Category Overview</h6>
                </div>
                <div class="clearfix"></div>
            </div>		
            <div class="panel-wrapper collapse in">
                <div class="panel-body row pa-0">
                    <div class="sm-data-box">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                    <span class="block"><i class="zmdi zmdi-trending-up txt-success font-18 mr-5"></i><span class="weight-500 uppercase-font">growth</span></span>
                                    <span class="txt-dark block counter">$<span class="counter-anim">5,676</span></span>
                                </div>
                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                    <div id="sparkline_7" class="sp-small-chart" ></div>
                                </div>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="panel card-view bg-gradient2">
            <div class="panel-heading small-panel-heading relative">
                <div class="pull-left">
                    <h6 class="panel-title txt-light">Monthly Revenue</h6>
                </div>
                <div class="clearfix"></div>
            </div>		
            <div class="panel-wrapper collapse in">
                <div class="panel-body row pa-0">
                    <div class="sm-data-box">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left txt-light">
                                    <span class="block"><i class="zmdi zmdi-trending-up txt-light font-18 mr-5"></i><span class="weight-500 uppercase-font">growth</span></span>
                                    <span class="block counter">$<span class="counter-anim">15,678</span></span>
                                </div>
                                <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                    <div id="sparkline_6" class="sp-small-chart" ></div>
                                </div>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
        <div class="panel panel-default card-view panel-refresh">
            <div class="refresh-container">
                <div class="la-anim-1"></div>
            </div>
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Property Stats</h6>
                </div>
                <div class="pull-right">
                    <a href="#" class="pull-left inline-block refresh mr-15">
                        <i class="zmdi zmdi-replay"></i>
                    </a>
                    <a href="#" class="pull-left inline-block full-screen mr-15">
                        <i class="zmdi zmdi-fullscreen"></i>
                    </a>
                    <div class="pull-left inline-block dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Devices</a></li>
                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>General</a></li>
                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Referral</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div id="e_chart_1" class="" style="height:355px;"></div>
            </div>
        </div>
    </div>
</div>
<!-- /Row -->

<!-- Row -->
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Project Sales</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Products</th>
                                <th>Popularity</th>
                                <th>Sales</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                <td>Milk Powder</td>
                                <td><span class="peity-bar" data-width="90" data-peity='{ "fill": ["#635bd6"], "stroke":["#635bd6"]}' data-height="40">0,-3,-2,-4,5,-4,3,-2,5,-1</span> </td>
                                <td><span class="text-danger text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 28.76%</span> </td>
                                </tr>
                                <tr>
                                <td>2</td>
                                <td>Air Conditioner</td>
                                <td><span class="peity-bar" data-width="90" data-peity='{ "fill": ["#635bd6"], "stroke":["#635bd6"]}' data-height="40">0,-1,1,-2,-3,1,-2,-3,1,-2</span> </td>
                                <td><span class="text-warning text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 8.55%</span> </td>
                                </tr>
                                <tr>
                                <td>3</td>
                                <td>RC Cars</td>
                                <td><span class="peity-bar" data-width="90" data-peity='{ "fill": ["#635bd6"], "stroke":["#635bd6"]}' data-height="40">0,3,6,1,2,4,6,3,2,1</span> </td>
                                <td><span class="text-success text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 58.56%</span> </td>
                                </tr>
                                <tr>
                                <td>4</td>
                                <td>Down Coat</td>
                                <td><span class="peity-bar" data-width="90" data-peity='{ "fill": ["#635bd6"], "stroke":["#635bd6"]}' data-height="40">0,3,6,4,5,4,7,3,4,2</span> </td>
                                <td><span class="text-info text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 35.76%</span> </td>
                                </tr>
                                <tr>
                                <td>5</td>
                                <td>Xyz Byke</td>
                                <td><span class="peity-bar" data-width="90" data-peity='{ "fill": ["#635bd6"], "stroke":["#635bd6"]}' data-height="40">0,3,6,4,5,4,7,3,4,2</span> </td>
                                <td><span class="text-info text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 35.76%</span> </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Timelines</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="streamline user-activity">
                        <div class="sl-item">
                            <a href="javascript:void(0)">
                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                    <img class="img-responsive img-circle" src="../img/user.png" alt="avatar"/>
                                </div>
                                <div class="sl-content">
                                    <p class="inline-block"><span class="capitalize-font txt-primary mr-5 weight-500">Clay Masse</span><span>invited to join the meeting in the conference room at 9.45 am</span></p>
                                    <span class="block txt-grey font-12 capitalize-font">3 Min</span>
                                </div>
                            </a>
                        </div>

                        <div class="sl-item">
                            <a href="javascript:void(0)">
                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                    <img class="img-responsive img-circle" src="../img/user1.png" alt="avatar"/>
                                </div>
                                <div class="sl-content">
                                    <p class="inline-block"><span class="capitalize-font txt-primary mr-5 weight-500">Evie Ono</span><span>added three new photos in the library</span></p>
                                    <div class="activity-thumbnail">
                                        <img src="../img/thumb-1.jpg" alt="thumbnail"/>
                                        <img src="../img/thumb-2.jpg" alt="thumbnail"/>
                                        <img src="../img/thumb-3.jpg" alt="thumbnail"/>
                                    </div>
                                    <span class="block txt-grey font-12 capitalize-font">8 Min</span>
                                </div>
                            </a>	
                        </div>

                        <div class="sl-item">
                            <a href="javascript:void(0)">
                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                    <img class="img-responsive img-circle" src="../img/user2.png" alt="avatar"/>
                                </div>
                                <div class="sl-content">
                                    <p class="inline-block"><span class="capitalize-font txt-primary mr-5 weight-500">madalyn rascon</span><span>assigned a new task</span></p>
                                    <span class="block txt-grey font-12 capitalize-font">28 Min</span>
                                </div>
                            </a>	
                        </div>

                        <div class="sl-item">
                            <a href="javascript:void(0)">
                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                    <img class="img-responsive img-circle" src="../img/user3.png" alt="avatar"/>
                                </div>
                                <div class="sl-content">
                                    <p class="inline-block"><span class="capitalize-font txt-primary mr-5 weight-500">Ezequiel Merideth</span><span>completed project wireframes</span></p>
                                    <span class="block txt-grey font-12 capitalize-font">yesterday</span>
                                </div>
                            </a>	
                        </div>
                        
                        <div class="sl-item">
                            <a href="javascript:void(0)">
                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                    <img class="img-responsive img-circle" src="../img/user4.png" alt="avatar"/>
                                </div>
                                <div class="sl-content">
                                    <p class="inline-block"><span class="capitalize-font txt-primary mr-5 weight-500">jonnie metoyer</span><span>created a group 'Hencework' in the discussion forum</span></p>
                                    <span class="block txt-grey font-12 capitalize-font">18 feb</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
</div>	
<!-- Row -->
@endsection
@push('scripts')
    <!-- simpleWeather JavaScript -->
    <script src="{{asset('public/vendors/bower_components/moment/min/moment.min.js')}}"></script>
	<script src="{{asset('public/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
	<script src="{{asset('public/dist/js/simpleweather-data.js')}}"></script>
	
	<!-- EChartJS JavaScript -->
	<script src="{{asset('public/vendors/bower_components/echarts/dist/echarts-en.min.js')}}"></script>
	<script src="{{asset('public/vendors/echarts-liquidfill.min.js')}}"></script>
	
	<!-- Progressbar Animation JavaScript -->
	<script src="{{asset('public/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('public/vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>
    <!-- Piety JavaScript -->
	<script src="{{asset('public/vendors/bower_components/peity/jquery.peity.min.js')}}"></script>
	<script src="{{asset('public/dist/js/peity-data.js')}}"></script>
    
	<script src="{{asset('public/dist/js/dashboard6-data.js')}}"></script>
@endpush