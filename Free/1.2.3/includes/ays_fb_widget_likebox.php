<?php
class ays_fb_widget_likebox extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'ays_fb_widget_likebox', 

// Widget name will appear in UI
__('AYS Facebook Likebox Widget', 'ays_fb_widget_likebox'), 

// Widget description
array( 'description' => __( 'The main advantage of this widget is to promote your fb page.', 'random_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
	$ays_fb_url = apply_filters( 'ays_ays_fb_url', $instance['ays_fb_url'] );
	$ays_width = apply_filters( 'ays_width', $instance['ays_width'] );
	$ays_height = apply_filters( 'ays_height', $instance['ays_height'] );
	$ays_page_lang = apply_filters('ays_page_lang', $instance['ays_page_lang']);
	$ays_timeline = apply_filters('ays_timeline', $instance['ays_timeline']);
	$ays_events = apply_filters('ays_events', $instance['ays_events']);
	$ays_messages = apply_filters('ays_messages', $instance['ays_messages']);
	$ays_data_tabs_arr = array();
	if($ays_timeline == "true"){
		$ays_data_tabs_arr[] = "timeline";
	}
	if($ays_events == "true"){
		$ays_data_tabs_arr[] = "events";
	}
	if($ays_messages == "true"){
		$ays_data_tabs_arr[] = "messages";
	}
	$ays_data_tabs = implode(",",$ays_data_tabs_arr);
	
	$ays_sm_head = apply_filters('ays_sm_head', $instance['ays_sm_head']);
	$ays_showFriend = apply_filters('ays_showFriend', $instance['ays_showFriend']);
	$ays_hide_cover = apply_filters('ays_hide_cover', $instance['ays_hide_cover']);
	$ays_widget_style = apply_filters('ays_widget_style',$instance['ays_widget_style']);
	if($ays_widget_style == "slide")
	echo "<style>
	#ays_nk_fb_wid{
		position: fixed;
		z-index: 9999;
		text-align: center;
		margin-top: 8px;
		bottom: 0px;
		right:3px;
		height: auto;
		overflow: hidden;
	}
	</style>";
	else{
		echo "<style>
			#ays_nk_fb_wid{
				height:auto;
				text-align: center;
				margin-top:8px;
			}		
		</style>";
	}
	?>
	
	<div id="fb-root"></div>
	<style>
		#ays_nk_fb_wid{
			width:<?php echo $ays_width."px"; ?> !important;
		}
	</style>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId      : '470384213171375', // App ID
				status     : true, // check login status
				cookie     : true, // enable cookies to allow the server to access the session
				xfbml      : true  // parse XFBML
			});
		};
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "https://connect.facebook.net/<?php echo $ays_page_lang; ?>/all.js&appId=470384213171375";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<script>
		var ays_totop_style = "<?php echo  $ays_widget_style;?>";
		var ays_to_top = "<?php echo $ays_height; ?>";
		var ays_top_count = 0;
		if(ays_totop_style == "slide"){
			var ays_interval = setInterval(toTop,10);
		}
		function toTop(){
			ays_top_count++;
			if(ays_top_count != ays_to_top){
				jQuery("#ays_nk_fb_wid").height(ays_top_count);
			}
			else{
				clearInterval(ays_interval);
			}
		}
	</script>
	<div id="ays_nk_fb_wid">
		<div class="fb-page" data-href="<?php echo $ays_fb_url; ?>" data-tabs="<?php echo $ays_data_tabs; ?>" data-small-header="<?php echo $ays_sm_head; ?>" data-adapt-container-width="true" data-hide-cover="<?php echo $ays_hide_cover; ?>" data-show-facepile="<?php echo $ays_showFriend; ?>" data-width="<?php echo $ays_width; ?>" data-height="<?php echo $ays_height; ?>">
			<div class="fb-xfbml-parse-ignore">
				<blockquote cite="<?php echo $ays_fb_url; ?>">
					<a href="<?php echo $ays_fb_url; ?>"></a>
				</blockquote>
			</div>
		</div>
	</div>
	
	<?php
	echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
	$ays_fb_url = ( isset( $instance[ 'ays_fb_url' ] ) ) ? $instance[ 'ays_fb_url' ] :  __( 'https://www.facebook.com/WordPress/', 'ays_fb_widget_likebox' );
	$ays_width = ( isset( $instance[ 'ays_width' ] ) ) ? $instance[ 'ays_width' ] :  __( '300', 'ays_fb_widget_likebox' );
	$ays_height = ( isset( $instance[ 'ays_height' ] ) ) ? $instance[ 'ays_height' ] :  __( '200', 'ays_fb_widget_likebox' );
	$ays_page_lang = ( isset( $instance[ 'ays_page_lang' ] ) ) ? $instance[ 'ays_page_lang' ] :  __( 'en_US', 'ays_fb_widget_likebox' );
	$ays_timeline = ( isset( $instance[ 'ays_timeline' ] ) ) ? $instance[ 'ays_timeline' ] :  __( '', 'ays_fb_widget_likebox' );
	$ays_events = ( isset( $instance[ 'ays_events' ] ) ) ? $instance[ 'ays_events' ] :  __( '', 'ays_fb_widget_likebox' );
	$ays_messages = ( isset( $instance[ 'ays_messages' ] ) ) ? $instance[ 'ays_messages' ] :  __( '', 'ays_fb_widget_likebox' );
	$ays_sm_head = ( isset( $instance[ 'ays_sm_head' ] ) ) ? $instance[ 'ays_sm_head' ] :  __( '', 'ays_fb_widget_likebox' );
	$ays_showFriend = ( isset( $instance[ 'ays_showFriend' ] ) ) ? $instance[ 'ays_showFriend' ] :  __( '', 'ays_fb_widget_likebox' );
	$ays_hide_cover = ( isset( $instance[ 'ays_hide_cover' ] ) ) ? $instance[ 'ays_hide_cover' ] :  __( '', 'ays_fb_widget_likebox' );
	$ays_widget_style = ( isset( $instance[ 'ays_widget_style' ] ) ) ? $instance[ 'ays_widget_style' ] :  __( '', 'ays_fb_widget_likebox' );
	/* Include our css for admin
	wp_enqueue_style( 'ays_widget.css',plugins_url( 'css/ays_widget.css', __FILE__ ) );
	// Include our custom jQuery file with WordPress Color Picker dependency
	wp_enqueue_script( 'jscolor', plugins_url( 'jscolor/jscolor.js', __FILE__ ), array( 'wp-color-picker' ), false, true ); */
	
	// Widget admin form
	wp_enqueue_script('jQuery');
	?>
	<style type="text/css">
		.ays_nk_table_label{
			width:100px;
		}
	</style>
	<table>
		<tr>
			<td class="ays_nk_table_label"><label for="<?php echo $this->get_field_id( 'ays_fb_url' ); ?>"><?php _e( 'FB URL:' ); ?></label> </td>
			<td><input class="ays_field" id="<?php echo $this->get_field_id( 'ays_fb_url' ); ?>" name="<?php echo $this->get_field_name( 'ays_fb_url' ); ?>" type="text" value="<?php echo esc_attr( $ays_fb_url ); ?>" /></td>
		</tr>
		<tr>
			<td class="ays_nk_table_label"><label for="<?php echo $this->get_field_id( 'ays_width' ); ?>"><?php _e( 'Width:' ); ?></label> </td>
			<td><input class="ays_field" id="<?php echo $this->get_field_id( 'ays_width' ); ?>" name="<?php echo $this->get_field_name( 'ays_width' ); ?>" type="text" value="<?php echo esc_attr( $ays_width ); ?>" /></td>
		</tr>
		<tr>
			<td class="ays_nk_table_label"><label for="<?php echo $this->get_field_id( 'ays_height' ); ?>"><?php _e( 'Height:' ); ?></label> </td>
			<td><input class="ays_field" id="<?php echo $this->get_field_id( 'ays_height' ); ?>" name="<?php echo $this->get_field_name( 'ays_height' ); ?>" type="text" value="<?php echo esc_attr( $ays_height ); ?>" /></td>
		</tr>
		<tr>
			<td class="ays_nk_table_label"><label for="<?php echo $this->get_field_id( 'ays_page_lang' ); ?>"><?php _e( 'Language:' ); ?></label> </td>
			<td>	
				<select class="ays_field" name="<?php echo $this->get_field_name( 'ays_page_lang' ); ?>" id="<?php echo $this->get_field_id( 'ays_page_lang' ); ?>">
				<?php
				 $ays_lang_arr=array("Afrikaans","Arabic","Azerbaijani","Belarusian","Bulgarian","Bengali","Bosnian","Catalan","Czech","Cebuano","Welsh","Danish","German","Greek","English (UK)","English (Pirate)","English (Upside Down)","English (US)","Esperanto","Spanish","Spanish","Estonian","Basque","Persian","Leet Speak","Finnish","Faroese","French(Canada)","French(France)","Frisian","Irish","Galician","Guarani","Hebrew","Hindi","Croatian","Hungarian","Armenian","Indonesian","Icelandic","Italian","Japanese","Javanese","Georgian","Khmer","Kannada","Korean","Kurdish","Latin","Lithuanian","Latvian","Macedonian","Malayalam","Malay","Norwegian(bokmal)","Nepali","Dutch","Norwegian(nynorsk)","Punjabi","Polish","Pashto","Portuguese(Brazil)","Portuguese(Portugal)","Romanian","Russian","Sinhala","Slovak","Slovenian","Albanian","Serbian","Swedish","Swahili","Tamil","Telugu","Thai","Filipino","Turkish","Ukrainian","Urdu","Vietnamese","Simplified Chinese (China)","Traditional Chinese (Hong Kong)","Traditional Chinese (Taiwan)");
				 $ays_lang_short_arr=array("af_ZA","ar_AR","az_AZ","be_BY","bg_BG","bn_IN","bs_BA","ca_ES","cs_CZ","cx_PH","cy_GB","da_DK","de_DE","el_GR","en_GB","en_PI","en_UD","en_US","eo_EO","es_ES","es_LA","et_EE","eu_ES","fa_IR","fb_LT","fi_FI","fo_FO","fr_CA","fr_FR","fy_NL","ga_IE","gl_ES","gn_PY","he_IL","hi_IN","hr_HR","hu_HU","hy_AM","id_ID","is_IS","it_IT","ja_JP","jv_ID","ka_GE","km_KH","kn_IN","ko_KR","ku_TR","la_VA","lt_LT","lv_LV","mk_MK","ml_IN","ms_MY","nb_NO","ne_NP","nl_NL","nn_NO","pa_IN","pl_PL","ps_AF","pt_BR","pt_PT","ro_RO","ru_RU","si_LK","sk_SK","sl_SI","sq_AL","sr_RS","sv_SE","sw_KE","ta_IN","te_IN","th_TH","tl_PH","tr_TR","uk_UA","ur_PK","vi_VN","zh_CN","zh_HK","zh_TW" );
				 foreach ($ays_lang_arr as $ays_key => $ays_language) {
					if($ays_page_lang == $ays_lang_short_arr[$ays_key]){
						$ays_lang_sel = "selected";
					}
					else{
						$ays_lang_sel = "";
					}
					echo '<option '.$ays_lang_sel.' value="'.$ays_lang_short_arr[$ays_key].'">'.$ays_language.'</option>';
				 }
				?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="ays_nk_table_label"><label>Data Tabs</label></td>
			<td>	
				<p><label for="<?php echo $this->get_field_id( 'ays_timeline' ); ?>"><?php _e( 'Timeline:' ); ?></label> 
				<input class="ays_field ays_check" id="<?php echo $this->get_field_id( 'ays_timeline' ); ?>" name="<?php echo $this->get_field_name( 'ays_timeline' ); ?>" type="checkbox" value="false" <?php if($ays_timeline=="true") echo "checked"; ?>/></p>
				<p><label for="<?php echo $this->get_field_id( 'ays_events' ); ?>"><?php _e( 'Events:' ); ?></label> 
				<input class="ays_field ays_check" id="<?php echo $this->get_field_id( 'ays_events' ); ?>" name="<?php echo $this->get_field_name( 'ays_events' ); ?>" type="checkbox" value="false" <?php if($ays_events=="true") echo "checked"; ?>/></p>
				<p><label for="<?php echo $this->get_field_id( 'ays_messages' ); ?>"><?php _e( 'Messages:' ); ?></label> 
				<input class="ays_field ays_check" id="<?php echo $this->get_field_id( 'ays_messages' ); ?>" name="<?php echo $this->get_field_name( 'ays_messages' ); ?>" type="checkbox" value="false" <?php if($ays_messages=="true") echo "checked"; ?>/></p>
			</td>
		</tr>
		<tr>
			<td class="ays_nk_table_label"><label>Data Style</label></td>
			<td>
				<p><label for="<?php echo $this->get_field_id( 'ays_sm_head' ); ?>"><?php _e( 'Use small Header:' ); ?></label> 
				<input class="ays_field ays_check" id="<?php echo $this->get_field_id( 'ays_sm_head' ); ?>" name="<?php echo $this->get_field_name( 'ays_sm_head' ); ?>" type="checkbox" value="false" <?php if($ays_sm_head=="true") echo "checked"; ?>/></p>
				<p><label for="<?php echo $this->get_field_id( 'ays_showFriend' ); ?>"><?php _e( 'Show Friend Faces:' ); ?></label> 
				<input class="ays_field ays_check" id="<?php echo $this->get_field_id( 'ays_showFriend' ); ?>" name="<?php echo $this->get_field_name( 'ays_showFriend' ); ?>" type="checkbox" value="false" <?php if($ays_showFriend=="true") echo "checked"; ?>/></p>
				<p><label for="<?php echo $this->get_field_id( 'ays_hide_cover' ); ?>"><?php _e( 'Hide cover photo:' ); ?></label> 
				<input class="ays_field ays_check" id="<?php echo $this->get_field_id( 'ays_hide_cover' ); ?>" name="<?php echo $this->get_field_name( 'ays_hide_cover' ); ?>" type="checkbox" value="false" <?php if($ays_hide_cover=="true") echo "checked"; ?>/></p>			
			</td>
		</tr>
		<tr>
			<td class="ays_nk_table_label"><label for="<?php echo $this->get_field_id( 'ays_widget_style' ); ?>"><?php _e( 'Widget view:' ); ?></label> </td>
			<td>
				<input class="ays_field" id="<?php echo $this->get_field_id( 'ays_widget_style' ); ?>" name="<?php echo $this->get_field_name( 'ays_widget_style' ); ?>" type="radio" value="slide" <?php if(esc_attr( $ays_widget_style )=="slide")echo "checked"; ?>/>Slide
				<input class="ays_field" id="<?php echo $this->get_field_id( 'ays_widget_style' ); ?>" name="<?php echo $this->get_field_name( 'ays_widget_style' ); ?>" type="radio" value="default" <?php if(esc_attr( $ays_widget_style )=="default")echo "checked"; ?>/>Default
			</td>			
		</tr>
	</table>
	<script>
		jQuery(document).ready(function(){
			jQuery(".ays_check").change(function(){
				if(jQuery(this).prop("checked")){
					jQuery(this).attr("value","true");
				}
				else{
					jQuery(this).attr("value","false");
				}
			});
		});
	</script>
	<?php 
}
	
// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['ays_fb_url'] = ( ! empty( $new_instance['ays_fb_url'] ) ) ? strip_tags( $new_instance['ays_fb_url'] ) : '';
		$instance['ays_width'] = ( ! empty( $new_instance['ays_width'] ) ) ? strip_tags( $new_instance['ays_width'] ) : '';
		$instance['ays_height'] = ( ! empty( $new_instance['ays_height'] ) ) ? strip_tags( $new_instance['ays_height'] ) : '';
		$instance['ays_page_lang'] = ( ! empty( $new_instance['ays_page_lang'] ) ) ? strip_tags( $new_instance['ays_page_lang'] ) : '';
		$instance['ays_timeline'] = ( ! empty( $new_instance['ays_timeline'] ) ) ? strip_tags( $new_instance['ays_timeline'] ) : '';
		$instance['ays_events'] = ( ! empty( $new_instance['ays_events'] ) ) ? strip_tags( $new_instance['ays_events'] ) : '';
		$instance['ays_messages'] = ( ! empty( $new_instance['ays_messages'] ) ) ? strip_tags( $new_instance['ays_messages'] ) : '';
		$instance['ays_sm_head'] = ( ! empty( $new_instance['ays_sm_head'] ) ) ? strip_tags( $new_instance['ays_sm_head'] ) : '';
		$instance['ays_showFriend'] = ( ! empty( $new_instance['ays_showFriend'] ) ) ? strip_tags( $new_instance['ays_showFriend'] ) : '';
		$instance['ays_hide_cover'] = ( ! empty( $new_instance['ays_hide_cover'] ) ) ? strip_tags( $new_instance['ays_hide_cover'] ) : '';
		$instance['ays_widget_style'] = ( ! empty( $new_instance['ays_widget_style'] ) ) ? strip_tags( $new_instance['ays_widget_style'] ) : '';
		return $instance;
	}
} // Class random ends here

// Register and load the widget
function ays_wpb_load_widget() {
	register_widget( 'ays_fb_widget_likebox' );
}
add_action( 'widgets_init', 'ays_wpb_load_widget' );
?>
