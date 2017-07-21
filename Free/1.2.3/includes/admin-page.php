<?php

/**********************************************************
*ADMIN PANEL
***********************************************************/
function ays_nk_options_page(){
    global $ays_nk_options;
    ob_start();
    ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <div class="wrap">
	<form method="POST" action="options.php" id="#myForm">
	<style>
		@font-face {
		  font-family: 'Passero One';
		  font-style: normal;
		  font-weight: 400;
		  src: local('Passero One'), local('PasseroOne-Regular'), url(http://fonts.gstatic.com/s/passeroone/v8/5eWwFFxCBNQER-1nDlru9SYE0-AqJ3nfInTTiDXDjU4.woff2) format('woff2');
		  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
		  font-family: 'Passero One';
		  font-style: normal;
		  font-weight: 400;
		  src: local('Passero One'), local('PasseroOne-Regular'), url(http://fonts.gstatic.com/s/passeroone/v8/5eWwFFxCBNQER-1nDlru9Y4P5ICox8Kq3LLUNMylGO4.woff2) format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
		}
		.ays_help_text{
			text-decoration: none;
			font: normal 18px/normal "Passero One", Helvetica, sans-serif;
			color:#FF5C4F;
		}
		.ays_banner{
			background:url(    <?php echo plugins_url().'/ays-facebook-popup-likebox/includes/images/banner.jpg'; ?>);
			display: flex;

		}
		.ays_col{
			width: 40%;
			height: 100px;
			padding:15px;
		}
		.ays_logo{
			width:20%;
		}
		.ays_help{
			display: flex;
			width: 30%;
			font-family: cursive ;
		}
		.ays_goto{
			width: 50%;
		}
		.ays_um{
			padding: 10px;
		}
		.ays_user_text{
			text-align: justify;
			margin-top: 10px;
			color: white;
		}
		.ays_go_pro{
			-webkit-box-sizing: content-box;
			-moz-box-sizing: content-box;
			box-sizing: content-box;
			cursor: pointer;
			border: none;
			font: normal 72px/normal "Passero One", Helvetica, sans-serif;
			color: rgba(255,255,255,1);
			text-align: center;
			-o-text-overflow: clip;
			text-overflow: clip;
			text-shadow: 0 1px 0 rgb(204,204,204) , 0 2px 0 rgb(201,201,201) , 0 3px 0 rgb(187,187,187) , 0 4px 0 rgb(185,185,185) , 0 5px 0 rgb(170,170,170) , 0 6px 1px rgba(0,0,0,0.0980392) , 0 0 5px rgba(0,0,0,0.0980392) , 0 1px 3px rgba(0,0,0,0.298039) , 0 3px 5px rgba(0,0,0,0.2) , 0 5px 10px rgba(0,0,0,0.247059) , 0 10px 10px rgba(0,0,0,0.2) , 0 20px 20px rgba(0,0,0,0.14902) ;
			-webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
			-moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
			-o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
			transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
		}
		.ays_go_pro:hover {
			color: rgba(255, 92, 79, 1);
			text-shadow: 0 1px 0 rgba(255,255,255,1) , 0 2px 0 rgba(255,255,255,1) , 0 3px 0 rgba(255,255,255,1) , 0 4px 0 rgba(255,255,255,1) , 0 5px 0 rgba(255,255,255,1) , 0 6px 1px rgba(0,0,0,0.0980392) , 0 0 5px rgba(0,0,0,0.0980392) , 0 1px 3px rgba(0,0,0,0.298039) , 0 3px 5px rgba(0,0,0,0.2) , 0 -5px 10px rgba(0,0,0,0.247059) , 0 -7px 10px rgba(0,0,0,0.2) , 0 -15px 20px rgba(0,0,0,0.14902) ;
			-webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
			-moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
			-o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
			transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
		}
		.ays_goto{
			text-align: center;
		}
	</style>
	<div class="ays_banner">
		<div class="ays_logo ays_col">
			<img src="<?php echo plugins_url().'/ays-facebook-popup-likebox/includes/images/Logo.png'; ?>" width="150">
		</div>
		<div class="ays_goto ays_col">
			<a href="http://ays-pro.com/index.php/wordpress/facebook-popup-likebox" class="ays_go_pro animated" id="ays_anim">Get The Pro</a>
		</div>
		<div class="ays_help ays_col">
			<div class="ays_user_text">
				If you have any difficulties please read our <a class="ays_help_text" href="http://ays-pro.com/index.php/wordpress-ays-facebook-popup-likebox-user-manual">USER MANUAL</a> or you can feel free to contact us <a class="ays_help_text" href="mailto:info@arcleaning.am" title="">info@ays-pro.com</a>
			</div>
			<div class="ays_um">
				<img src="<?php echo plugins_url().'/ays-facebook-popup-likebox/includes/images/um.png';?>" width="70">
			</div>
		</div>
	</div>
        <h2 class="ays_nk_head">AYS Facebook Popup Likebox</h2>
		<div class="tabs">
			<ul class="tab-liays_nks">
				<li class="active"><a href="#tab1">General</a></li>
				<li><a href="#tab2">Styles</a></li>
			</ul>

		<div class="tab-content">
			<div id="tab1" class="tab active">
				<p>General</p>


					<?php settings_fields('ays_nk_settings_group'); ?>

					<h4 class="ays_nk_inf">FB information</h4>
					<table align="center" cellpadding="20">
						<tr>
							<td class="ays_nk_table_cell">
								<label class="description" for="ays_nk_settings[fb_url]"><?php _e('Facebook page url','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>The URL of the facebook page for the likebox.</span></label>
							</td>
							<td>
								<input id="ays_nk_settings[fb_url]" class="ays_nk_res" name="ays_nk_settings[fb_url]" type="text" value="<?php echo $ays_nk_options['fb_url'];?>" />
							</td>
						</tr>
						<tr>
							<td>
								<label class="description">Showing Effect<span class="desc"><b class="ays_top_arrow"></b>Effect for displaying likebox. If disabled likebox will appear with default style.</span></label>
							</td>
							<td>
								<select name="ays_nk_settings[showEffect]" id="ays_nk_settings[showEffect]">
									<option value="" <?php if($ays_nk_options['showEffect'] == "") echo "selected"; ?> >Default</option>
									<option value="fadeIn" <?php if($ays_nk_options['showEffect'] == "fadeIn") echo "selected"; ?> >Fade</option>
									<option value="bounceIn" <?php if($ays_nk_options['showEffect'] == "bounceIn") echo "selected"; ?> >BounceIn</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label class="description">Hiding Effect<span class="desc"><b class="ays_top_arrow"></b>Effect for hiding likebox. If disabled likebox will disappear with default style.</span></label>
							</td>
							<td>
								<select name="ays_nk_settings[hideEffect]" id="ays_nk_settings[hideEffect]">
									<option value="" <?php if($ays_nk_options['hideEffect'] == "") echo "selected"; ?> >Default</option>
									<option value="fadeOut" <?php if($ays_nk_options['hideEffect'] == "fadeOut") echo "selected"; ?> >Fade</option>
									<option value="bounceOut" <?php if($ays_nk_options['hideEffect'] == "bounceOut") echo "selected"; ?> >BounceOut</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="ays_nk_table_cell">
								<label class="description" for="ays_nk_settings[showOn]"><?php _e('Show on','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>Choose the amount of information from the promoted facebook page you want to be shown
                          on the likebox.</span></label>
							</td>
							<td>
								<input id="ays_nk_settings[ays_nk_fb_timeL]" class="ays_nk_res" name="ays_nk_settings[ays_nk_fb_timeL]" type="checkbox" value="tl" <?php echo checked('tl', $ays_nk_options['ays_nk_settings[ays_nk_fb_timeL]']);?><?php if($ays_nk_options['ays_nk_fb_timeL'] == "tl") echo "checked"; ?>/>
								<label for="ays_nk_settings[ays_nk_fb_timeL]"> Timeline</label>

								<input id="ays_nk_settings[ays_nk_fb_evS]" class="ays_nk_res" name="ays_nk_settings[ays_nk_fb_evS]" type="checkbox" value="evS" <?php checked('evS', $ays_nk_options['ays_nk_settings[ays_nk_fb_evS]']);?> <?php if($ays_nk_options['ays_nk_fb_evS'] == "evS") echo "checked"?>  />
								<label for="ays_nk_settings[ays_nk_fb_evS]"> Events</label>

								<input id="ays_nk_settings[ays_nk_fb_mS]" class="ays_nk_res" name="ays_nk_settings[ays_nk_fb_mS]" type="checkbox" value="mS" <?php echo checked('mS', $ays_nk_options['ays_nk_settings[ays_nk_fb_mS]']);?><?php if($ays_nk_options['ays_nk_fb_mS'] == "mS") echo "checked"; ?>/>
								<label for="ays_nk_settings[ays_nk_fb_mS]"> Messages</label>
							</td>
						</tr>
                                                <tr>
							<td class="ays_nk_table_cell">
								<label class="description" for="ays_nk_settings[ays_nk_fb_bounce]"><?php _e('Enable swing effect','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>When likebox fully appeared, modal window will be swinged.Go To <a target="_blank" href="http://ays-pro.com/index.php/wordpress/facebook-popup-likebox">Pro Version</a> and get more than 77 effects.</span></label>
							</td>
							<td>
								<input id="ays_nk_settings[ays_nk_fb_bounce]" class="ays_nk_res" name="ays_nk_settings[ays_nk_fb_bounce]" type="checkbox" value="bounce animated" <?php echo checked('bounce animated', $ays_nk_options['ays_nk_settings[ays_nk_fb_bounce]']);?><?php if($ays_nk_options['ays_nk_fb_bounce'] == "bounce animated") echo "checked"; ?>/>Swing
								
                                                        </td>
                                                </tr>
						<tr>
							<td class="ays_nk_table_cell">
								<label class="description" for="ays_nk_settings[ays_nk_fb_chgs]"><?php _e('Use in FB plugin','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>Customize the Facebook Likebox's appearance. If you choose “small header”, then it will display the small facebook header at the top of the likebox. If you choose “hide cover photos”, then it will not display the cover photos from the page’s wall. And if you choose the third variant, i.e. “show friends’ faces”, then it will display profile photos in the Likebox.</span></label>
							</td>
							<td>
								<input id="ays_nk_settings[ays_nk_fb_chgs1]" class="ays_nk_res" name="ays_nk_settings[ays_nk_fb_chgs1]" type="checkbox" value="sm" <?php echo checked('sm', $ays_nk_options['ays_nk_settings[ays_nk_fb_chgs1]']);?><?php if($ays_nk_options['ays_nk_fb_chgs1'] == "sm") echo "checked"; ?>/>
								<label for="ays_nk_settings[ays_nk_fb_chgs1]">Small header</label>

								<input id="ays_nk_settings[ays_nk_fb_chgs2]" class="ays_nk_res" name="ays_nk_settings[ays_nk_fb_chgs2]" type="checkbox" value="hcf" <?php checked('hcf', $ays_nk_options['ays_nk_settings[ays_nk_fb_chgs2]']);?> <?php if($ays_nk_options['ays_nk_fb_chgs2'] == "hcf") echo "checked"?>  />
								<label for="ays_nk_settings[ays_nk_fb_chgs2]">Hide Cover Photoes</label>

								<input id="ays_nk_settings[ays_nk_fb_chgs3]" class="ays_nk_res" name="ays_nk_settings[ays_nk_fb_chgs3]" type="checkbox" value="sff" <?php echo checked('sff', $ays_nk_options['ays_nk_settings[ays_nk_fb_chgs3]']);?><?php if($ays_nk_options['ays_nk_fb_chgs3'] == "sff") echo "checked"; ?>/>
								<label for="ays_nk_settings[ays_nk_fb_chgs3]">Show Friend Faces</label>

							</td>
						</tr>
						<tr>
							<td class="ays_nk_table_cell">
								<label class="description" for="ays_nk_settings[lang]"><?php _e('Language','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>Choose the language that the likebox appears in.</span></label>
							</td>
							<td>
                                <?php
                         $ays_lang_arr=array("Afrikaans","Arabic","Azerbaijani","Belarusian","Bulgarian","Bengali","Bosnian","Catalan","Czech","Cebuano","Welsh","Danish","German","Greek","English (UK)","English (Pirate)","English (Upside Down)","English (US)","Esperanto","Spanish","Spanish","Estonian","Basque","Persian","Leet Speak","Finnish","Faroese","French(Canada)","French(France)","Frisian","Irish","Galician","Guarani","Hebrew","Hindi","Croatian","Hungarian","Armenian","Indonesian","Icelandic","Italian","Japanese","Javanese","Georgian","Khmer","Kannada","Korean","Kurdish","Latin","Lithuanian","Latvian","Macedonian","Malayalam","Malay","Norwegian(bokmal)","Nepali","Dutch","Norwegian(nynorsk)","Punjabi","Polish","Pashto","Portuguese(Brazil)","Portuguese(Portugal)","Romanian","Russian","Sinhala","Slovak","Slovenian","Albanian","Serbian","Swedish","Swahili","Tamil","Telugu","Thai","Filipino","Turkish","Ukrainian","Urdu","Vietnamese","Simplified Chinese (China)","Traditional Chinese (Hong Kong)","Traditional Chinese (Taiwan)");
                         $ays_lang_short_arr=array("af_ZA","ar_AR","az_AZ","be_BY","bg_BG","bn_IN","bs_BA","ca_ES","cs_CZ","cx_PH","cy_GB","da_DK","de_DE","el_GR","en_GB","en_PI","en_UD","en_US","eo_EO","es_ES","es_LA","et_EE","eu_ES","fa_IR","fb_LT","fi_FI","fo_FO","fr_CA","fr_FR","fy_NL","ga_IE","gl_ES","gn_PY","he_IL","hi_IN","hr_HR","hu_HU","hy_AM","id_ID","is_IS","it_IT","ja_JP","jv_ID","ka_GE","km_KH","kn_IN","ko_KR","ku_TR","la_VA","lt_LT","lv_LV","mk_MK","ml_IN","ms_MY","nb_NO","ne_NP","nl_NL","nn_NO","pa_IN","pl_PL","ps_AF","pt_BR","pt_PT","ro_RO","ru_RU","si_LK","sk_SK","sl_SI","sq_AL","sr_RS","sv_SE","sw_KE","ta_IN","te_IN","th_TH","tl_PH","tr_TR","uk_UA","ur_PK","vi_VN","zh_CN","zh_HK","zh_TW" );
                                ?>
                                <select id="ays_nk_settings[lang]" class="ays_nk_res" name="ays_nk_settings[lang]">
                                    <option>Select Language</option>
                                    <?php
                                        for($ost = 0; $ost<count($ays_lang_arr); $ost++){
                                            if($ays_nk_options['lang'] == $ays_lang_short_arr[$ost]){
                                                echo '<option value="'.$ays_lang_short_arr[$ost].'" selected>'.$ays_lang_arr[$ost].'</option>';
                                            }
                                            else{
                                                echo '<option value="'.$ays_lang_short_arr[$ost].'">'.$ays_lang_arr[$ost].'</option>';
                                            }
                                        }
                                    ?>
                                </select>
							</td>
						</tr>
						<tr>
							<td class="ays_nk_table_cell">
								<label class="description" for="ays_nk_settings[width]"><?php _e('Width','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>The width of the likebox in pixels.</span></label>
							</td>
							<td>
								<input id="ays_nk_settings[width]" class="ays_nk_res" name="ays_nk_settings[width]" type="text" value="<?php echo $ays_nk_options['width']; ?>" />
							</td>
						</tr>
						<tr>
							<td class="ays_nk_table_cell">
								<label class="description" for="ays_nk_settings[height]"><?php _e('Height','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>The height of the likebox in pixels.</span></label>
							</td>
							<td>
								<input id="ays_nk_settings[height]" class="ays_nk_res" name="ays_nk_settings[height]" type="text" value="<?php echo $ays_nk_options['height'];?>" />
							</td>
						</tr>
						<tr>
							<td class="ays_nk_table_cell">
								<label class="description" for="ays_nk_settings[delay]"><?php _e('Delay (e.g>1000ms)','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>Specify a delay for the likebox to appear (recommended > 1000)</span></label>
							</td>
							<td>
								<input id="ays_nk_settings[delay]" class="ays_nk_res" name="ays_nk_settings[delay]" type="text" value="<?php echo $ays_nk_options['delay']; ?>" />
							</td>
						</tr>
						<tr>
							<td class="ays_nk_table_cell">
								<label class="description"><?php _e('Disable close button','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>This option disables the visitor to close the likebox until the visitor likes the
                                            promoted page or until the likebox is auto closed.
</span></label>
							</td>
							<td>
								<input id="ays_nk_settings[soe]" class="ays_nk_res" name="ays_nk_settings[ecb]" type="checkbox" <?php if(!empty($ays_nk_options['ecb'])) echo "checked"; ?> /><label for="ays_nk_settings[soe]">Disable</label>
							</td>
						</tr>
						<tr>
							<td>
								<label class="description" for="ays_nk_settings[coo]"><?php _e('Close on overlay click','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>Enable or disable closing likebox by overlay click.</span></label>						
							</td>
							<td>
								<input type="radio" name="ays_nk_settings[coo]" id="ays_nk_settings[coo_enable]" class="ays_nk_res" value="true" <?php checked('true', $ays_nk_options['coo']); ?>>
								<label for="ays_nk_settings[coo_enable]">Enable</label>
								<input type="radio" name="ays_nk_settings[coo]" id="ays_nk_settings[coo_disable]" class="ays_nk_res" value="false" <?php checked('false', $ays_nk_options['coo']); ?>>
								<label for="ays_nk_settings[coo_disable]">Disable</label>
							</td>
						</tr>
						<tr>
							<td>
								<label class="description" for="ays_nk_settings[wlogged]"><?php _e('Show only to WP logged in users','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>If your user logged in your website it will show only for him,else likebox wouldn't appear.</span></label>						
							</td>
							<td>
								<input type="radio" name="ays_nk_settings[wlogged]" id="ays_nk_settings[wlogged_enable]" class="ays_nk_res" value="true" <?php checked('true', $ays_nk_options['wlogged']); ?>>
								<label for="ays_nk_settings[wlogged_enable]">Enable</label>
								<input type="radio" name="ays_nk_settings[wlogged]" id="ays_nk_settings[wlogged_disable]" class="ays_nk_res" value="false" <?php checked('false', $ays_nk_options['wlogged']); ?>>
								<label for="ays_nk_settings[wlogged_disable]">Disable</label>
							</td>
						</tr>
						<tr>
							<td class="ays_nk_table_cell">
								<label class="description"><?php _e('Disable auto close','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>By this option the likebox will be closed as soon as the visitor likes the promoted page
                                        or closes the likebox with the close button.
</span></label>
							</td>
							<td>
								<input id="ays_nk_settings[dac]" onchange="ays_nk_func()" class="ays_nk_res" name="ays_nk_settings[dac]" type="checkbox" <?php if(!empty($ays_nk_options['dac'])) echo "checked"; ?> /><label for="ays_nk_settings[dac]">Disable</label>
							</td>
						</tr>
						<tr>
							<td class="ays_nk_table_cell">
								<label class="description" id="a_u_c_l" for="ays_nk_settings[aucl]"><?php _e('Auto close per seconds','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>Specify the amount of time for the likebox to auto close.</span></label>
							</td>

							<td>
								<table>
									<tr>
										<td>
											<input type="text" id="ays_nk_settings[tfaucl1]" class="ays_nk_res" name="ays_nk_settings[tfaucl1]"  value="<?php echo $ays_nk_options['tfaucl1'];?>" />
										</td>
										<td>
											<input id="ays_nk_settings[aucl]" style="width:100%" class="ays_nk_res" name="ays_nk_settings[aucl]" type="number" value="<?php echo $ays_nk_options['aucl'];?>"/>
										</td>
										<td>
											<input type="text" id="ays_nk_settings[tfaucl2]" class="ays_nk_res" name="ays_nk_settings[tfaucl2]"  value="<?php echo $ays_nk_options['tfaucl2'];?>" >
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<label class="description"><?php _e('Transparent background','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>Set the transparent background for likebox.</span></label>
							</td>
							<td>
								<input type="radio" name="ays_nk_settings[tbg]" id="ays_nk_settings[tbg_enable]" class="ays_nk_res" value="true" <?php checked('true', $ays_nk_options['tbg']); ?>>
								<label for="ays_nk_settings[tbg_enable]">Enable</label>
								<input type="radio" name="ays_nk_settings[tbg]" id="ays_nk_settings[tbg_disable]" class="ays_nk_res" value="false" <?php checked('false', $ays_nk_options['tbg']); ?>>
								<label for="ays_nk_settings[tbg_disable]">Disable</label>							
							</td>
						</tr>
						<tr>
							<td class="ays_nk_table_cell">
								<label class="description"><?php _e('Show only in','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>Choose the place, where you want the likebox to be shown on.</span></label>
							</td>
							<td>
								<input id="ays_nk_settings[soe1]" class="ays_nk_res" name="ays_nk_settings[soe1]" type="checkbox" value="home" <?php echo checked('home', $ays_nk_options['ays_nk_settings[soe1]']);?><?php if($ays_nk_options['soe1'] == "home") echo "checked"; if($ays_nk_options['soe1'] == "" && $ays_nk_options['soe2'] == "" && $ays_nk_options['soe3'] == "" && $ays_nk_options['soe4'] == "") echo "checked";?>/>
								<label for="ays_nk_settings[soe1]">Homepage</label>
								<input id="ays_nk_settings[soe2]" class="ays_nk_res" name="ays_nk_settings[soe2]" type="checkbox" value="all" <?php checked('all', $ays_nk_options['ays_nk_settings[soe2]']);?> <?php if($ays_nk_options['soe2'] == "all") echo "checked"?>  />
								<label for="ays_nk_settings[soe2]">All pages</label>
								<input id="ays_nk_settings[soe3]" class="ays_nk_res" name="ays_nk_settings[soe3]" type="checkbox" value="pos" <?php echo checked('pos', $ays_nk_options['ays_nk_settings[soe3]']);?><?php if($ays_nk_options['soe3'] == "pos") echo "checked"; ?>/>
								<label for="ays_nk_settings[soe3]">Posts</label>
								<input id="ays_nk_settings[soe4]" class="ays_nk_res" name="ays_nk_settings[soe4]" type="checkbox" value="archives" <?php checked('archives', $ays_nk_options['ays_nk_settings[soe4]']);?> <?php if($ays_nk_options['soe4'] == "archives") echo "checked"?>  />
								<label for="ays_nk_settings[soe4]">Archives</label>
							</td>
						</tr>
						<tr>
							<td class="ays_nk_table_cell">
								<label class="description"><?php _e('Show once every (<i>days,hours,minutes</i>) ','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>Show the likebox once in the defined
                                                                        amount of time per individual visitor.
</span></label>
							</td>
							<td>
        <input class="ays_nk_res" id="ays_nk_settings[siev]" name="ays_nk_settings[siev]" type="number" value="<?php echo $ays_nk_options['siev']; ?>" />
        <?php
            $ays_cook_arr=array("Days","Hours","Minutes");
            $ays_cook_short_arr=array("day","hour","minute");
        ?>
        <select id="ays_nk_settings[cook]" class="ays_nk_res" name="ays_nk_settings[cook]">
            <option>Select Format</option>
            <?php
                for($nk_ost = 0; $nk_ost<count($ays_cook_arr); $nk_ost++){
                    if($ays_nk_options['cook'] == $ays_cook_short_arr[$nk_ost]){
                        echo '<option value="'.$ays_cook_short_arr[$nk_ost].'" selected>'.$ays_cook_arr[$nk_ost].'</option>';
                    }
                    else{
                        echo '<option value="'.$ays_cook_short_arr[$nk_ost].'">'.$ays_cook_arr[$nk_ost].'</option>';
                    }
                }
            ?>
        </select>
							</td>
						</tr>
						<tr>
							<td class="ays_nk_table_cell">
								<label class="description" for="ays_nk_settings[tbl]"><?php _e('Likebox title','ays_nk_domain') ?><span class="desc"><b class="ays_top_arrow"></b>Choose the title of the likebox, which will be shown at the top of the
                                                                        box.
</span></label>
							</td>
							<td>
								<input id="ays_nk_settings[tbl]" class="ays_nk_res" name="ays_nk_settings[tbl]" type="text" value="<?php echo $ays_nk_options['tbl'];?>" />
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="submit" class="button-primary" value="<?php _e('Save Options','ays_nk_domain');?>" />
								<input type="button"  id="ays_nk_bttn"  value="<?php _e('Reset Options','ays_nk_domain');?>" class="my_butt"/>
							</td>
						</tr>
					</table>

			</div>

			<div id="tab2" class="tab">
				<p>Styles</p>
                <h4 class="ays_nk_inf">AYS Facebook Popoup Likebox Styles</h4>
                <p>Styles will be available in <a href="http://ays-pro.com/index.php/wordpress/facebook-popup-likebox" target="_blank" style="font-size:18px;color:red;">PRO</a> version. Check there <a href="http://ays-pro.com/index.php/wordpress/facebook-popup-likebox" target="_blaays_nk" style="font-size:18px;color:red;">AYS-Pro</a></p>
                <div class="ays_nk_pro_styles">
                    <?php
                        echo '<img src="' . plugins_url( 'images/pro-styles.JPG', __FILE__ ) . '" > ';
                    ?>
                    <div class="ays_opac">

                    </div>
                </div>
			</div>
		</div>
	</div>
    </form>
    </div>
    <?php
    echo ob_get_clean();
}
function ays_nk_add_options_liays_nk(){
    add_options_page('AYS Facebook Popoup Likebox Options','FPSPopoup','manage_options','ays_nk-options','ays_nk_options_page');
    add_menu_page('FPSPopoup', 'AYS Facebook Popoup Likebox', 'manage_options', 'ays_nk-options', 'ays_nk_options_page');
}
add_action('admin_menu','ays_nk_add_options_liays_nk');

function ays_nk_register_settings(){
    register_setting('ays_nk_settings_group','ays_nk_settings');
}
add_action('admin_init','ays_nk_register_settings');
?>
