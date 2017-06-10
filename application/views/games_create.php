<?php include("header.php")?>
<!-- BEGIN BODY -->

<link rel="stylesheet" type="text/css" href="media/css/bootstrap-fileupload.css" />

<link rel="stylesheet" type="text/css" href="media/css/jquery.gritter.css" />

<link rel="stylesheet" type="text/css" href="media/css/chosen.css" />

<link rel="stylesheet" type="text/css" href="media/css/select2_metro.css" />

<link rel="stylesheet" type="text/css" href="media/css/jquery.tagsinput.css" />

<link rel="stylesheet" type="text/css" href="media/css/clockface.css" />

<link rel="stylesheet" type="text/css" href="media/css/bootstrap-wysihtml5.css" />

<link rel="stylesheet" type="text/css" href="media/css/datepicker.css" />

<link rel="stylesheet" type="text/css" href="media/css/timepicker.css" />

<link rel="stylesheet" type="text/css" href="media/css/colorpicker.css" />

<link rel="stylesheet" type="text/css" href="media/css/bootstrap-toggle-buttons.css" />

<link rel="stylesheet" type="text/css" href="media/css/daterangepicker.css" />

<link rel="stylesheet" type="text/css" href="media/css/datetimepicker.css" />

<link rel="stylesheet" type="text/css" href="media/css/multi-select-metro.css" />

<link href="media/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>

<body class="page-header-fixed">
	<!-- BEGIN HEADER -->
	<?php include('top.php') ?>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<?php include('left.php') ?>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->  
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->   
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER -->
						<div class="color-panel hidden-phone">
							<div class="color-mode-icons icon-color"></div>
							<div class="color-mode-icons icon-color-close"></div>
							<div class="color-mode">
								<p>THEME COLOR</p>
								<ul class="inline">
									<li class="color-black current color-default" data-style="default"></li>
									<li class="color-blue" data-style="blue"></li>
									<li class="color-brown" data-style="brown"></li>
									<li class="color-purple" data-style="purple"></li>
									<li class="color-grey" data-style="grey"></li>
									<li class="color-white color-light" data-style="light"></li>
								</ul>
								<label>
									<span>Layout</span>
									<select class="layout-option m-wrap small">
										<option value="fluid" selected>Fluid</option>
										<option value="boxed">Boxed</option>
									</select>
								</label>
								<label>
									<span>Header</span>
									<select class="header-option m-wrap small">
										<option value="fixed" selected>Fixed</option>
										<option value="default">Default</option>
									</select>
								</label>
								<label>
									<span>Sidebar</span>
									<select class="sidebar-option m-wrap small">
										<option value="fixed">Fixed</option>
										<option value="default" selected>Default</option>
									</select>
								</label>
								<label>
									<span>Footer</span>
									<select class="footer-option m-wrap small">
										<option value="fixed">Fixed</option>
										<option value="default" selected>Default</option>
									</select>
								</label>
							</div>
						</div>
						<!-- END BEGIN STYLE CUSTOMIZER -->     
						<h3 class="page-title">
							Form Validation
							 <small>form validation states</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<span class="icon-angle-right"></span>
							</li>
							<li>
								<a href="#">Form Stuff</a>
								<span class="icon-angle-right"></span>
							</li>
							<li><a href="#">Form Validation</a></li>
						</ul>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box green">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Advance Validation</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<h3>创建游戏</h3>
                                <form action="/games/do_create" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal">

                                <div class="control-group">
                                    <label class="control-label">游戏名称<span class="required">*</span></label>
                                    <div class="controls">
                                        <input name="gamename" type="text" class="span6 m-wrap" />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>

                                    <div class="control-group">
                                        <label class="control-label">游戏类型<span class="required">*</span></label>
                                        <div class="controls">
                                            <select name = "gametype" class="span6 m-wrap" data-placeholder="Choose a Category" tabindex="1">
                                                <option value="">Select...</option>
                                                <option value="1">类型 1</option>
                                                <option value="2">类型 2</option>
                                                <option value="3">类型 5</option>
                                                <option value="4">类型 4</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">游戏大小<span class="required">*</span></label>
                                        <div class="controls">
                                            <input name="gamesize" type="text" class="span6 m-wrap" />
                                            <span class="help-inline"></span>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">下载次数<span class="required">*</span></label>
                                        <div class="controls">
                                            <input name="downnum" type="text" class="span6 m-wrap" />
                                            <span class="help-inline"></span>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">游戏logo<span class="required">*</span></label>
                                        <div class="controls">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="input-append">
                                                    <div class="uneditable-input">
                                                        <i class="icon-file fileupload-exists"></i>
                                                        <span class="fileupload-preview"></span>
                                                    </div>
                                                    <span class="btn btn-file">
													<span class="fileupload-new">Select file</span>
													<span class="fileupload-exists">Change</span>
													<input name="logo" type="file" class="default" />
													</span>
                                                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="control-group">
                                    <label class="control-label">游戏图片<span class="required">*</span></label>
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="input-append">
                                                <div class="uneditable-input">
                                                    <i class="icon-file fileupload-exists"></i>
                                                    <span class="fileupload-preview"></span>
                                                    </div>
                                                    <span class="btn btn-file">
													<span class="fileupload-new">Select file</span>
													<span class="fileupload-exists">Change</span>
													<input name="gamepic" type="file" class="default" />
													</span>
                                                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                    <div class="control-group">
                                        <label class="control-label">是否推荐<span class="required">*</span></label>
                                        <div class="controls">
                                            <label class="radio">
                                                <input type="radio" name="tj" value="tjyes" checked />
                                                推荐
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="tj" value="tjno"  />
                                                不推荐
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-actions">

                                        <button type="submit" class="btn blue">Submit</button>

                                        <button type="button" class="btn">Cancel</button>

                                    </div>

                                </form>
                                </div>
								<!-- END FORM-->
							</div>
						</div>
						<!-- END VALIDATION STATES-->
					</div>
				</div>
				<!-- END PAGE CONTENT-->         
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->  
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			2013 &copy; Metronic by keenthemes.
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<script src="media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="media/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="media/js/excanvas.min.js"></script>
	<script src="media/js/respond.min.js"></script>  
	<![endif]-->   
	<script src="media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="media/js/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="media/js/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="media/js/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="media/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="media/js/additional-methods.min.js"></script>
	<script type="text/javascript" src="media/js/select2.min.js"></script>
	<script type="text/javascript" src="media/js/chosen.jquery.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<script src="media/js/app.js"></script>
	<script src="media/js/form-validation.js"></script> 
	<!-- END PAGE LEVEL STYLES -->    
	<script>
		jQuery(document).ready(function() {   
		   // initiate layout and plugins
		   App.init();
		   FormValidation.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->   
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>
<!-- END BODY -->
</html>