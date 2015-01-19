<?php
$themename = "Under Construction Theme";
$shortname = "uct";

$options = array (


  array(    
    "name" => "<strong>Web Page Title</strong>",
    "desc" => "Enter your Page Title:",
    "id" => "uc_title",
    "default" => "Under Construction"),

  array(    
    "name" => "<strong>Your Logo Image</strong>",
    "desc" => "Enter your logo filename:",
    "id" => "uc_logo",
    "default" => "logo.png"),

  array( "name" => "Select Background Color:",  
    "desc" => "Select month",  
    "id" => "uc_bg_color",  
    "type" => "select",  
    "options" => array("blue", "blush", "cucumber" , "olive" , "purple" , "sea_green" , "sundance" , "sunglo" , "sunset"),  
    "std" => "blue"),


  array( "name" => "Select Progressbar Color:",  
    "desc" => "Select month",  
    "id" => "uc_pb_color",  
    "type" => "select",  
    "options" => array("blue", "blush", "cucumber" , "olive" , "purple" , "sea_green" , "sundance" , "sunglo" , "sunset"),  
    "std" => "cucumber"),  


  array(    
    "name" => "<strong>H1 Title</strong>",
    "desc" => "Enter your H1 Title:",
    "id" => "uc_h1_tag",
    "default" => "UNDER CONSTRUCTION"),

  array( 
    "name" => "Select year",  
    "desc" =>"<strong>Choose the date for the countdown:</strong>",
    "id" => "uc_l_year",  
    "type" => "select",  
    "options" => array("2010", "2011", "2012","2013","2014","2015"),  
    "std" => "2010"),  

  array( "name" => "Select Month",  
    "desc" => "Select month",  
    "id" => "uc_l_month",  
    "type" => "select",  
    "options" => array("1", "2", "3" , "4" , "5" , "6" , "7" , "8" , "9" , "10" , "11","12"),  
    "std" => "5"),  

  array( "name" => "Select day",  
    "id" => "uc_l_day",  
    "type" => "select",  
    "options" => array("1", "2", "3","4", "5", "6","7", "8", "9","10", "11", "12", "13","14", "15", "16","17", "18","19", "20", "21","22", "23","24", "25","26", "27", "28","29", "30", "31"),  
    "std" => "1"), 

  array( "name" => "Select hour",  
    "id" => "uc_l_hour",  
    "type" => "select",  
    "options" => array("1", "2", "3","4", "5", "6","7", "8", "9","10", "11", "12", "13","14", "15", "16","17", "18","19", "20", "21","22", "23","24"),  
    "std" => "9"), 

  array(    
     "name" => "<strong>Progress percentage</strong>",
     "desc" => "Enter the percentage:",
     "id" => "uc_progress_perc",
    	"type" => "select",  
	"options" => array( "5", "10", "15", "20", "25", "30" , "35" , "40" , "45", "50" , "55" , "60" , "65", "70" , "75" , "80" , "85", "90" , "95", "100"),  
	"std" => "60"), 

  array(    
    "name" => "<strong>Current Task</strong>",
    "desc" => "Enter the Progress Text:",
    "id" => "uc_progress_text",
    "default" => "We are currently working on our new design."),

  array(    
    "name" => "<strong>Twitter Account</strong>",
    "desc" => "Enter your Twitter Account:",
    "id" => "uc_twiter",
    "default" => "Lorem_ipsu"),

  array(    
    "name" => "<strong>Subscription Email Text</strong>",
    "desc" => "Use &lt;br/&gt; for new line",
    "id" => "uc_subscription_text",
    "default" => "Enter an email address and we will let you know<br/>when we get everything finished up."),

  array(    
    "name" => "<strong>Contact Text</strong>",
    "desc" => "Enter the Contact Text:",
    "id" => "uc_contact_text",
    "default" => "If you have a question, feel free to contact us."),

  array(    
    "name" => "<strong>Contact Phone Number</strong>",
    "desc" => "Enter your phone number:",
    "id" => "uc_contact_phone",
    "default" => "0011-9563-65353"),

  array(    
    "name" => "<strong>Contact Email</strong>",
    "desc" => "Enter your email:",
    "id" => "uc_contact_email",
    "default" => "your.email@yourwebsite.com"),


  array(    
    "name" => "<strong>RSS Url</strong>",
    "desc" => "Enter the link to your RSS with http:// or live blank to hide the icon:",
    "id" => "uc_rss_link",
    "default" => ""),

  array(    
    "name" => "<strong>Facebook Url</strong>",
    "desc" => "Enter the link to your Facebook profile  with http:// or live blank to hide the icon:",
    "id" => "uc_facebook_link",
    "default" => ""),

  array(    
    "name" => "<strong>Twitter Url</strong>",
    "desc" => "Enter the link to your Twitter profile  with http:// or live blank to hide the icon:",
    "id" => "uc_twitter_link",
    "default" => ""),

  array(    
    "name" => "<strong>Linkedin Url</strong>",
    "desc" => "Enter the link to your Linkedin profile with http:// or live blank to hide the icon:",
    "id" => "uc_linkedin_link",
    "default" => ""),


  array(    
    "name" => "<strong>Flickr Url</strong>",
    "desc" => "Enter the link to your Flickr profile with http:// or live blank to hide the icon:",
    "id" => "uc_flickr_link",
    "default" => ""),

  array(    
    "name" => "<strong>Lastfm Url</strong>",
    "desc" => "Enter the link to your Lastfm profile with http:// or live blank to hide the icon:",
    "id" => "uc_lastfm_link",
    "default" => ""),

  array(    
    "name" => "<strong>Digg Url</strong>",
    "desc" => "Enter the link to your Digg profile with http://  or live blank to hide the icon:",
    "id" => "uc_digg_link",
    "default" => ""),


  array(    
    "name" => "<strong>Myspace Url</strong>",
    "desc" => "Enter the link to your Myspace profile with http:// or live blank to hide the icon:",
    "id" => "uc_myspace_link",
    "default" => ""),


  array(    
    "name" => "<strong>Deviantart Url</strong>",
    "desc" => "Enter the link to your Deviantart profile with http:// or live blank to hide the icon:",
    "id" => "uc_deviantart_link",
    "default" => ""),


  array(
	 "id" => "google_analytics",
	"type" => "textarea",
	"options" => array(
	"rows" => "9",
	"cols" => "44") ),   
);

function suc_options() {
  global $options;

  if ('theme_save'== $_REQUEST['action'] ) {
  
    foreach ($options as $value) {
     if( !isset( $_REQUEST[ $value['id'] ] ) ) {  } else { update_option( $value['id'], stripslashes($_REQUEST[ $value['id']])); } }
     if(stristr($_SERVER['REQUEST_URI'],'&saved=true')) {
     $location = $_SERVER['REQUEST_URI'];
    } else {
     $location = $_SERVER['REQUEST_URI'] . "&saved=true";
    }
    header("Location:$location");
  	die;
    
  } else if('theme_reset' == $_REQUEST['action'] ) {
 
    foreach ($options as $value) {
     delete_option( $value['id'] );
     $location = $_SERVER['REQUEST_URI'] . "&reset=true";
    }
    
  	header("Location:$location");
  	die;
    
  }
  
    add_menu_page($themename." Settings", "Under Construction Theme Settings", 'edit_themes', basename(__FILE__), 'suc_admin');

}

function suc_admin() {
    global $options;
	?>
<?php theme_options_css(); ?>


<div class="wrap">
  <h2 class="alignleft">"Under Construction Theme" Settings</h2>
  <br clear="all" />


  <?php 
  	if ( $_REQUEST['saved'] ) {
  ?>
  		<div class="updated fade"><p><strong>Settings Saved</strong></p></div>
  <?php } ?>

<form method="post" id="myForm">
<div id="poststuff" style="clear:both;width:780px;">
 <div class="stuffbox">
  <h3>Page settings:</h3>
  <div class="inside">
    <table class="form-table" style="width: auto">
    <?php
     foreach ($options as $value) {
      switch ( $value['id'] ) {
	   
	      
	 case "uc_title": 
              $ta_options = $value['options'];?>

  	<tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>

        <?php break;
 	case "uc_logo": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text"  
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>


        <?php break;
	case "uc_bg_color": ?>
  	<tr>
	<th scope="row">  
        <?php echo $value['name']; ?></th> 
  	<td>     
	<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">  
	<?php foreach ($value['options'] as $option) { ?>  
        <option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>  
        </select>  
	</td>
   	</tr>

        <?php break;
	case "uc_pb_color": ?>
  	<tr>
	<th scope="row">  
        <?php echo $value['name']; ?></th> 
  	<td>     
	<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">  
	<?php foreach ($value['options'] as $option) { ?>  
        <option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>  
        </select>  
	</td>
   	</tr>

        <?php break;
 	case "uc_h1_tag": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>

        <?php break;
	case "uc_l_year": ?>
  	<tr>
	<th scope="row">  
        <?php echo $value['name']; ?></th> 
  	<td>     
	<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">  
	<?php foreach ($value['options'] as $option) { ?>  
        <option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>  
        </select>  
	</td>
   	</tr>

        <?php break;
	case "uc_l_month": ?>
  	<tr>
	<th scope="row">  
        <?php echo $value['name']; ?></th> 
  	<td>     
	<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">  
	<?php foreach ($value['options'] as $option) { ?>  
        <option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>  
        </select>  
	</td>
   	</tr>

        <?php break;
	case "uc_l_day": ?>
  	<tr>
	<th scope="row">  
        <?php echo $value['name']; ?></th> 
  	<td>     
	<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">  
	<?php foreach ($value['options'] as $option) { ?>  
        <option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>  
        </select>  
	</td>
   	</tr>


        <?php break;
	case "uc_l_hour": ?>  
  	<tr>
	<th scope="row">  
        <?php echo $value['name']; ?></th> 
  	<td>     
	<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">  
	<?php foreach ($value['options'] as $option) { ?>  
        <option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>  
        </select>  
	</td>
   	</tr>

        <?php break;
        case "uc_progress_perc": ?>
  	<tr>
	<th scope="row">  
        <?php echo $value['name']; ?></th> 
  	<td>     
	<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">  
	<?php foreach ($value['options'] as $option) { ?>  
        <option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>  
        </select>  
	</td>
   	</tr>

        <?php break;
	case "uc_progress_text": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text"  size="70" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>

        <?php break;
 	case "uc_twiter": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>

        <?php break;
 	case "uc_subscription_text": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text"  size="70" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>

        <?php break;
 	case "uc_subscription_email": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>

        <?php break;
 	case "uc_contact_text": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text" size="70" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>

        <?php break;
 	case "uc_contact_phone": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>

        <?php break;
 	case "uc_contact_email": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>



      <?php break;
	   
		}
	}
	?>
   </table>
  </div>
 </div>  
 </div>

 <div id="poststuff" style="clear:both;width:780px;">
 <div class="stuffbox">

  <h3>Social networks' icons settings:</h3>
  <div class="inside">
    <table class="form-table" style="width: auto">
    <?php
     foreach ($options as $value) {
      switch ( $value['id'] ) {

 	case "uc_rss_link": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>
        <?php break;
 	case "uc_facebook_link": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>
        <?php break;
 	case "uc_twitter_link": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>
        <?php break;
 	case "uc_linkedin_link": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>
        
	<?php break;
 	case "uc_flickr_link": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>
        
	<?php break;
 	case "uc_lastfm_link": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>

        <?php break;
 	case "uc_digg_link": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>

        <?php break;
 	case "uc_myspace_link": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>

        <?php break;
 	case "uc_deviantart_link": ?>
        <tr>
        <th scope="row"><?php echo $value['name']; ?><br /><?php echo $value['desc']; ?></th>
        <td>
         <input name="<?php echo $value['id']; ?>" 
         		id="<?php echo $value['id']; ?>" type="text" 
         		value="<?php get_option($value['id'])?print(get_option($value['id'])): print($value['default']) ?>" />
        </td>
        </tr>


      <?php break;
	   
		}
	}
	?>
   </table>
  </div>
 </div>  
 </div>

<div id="poststuff" class="metabox-holder">
<div class="stuffbox">
  <h3>Google analytics</h3>
			<div class="inside">
				
              <p>Enter your Google analytics code :<br />
				
                <?php
     foreach ($options as $value) {
      switch ( $value['id'] ) {
         case "google_analytics": 
              $ta_options = $value['options'];?>

		<tr>
			<th scope="row"><?php echo __($value['name']); ?><br /><?php echo $value['desc']; ?></th>
			<td><textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" cols="<?php echo $ta_options['cols']; ?>" rows="<?php echo $ta_options['rows']; ?>"><?php
				if( get_option($value['id']) != "") {
						echo __(stripslashes(get_option($value['id'])));
									}?></textarea><br /></td>
		</tr>


      <?php break;
                	}
	}
	?>
                
                </p>
            </div>
		</div>

</div>
<br style="clear:both" />
<input name="theme_save" type="submit" class="button-primary" value="Save changes"/>
<input type="hidden" name="action" value="theme_save"/>
</form>

<form method="post">
<input name="theme_reset" type="submit" class="button-primary" value="Reset" />
<input type="hidden" name="action" value="theme_reset"/>
</form>


</div>

<?php
}

add_action('admin_menu', 'suc_options');

function theme_options_css() {
echo <<<CSS

<style type="text/css">
	
	.metabox-holder { 
		width: 475px;  float: left;
		margin: 0; padding: 0 30px 0 0;
		
	}
	.metabox-holder .postbox .inside {
		padding: 0 10px;
	}
	.button-primary	{
		float:left;
		margin-right:10px;
	}
	.left_side	{
		float:left;
		width:475px;
		margin-right:30px;
	}
</style>

CSS;
}
?>
