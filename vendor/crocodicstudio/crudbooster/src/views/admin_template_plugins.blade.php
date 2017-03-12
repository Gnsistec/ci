	<!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("vendor/crudbooster/assets/adminlte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{asset("vendor/crudbooster/assets/adminlte/font-awesome/css")}}/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
      	    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> 
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
	<!-- REQUIRED JS SCRIPTS -->

	<!-- jQuery 2.1.3 -->
	<script src="{{ asset ('vendor/crudbooster/assets/adminlte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
	
	<!-- Bootstrap 3.3.2 JS -->
	<script src="{{ asset ('vendor/crudbooster/assets/adminlte/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset ('vendor/crudbooster/assets/adminlte/dist/js/app.js') }}" type="text/javascript"></script>
	
	<!--BOOTSTRAP DATEPICKER-->	
	<script src="{{ asset ('vendor/crudbooster/assets/adminlte/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
	<link rel="stylesheet" href="{{ asset ('vendor/crudbooster/assets/adminlte/plugins/datepicker/datepicker3.css') }}">

	<!--BOOTSTRAP DATERANGEPICKER-->
	<script src="{{ asset ('vendor/crudbooster/assets/adminlte/plugins/daterangepicker/moment.min.js') }}"></script>
	<!--<script src=" asset ('vendor/crudbooster/assets/adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>-->
	<link rel="stylesheet" href="{{ asset ('vendor/crudbooster/assets/adminlte/plugins/daterangepicker/daterangepicker-bs3.css') }}">

	<!-- Bootstrap time Picker -->
  	<link rel="stylesheet" href="{{ asset ('vendor/crudbooster/assets/adminlte/plugins/timepicker/bootstrap-timepicker.min.css') }}">  	  	
	<script src="{{ asset ('vendor/crudbooster/assets/adminlte/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>

	<link rel='stylesheet' href='{{ asset("vendor/crudbooster/assets/fancy//source/jquery.fancybox.css") }}'/>
	<script src="{{ asset('vendor/crudbooster/assets/fancy/source/jquery.fancybox.pack.js') }}"></script> 	

	<!--SWEET ALERT-->
	<script src="{{asset('vendor/crudbooster/assets/sweetalert/dist/sweetalert.min.js')}}"></script> 
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/crudbooster/assets/sweetalert/dist/sweetalert.css')}}">	

	<!--MONEY FORMAT-->
	<script src="{{asset('vendor/crudbooster/jquery.price_format.2.0.min.js')}}"></script>

	<!--DATATABLE-->	
  	<link rel="stylesheet" href="{{ asset ('vendor/crudbooster/assets/adminlte/plugins/datatables/dataTables.bootstrap.css')}}">
	<script src="{{ asset ('vendor/crudbooster/assets/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset ('vendor/crudbooster/assets/adminlte/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

	<!--SELECT 2-->
	<script src="{{asset('vendor/crudbooster/assets/select2/dist/js/select2.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/crudbooster/assets/select2/dist/css/select2.min.css')}}">

	<script>			
		var ASSET_URL           = "{{asset('/')}}";
		var APP_NAME            = "{{CRUDBooster::getSetting('appname')}}";		
		var ADMIN_PATH          = '{{url(config("crudbooster.ADMIN_PATH")) }}';
		var NOTIFICATION_JSON   = "{{route('NotificationsControllerGetLatestJson')}}";
		var NOTIFICATION_INDEX  = "{{route('NotificationsControllerGetIndex')}}";		

		$(function() {
			$('.datatables-simple').DataTable();
		})
	</script>

	<script src="{{asset('vendor/crudbooster/assets/js/main.js')}}"></script>

	<link rel='stylesheet' href='{{asset("vendor/crudbooster/assets/css/main.css")}}'/>



	<!--CI_CUSTOM_PLUGIN-->


	<!--PLUGIN CALENDARIO-->
	<script type="text/javascript" src="{{asset("js/ci_plugin/calendar/js/foundation-datepicker.js")}}"></script>
	<script type="text/javascript" src="{{asset("js/ci_plugin/calendar/js/locales/foundation-datepicker.vi.js")}}"></script>
	<link rel="stylesheet" href="{{asset("js/ci_plugin/calendar/css/foundation-datepicker.min.css")}}">

	<!--PLUGIN SLIM CROP IMAGE-->
	<link rel="stylesheet" href="{{asset("js/ci_plugin/slim_crop/slim/slim.min.css")}}">

	<!--PLUGIN GOOGLE MAP-->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCTuazTT4ftRrTOscHQYPabgJPLiBS9YXc
                     &sensor=true&region=ES&callback=initialize"></script>

	<script type="text/javascript" src="{{asset("js/ci_plugin/map/gmaps.js")}}"></script>

	<!--VALIDATOR-->
	<link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/theme-default.min.css"
		  rel="stylesheet" type="text/css" />

	<!--PLUGIN DROPZONE-->

	<script type="text/javascript" src="{{asset("js/ci_plugin/load-multiple-image/dropzone.js")}}"></script>


