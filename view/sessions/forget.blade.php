<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>{{General::find(1)->company}} | Admin Panel Forget Password</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
{{ HTML::style('plugins/font-awesome/css/font-awesome.min.css')}}
{{ HTML::style('plugins/simple-line-icons/simple-line-icons.min.css')}}
{{ HTML::style('plugins/bootstrap/css/bootstrap.min.css')}}
{{ HTML::style('plugins/uniform/css/uniform.default.css')}}
{{ HTML::style('plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
{{ HTML::style('plugins/select2/select2.css')}}
{{ HTML::style('css/login-soft.css')}}
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
{{ HTML::style('css/components.css')}}
{{ HTML::style('css/plugins.css')}}
{{ HTML::style('css/layout.css')}}
{{ HTML::style('css/default.css')}}
{{ HTML::style('css/custom.css')}}
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="{{URL::to('img/'.General::find(1)->logo)}}" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="#">
	<img src="{{URL::to('img/'.General::find(1)->logo)}}" class="logo-default" width="300px" />
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->

		<div class="hide" id="message">
		</div>

		<h3 class="form-title">Forget Password ?</h3>
		<p>Enter your e-mail address below to reset your password.</p>
		
		<div class="form-group @if ($errors->has('email')) error @endif">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="email" id="inputEmail" name="email" autofocus="autofocus">
			</div>
		</div>
		<div class="form-actions">
			<a href="{{URL::to('admin')}}"><button type="button" id="back-btn" class="btn">
	        <i class="m-icon-swapleft"></i> Back</button></a> 
	        <button type="button" class="btn blue pull-right forgot">Submit <i class="m-icon-swapright m-icon-white"></i>
        </button>        
		</div>
	
	<!-- END LOGIN FORM -->
	<!-- BEGIN REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	  {{ date('Y') }} &copy; {{General::find(1)->company}} | Admin Panel
</div>
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
{{HTML::script('plugins/jquery-1.11.0.min.js')}}
{{HTML::script('plugins/jquery-migrate-1.2.1.min.js')}}
{{HTML::script('plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')}}
{{HTML::script('plugins/bootstrap/js/bootstrap.min.js')}}
{{HTML::script('plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}
{{HTML::script('plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}
{{HTML::script('plugins/jquery.blockui.min.js')}}
{{HTML::script('plugins/jquery.cokie.min.js')}}
{{HTML::script('plugins/uniform/jquery.uniform.min.js')}}
{{HTML::script('plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}
{{HTML::script('plugins/backstretch/jquery.backstretch.min.js')}}
{{HTML::script('plugins/select2/select2.min.js')}}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{HTML::script('scripts/metronic.js')}}
{{HTML::script('scripts/layout.js')}}
{{HTML::script('scripts/quick-sidebar.js')}}
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
       // init background slide images
	       $.backstretch([
	        "../../img/bg/1.jpg",
            "../../img/bg/2.jpg",
            "../../img/bg/3.jpg",
            "../../img/bg/4.jpg"
	        ], {
	          fade: 1000,
	          duration: 8000
	    }
	    );
});
</script>
 <script type="text/javascript">
    $(function(){
      $('.forgot').click(function(){
        $.post('recover_password',{email : $('#inputEmail').val()},function(data){
          $('#message').html('<strong>'+data+' </strong>').fadeIn('slow');
          $('#message').addClass('alert alert-success show');
        });

      });
    });
  </script>
<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->
</html>