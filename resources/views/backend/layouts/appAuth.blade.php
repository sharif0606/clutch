<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>{{env('APP_NAME')}} | @yield('title','Page Name')</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content=""/>
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        
        <!-- vector map CSS -->
        <link href="{{asset('public/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Custom CSS -->
        <link href="{{asset('public/dist/css/style.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        
        @yield('content')
        <!-- /#wrapper -->
        
        <!-- JavaScript -->
        
        <!-- jQuery -->
        <script src="{{asset('public/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('public/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
        
        <!-- Slimscroll JavaScript -->
        <script src="{{asset('public/dist/js/jquery.slimscroll.js')}}"></script>
        
        <!-- Init JavaScript -->
        <script src="{{asset('public/dist/js/init.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
        <script>  
        @if(Session::has('success'))  
                toastr.success("{{ Session::get('success') }}");  
        @endif  
        @if(Session::has('info'))  
                toastr.info("{{ Session::get('info') }}");  
        @endif  
        @if(Session::has('warning'))  
                toastr.warning("{{ Session::get('warning') }}");  
        @endif  
        @if(Session::has('error'))  
                toastr.error("{{ Session::get('error') }}");  
        @endif  
        </script>  
    </body>
</html>
