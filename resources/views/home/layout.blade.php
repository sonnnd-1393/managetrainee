<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | My Profile</title>
		<meta name="description" content="User profile example page">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>
		<!--end::Web font -->

		<!--begin::Base Styles -->
		<link href="bower-components/managetrainee-bower/css/vendors.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="../../../assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link href="bower-components/managetrainee-bower/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--RTL version:<link href="../assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Base Styles -->
        <link rel="shortcut icon" href="../assets/demo/default/media/img/logo/favicon.ico" />
        
        @yield('style')
	</head>
	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		@yield('content')

		<!--begin::Base Scripts -->
		<script src="bower-components/managetrainee-bower/js/vendors.bundle.js" type="text/javascript"></script>
		<script src="bower-components/managetrainee-bower/js/scripts.bundle.js" type="text/javascript"></script>
		<!-- <script type="text/javascript">
			var ActionsDemo={init:function(){$(".summernote").summernote({height:250})}};jQuery(document).ready(function(){ActionsDemo.init()});
		</script> -->
		
		<script src="js/app.js" type="text/javascript"></script>
        <!--end::Base Scripts -->
        
        @yield('script')
	</body>

	<!-- end::Body -->
</html>
