<?php get_header(); ?>
	<div id="wrapper">
		<div id="logo" align="center">
			<a href="<?php bloginfo('template_url');?>"><img src="<?php bloginfo('template_url');?>/img/<?php echo get_option('uc_logo');?>" alt="Logo" /></a>
		</div>
		<div id="box_top" align="center">
			<h1><?php echo get_option('uc_h1_tag');?></h1>
	 	</div>
		<div id="box_counter">
		</div>
		<div id="box_progress" align="center">
			<span class="progressBar" id="pb1"><?php echo get_option('uc_progress_perc');?>%</span>
			<p><?php echo get_option('uc_progress_text');?></p>
		</div>
		<div id="box_slider">
		    <div id="slidesContainer">
		      <div class="slide">
			<div id="twitter_news"></div>
		      </div>
		      <div class="slide">
			<div  id="newsletter" align="center">
				<p><?php echo get_option('uc_subscription_text');?></p>
				<form action="<?php bloginfo('template_url');?>/php/notify.php" method="post" name="form_newsletter" id="form_newsletter">
				<div id="input">
					<input name="email" id="email" value="" maxlength="85" class="email" type="text" />
					<div id="response"></div>
				</div>
				<div id="button">
					<input name="submit" id="submit" value="" class="submit" type="submit" />
				</div>                                                              
				</form>
			 </div>
		        </div>
			<div class="slide">
			     <div id="contacts" align="center">
				<p><?php echo get_option('uc_contact_text');?></p>
				<ul>
					<li>
						<div class="contact_type_e" align="right"><p>Email:</p></div>
						<div class="contact_info_e" align="left"><p><a href="mailto:<?php echo get_option('uc_contact_email');?>"><?php echo get_option('uc_contact_email');?></a></p></div>
					</li>
					<li>
						<div class="contact_type_p" align="right"><p>Phone:</p></div>
						<div class="contact_info_p" align="left"><p><?php echo get_option('uc_contact_phone');?></p></div>
					</li>
				</ul>
			     </div>
			</div>
                      </div>
		</div>
<?php get_footer(); ?>




