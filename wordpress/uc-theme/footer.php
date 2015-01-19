		<div  id="box_social">
			<ul>
				<?php $uc_rss_link = get_option('uc_rss_link'); ?>
				<?php if (!empty($uc_rss_link)) { ?>
				<li><a id="rss" href="<?php echo get_option('uc_rss_link');?>"><span>rss</span></a></li>
			        <?php } ?>
				<?php $uc_facebook_link = get_option('uc_facebook_link'); ?>
				<?php if (!empty($uc_facebook_link)) { ?>
				<li><a id="facebook" href="<?php echo get_option('uc_facebook_link');?>"><span>facebook</span></a></li>
				<?php } ?>
				<?php $uc_twitter_link = get_option('uc_twitter_link'); ?>
				<?php if (!empty($uc_twitter_link)) { ?>
				<li><a id="twitter" href="<?php echo get_option('uc_twitter_link');?>"><span>twitter</span></a></li>
				<?php } ?>
				<?php $uc_linkedin_link = get_option('uc_linkedin_link'); ?>
				<?php if (!empty($uc_linkedin_link)) { ?>
				<li><a id="linkedin" href="<?php echo get_option('uc_linkedin_link');?>"><span>linkedin</span></a></li>
				<?php } ?>
				<?php $uc_flickr_link = get_option('uc_flickr_link'); ?>
				<?php if (!empty($uc_flickr_link)) { ?>
				<li><a id="flickr" href="<?php echo get_option('uc_flickr_link');?>"><span>flickr</span></a></li>
				<?php } ?>
				<?php $uc_lastfm_link = get_option('uc_lastfm_link'); ?>
				<?php if (!empty($uc_lastfm_link)) { ?>
				<li><a id="lastfm" href="<?php echo get_option('uc_lastfm_link');?>"><span>lastfm</span></a></li>
				<?php } ?>
				<?php $uc_digg_link = get_option('uc_digg_link'); ?>
				<?php if (!empty($uc_digg_link)) { ?>
				<li><a id="digg" href="<?php echo get_option('uc_digg_link');?>"><span>digg</span></a></li>
				<?php } ?>
				<?php $uc_myspace_link = get_option('uc_myspace_link'); ?>
				<?php if (!empty($uc_myspace_link)) { ?>
				<li><a id="myspace" href="<?php echo get_option('uc_myspace_link');?>"><span>myspace</span></a></li>
				<?php } ?>
				<?php $uc_deviantart_link = get_option('uc_deviantart_link'); ?>
				<?php if (!empty($uc_deviantart_link)) { ?>		
				<li><a id="devart" href="<?php echo get_option('uc_deviantart_link');?>"><span>devart</span></a></li>
			        <?php } ?>			
			</ul>
		</div>
		<div id="box_bottom"></div>
	</div>
<?php echo get_option('google_analytics'); ?>
</body>
</html>
