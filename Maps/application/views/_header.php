<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
		<title><?php echo $_title ?></title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
		<!--Stylesheets-->
		<link href=<?php echo URL::base()."/assets/css/reset.css" ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo URL::base()."/assets/css/main.css" ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo URL::base()."/assets/css/typography.css" ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo URL::base()."/assets/css/tipsy.css" ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo URL::base()."/scripts/cl_editor/jquery.cleditor.css" ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo URL::base()."/scripts/uploadify/uploadify.css" ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo URL::base()."/assets/css/jquery.ui.all.css" ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo URL::base()."/assets/css/fullcalendar.css" ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo URL::base()."/assets/css/bootstrap.css" ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo URL::base()."/scripts/jq_tables/demo_table_jui.css" ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo URL::base()."/scripts/fancybox/jquery.fancybox-1.3.4.css" ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo URL::base()."/assets/css/highlight.css" ?> rel="stylesheet" type="text/css" />
		<!--[if lt IE 9]>
		    <script src="js/html5.js"></script>
		    <![endif]-->
		<!--Javascript-->
		<script src=<?php echo URL::base()."/scripts/jquery.min.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/excanvas.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/jquery.flot.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/jquery.flot.stack.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/jquery.flot.pie.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/jquery.quicksand.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/jquery.easing.1.3.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/jquery.tipsy.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/cl_editor/jquery.cleditor.min.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/uploadify/swfobject.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/uploadify/jquery.uploadify.v2.1.4.min.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/jquery.autogrowtextarea.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/form_elements.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/jquery.ui.core.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/jquery.ui.position.js" ?> type="text/javascript"></script><!-- JLB -->
		<script src=<?php echo URL::base()."/scripts/jquery.ui.widget.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/jquery.ui.mouse.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/jquery.ui.slider.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/jquery.ui.progressbar.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/jquery.ui.datepicker.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/jquery.ui.tabs.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/jquery.ui.autocomplete.js" ?> type="text/javascript"></script><!-- JLB -->
		<script src=<?php echo URL::base()."/scripts/fullcalendar.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/gcal.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/bootstrap-modal.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/fancybox/jquery.fancybox-1.3.4.pack.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/fancybox/jquery.mousewheel-3.0.4.pack.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/highlight.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/jq_tables/jquery.dataTables.js" ?> type="text/javascript"></script>
		<script src=<?php echo URL::base()."/scripts/main.js" ?> type="text/javascript"></script>
		
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDJfxgZU6cIXf7VsYlZhva0RgrIWJFfneM&sensor=false" type="text/javascript"></script>
	</head>
	
	<body>