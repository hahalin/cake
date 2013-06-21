<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <title></title>
	  <meta name="description" content="">
	  <meta name="viewport" content="width=device-width">

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.twitter.css" type="text/css" media="screen" />
		<!--
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/linkpreview/linkPreview.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/linkpreview/style.css" type="text/css" media="screen" />
		-->
		<script  src="<?php echo base_url() ?>assets/js/jquery-1.9.0.js"></script>
		<script  src="<?php echo base_url() ?>assets/js/linkpreview/linkPreview.js"></script>

		<script>
			$(document).ready(function(){
				$('.linkPreview').linkPreview();
			});
		</script>
		
		<!-- /website tour test -->
		
		<title>template</title>
		<!--[if IE 6]>
		<![endif]-->

	</head>
	<body>
	
		<div class="center">
			<div class="linkPreview">
				<div id="previewLoading"></div>
				<div style="float: left;">
					<textarea type="text" id="text" /> What's on your mind?</textarea>
					<div style="clear: both"></div>
				</div>
				<div id="preview">
					<div id="previewImages">
						<div id="previewImage"><img src='img/loader.gif' style='margin-left: 43%; margin-top: 39%;' ></img></div>
						<input type="hidden" id="photoNumber" value="0" />
					</div>
					<div id="previewContent">
						<div id="closePreview" title="Remove" ></div>
						<div id="previewTitle"></div>
						<div id="previewUrl"></div>
						<div id="previewDescription"></div>
						<div id="hiddenDescription"></div>
						<div id="previewButtons" >
							<div id='previewPreviousImg' class="buttonLeftDeactive" ></div><div id='previewNextImg' class="buttonRightDeactive"  ></div>  <div class="photoNumbers" ></div> <div class="chooseThumbnail">Choose a thumbnail</div>
						</div>
						<input type="checkbox" id="noThumb" class="noThumbCb" />
						<div class="nT"  ><span id="noThumbDiv" >No thumbnail</span></div>
					</div>
					<div style="clear: both"></div>
				</div>
				<div style="clear: both"></div>
				<div id="postPreview">
					<input class="postPreviewButton" type="submit" value="Post" />
					<div style="clear: both"></div>
				</div>
				<div class="previewPostedList"></div>
			</div>
		</div>
		
		
		
  		
  	</body>
</html>
