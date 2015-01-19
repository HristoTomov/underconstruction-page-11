<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo get_option('uc_title'); ?></title> <!-- *** Enter your web page title *** -->

<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/style.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css' />

<script type="text/javascript" src="<?php bloginfo("template_url");?>/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url");?>/js/jquery.countdown.min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url");?>/js/jquery.progressbar.min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url");?>/js/jquery.slider.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url");?>/js/jquery.validate.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url");?>/js/jquery.form.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url");?>/js/twitter-1.13.min.js"></script>

<!--[if IE 7]>
<style type="text/css">
#button {padding-top:1px;}
</style>
<![endif]-->
<!-- *** Ajax Form *** -->
<script type="text/javascript">
	$(document).ready(function() { 
	    var options = { 
		target:'#response'
	    }; 
	    $('#form_newsletter').submit(function() { 
		$(this).ajaxSubmit(options); 
		return false; 
	    }); 
});
</script>
<!-- *** Twitter Settings *** -->
<script type="text/javascript" charset="utf-8"> 
	getTwitters('twitter_news', { 
	id: '<?php echo get_option('uc_twiter'); ?>', // *** Enter your twitter account ***
	count: 1, 
	enableLinks: true, 
	clearContents: true,
 	template: '<div style="float:left;"><div id="twitter_text"><p><i>%text%</i></p></div><div id="twitter_meta"><p><i>%time% from %source%</i></p></div></div><div id="twitter_bird"><a href="http://twitter.com/%user_screen_name%/"><img style="width:133px;height:129px;" src="<?php bloginfo("template_url");?>/img/twitter.jpg" alt="Follow me!"/></a></div>'
});
</script>
<!-- ***  Countdown Settings *** -->
<script type="text/javascript"> 
$(function () {
	var liftoffTime = new Date(<?php echo get_option('uc_l_year'); ?>, <?php echo get_option('uc_l_month');?> - 1, <?php echo get_option('uc_l_day');?>, <?php echo get_option('uc_l_hour');?>, 00); //year, month - 1, day, hour, (min/s)
	$('#box_counter').countdown({until: liftoffTime});
});
</script>
<!-- *** Progressbar Settings *** -->
<script type="text/javascript"> 
	var progress_key = '';
	$(document).ready(function() {
	$("#pb1").progressBar({ boxImage:  '<?php bloginfo("template_url");?>/img/progressbar.png', barImage: '<?php bloginfo("template_url");?>/img/progress_<?php echo get_option('uc_pb_color');?>.png', showText: false, textFormat:'percentage',width :452,height :25 } );
});
</script>
<style type="text/css">
body { background: url("<?php bloginfo("template_url");?>/img/bg_<?php echo get_option('uc_bg_color');?>.jpg") repeat-x center top transparent;} #wrapper { background: url("<?php bloginfo("template_url");?>/img/wrap_<?php echo get_option('uc_bg_color');?>.jpg") no-repeat center top;}
</style>
</head>
<body>
