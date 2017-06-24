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

<link rel="stylesheet" type="text/css" href="media/webuploader/webuploader.css" />

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
								<h3>修改游戏</h3>
                                <form action="/games/do_edit" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal">

                                <div class="control-group">
                                    <label class="control-label">游戏名称<span class="required">*</span></label>
                                    <div class="controls">
                                        <input name="id" type="text" class="span6 m-wrap" style="display:none;" value="<?php echo $id; ?>" />
                                        <input name="gamename" type="text" class="span6 m-wrap" value="<?php echo $name; ?>" />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>

                                    <div class="control-group">
                                        <label class="control-label">游戏类型<span class="required">*</span></label>
                                        <div class="controls">
                                            <select name = "gametype" class="span6 m-wrap" data-placeholder="Choose a Category" tabindex="1">
                                                <option value="">Select...</option>
                                                <option value="1" <?php if($gametype == 1){ echo 'selected="selected"';} ?>>类型 1</option>
                                                <option value="2" <?php if($gametype == 2){ echo 'selected="selected"';} ?>>类型 2</option>
                                                <option value="3" <?php if($gametype == 3){ echo 'selected="selected"';} ?>>类型 5</option>
                                                <option value="4" <?php if($gametype == 4){ echo 'selected="selected"';} ?>>类型 4</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">游戏大小<span class="required">*</span></label>
                                        <div class="controls">
                                            <input name="gamesize" type="text" class="span6 m-wrap" value="<?php echo $size; ?>" />
                                            <span class="help-inline"></span>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">下载次数<span class="required">*</span></label>
                                        <div class="controls">
                                            <input name="downnum" type="text" class="span6 m-wrap" value="<?php echo $downnum; ?>" />
                                            <span class="help-inline"></span>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">游戏链接<span class="required">*</span></label>
                                        <div class="controls">
                                            <input name="url" type="text" class="span6 m-wrap" value="<?php echo $url; ?>" />
                                            <span class="help-inline"></span>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">游戏介绍<span class="required">*</span></label>
                                        <div class="controls">
                                            <textarea name="about" type="text" class="span6 m-wrap" value="<?php echo $about; ?>" ></textarea>
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

                                <!--<div class="control-group">
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
                                </div>-->

                                    <div class="control-group">
                                        <label class="control-label">轮播图1：<span class="required">*</span></label>
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
													<input name="lb1" type="file" class="default" />
													</span>
                                                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">轮播图2：<span class="required">*</span></label>
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
													<input name="lb2" type="file" class="default" />
													</span>
                                                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">轮播图3：<span class="required">*</span></label>
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
													<input name="lb3" type="file" class="default" />
													</span>
                                                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">轮播图4：<span class="required">*</span></label>
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
													<input name="lb4" type="file" class="default" />
													</span>
                                                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--<div class="control-group">
                                        <label class="control-label">轮播图<span class="required">*</span></label>
                                        <div class="controls">
                                            <div id="uploader-demo">
                                                <div id="fileList" class="uploader-list"></div>
                                                <div id="filePicker">选择图片</div>
                                                <div id="list"></div>
                                            </div>
                                        </div>
                                    </div>-->

                                    <div class="control-group">
                                        <label class="control-label">是否推荐<span class="required">*</span></label>
                                        <div class="controls">
                                            <label class="radio">
                                                <input type="radio" name="tj" value="1" <?php if($type == 1){ echo 'checked';} ?> />
                                                精品
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="tj" value="2" <?php if($type == 2){ echo 'checked';} ?> />
                                                人气
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="tj" value="3" <?php if($type == 3){ echo 'checked';} ?> />
                                                普通
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

    <script type="text/javascript" src="media/webuploader/webuploader.js"></script>
    <!-- END PAGE LEVEL STYLES -->
	<script>
		jQuery(document).ready(function() {   
		   // initiate layout and plugins
		   App.init();
		   FormValidation.init();
		});


        // 初始化Web Uploader
        var uploader = WebUploader.create({

            // 选完文件后，是否自动上传。
            auto: true,

            // swf文件路径
            swf: '/public/media/webuploader/Uploader.swf',

            // 文件接收服务端。
            server: '/fileup/',

            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#filePicker',

            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/*'
            }
        });

        // 当有文件添加进来的时候
        uploader.on( 'fileQueued', function( file ) {
            var $li = $(
                    '<div id="' + file.id + '" class="file-item thumbnail">' +
                    '<img>' +
                    '<input class="info" name="lb" value="'+file.name+'" style="display:none;" />' +
                    '</div>'
                ),
                $img = $li.find('img');


            // $list为容器jQuery实例
            $list = $('#list');
            $list.append( $li );

            // 创建缩略图
            // 如果为非图片文件，可以不用调用此方法。
            // thumbnailWidth x thumbnailHeight 为 100 x 100
            uploader.makeThumb( file, function( error, src ) {
                if ( error ) {
                    $img.replaceWith('<span>不能预览</span>');
                    return;
                }

                $img.attr( 'src', src );
            }, 100, 100 );
        });

        // 文件上传过程中创建进度条实时显示。
        uploader.on( 'uploadProgress', function( file, percentage ) {
            var $li = $( '#'+file.id ),
                $percent = $li.find('.progress span');

            // 避免重复创建
            if ( !$percent.length ) {
                $percent = $('<p class="progress"><span></span></p>')
                    .appendTo( $li )
                    .find('span');
            }

            $percent.css( 'width', percentage * 100 + '%' );
        });

        // 文件上传成功，给item添加成功class, 用样式标记上传成功。
        uploader.on( 'uploadSuccess', function( file ) {
            $( '#'+file.id ).addClass('upload-state-done');
        });

        // 文件上传失败，显示上传出错。
        uploader.on( 'uploadError', function( file ) {
            var $li = $( '#'+file.id ),
                $error = $li.find('div.error');

            // 避免重复创建
            if ( !$error.length ) {
                $error = $('<div class="error"></div>').appendTo( $li );
            }

            $error.text('上传失败');
        });

        // 完成上传完了，成功或者失败，先删除进度条。
        uploader.on( 'uploadComplete', function( file ) {
            $( '#'+file.id ).find('.progress').remove();
        });

	</script>
	<!-- END JAVASCRIPTS -->   
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>
<!-- END BODY -->
</html>