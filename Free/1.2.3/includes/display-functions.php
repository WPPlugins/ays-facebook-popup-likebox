<?php
/**********************************************************
*DISPLAY FUNCTIONS
***********************************************************/

function ays_nk_show_in_page(){
	global $ays_nk_options;
    $d_tabs = array();
    if($ays_nk_options['ays_nk_fb_timeL'] == "tl"){
        $d_tabs[] = "timeline";
    }
    if($ays_nk_options['ays_nk_fb_evS'] == "evS"){
        $d_tabs[] = "events";
    }
    if($ays_nk_options['ays_nk_fb_mS'] == "mS"){
        $d_tabs[] = "messages";
    }
    $d_tabs_str = implode(",",$d_tabs);
    ?>
    <style>
	<?php
	   echo $ays_nk_options['ays_nk_ccss'];
	?>
	</style>
	<?php
	$ays_flag = null;
	if($ays_nk_options['wlogged']=="true"){
		$ays_flag = true;
	}
	else{
		$ays_flag = false;
	}
	if($ays_nk_options['tbg']=="true"){
		echo "<style>
			#user_desc{
				color:whitesmoke !important;
			}
			#ays_nk_p{
				color:whitesmoke !important;
			}
			#nar_mod{
				background-color:transparent !important;
			}
		</style>";
	}
	if(is_user_logged_in()==$ays_flag){
		if($ays_nk_options['soe2'] == "all")
		{
				?>					
					<div id="fb-root"></div>
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
							js.src = "https://connect.facebook.net/<?php echo $ays_nk_options['lang']; ?>/all.js&appId=470384213171375";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));
					</script>
		
					<div class="nar_overlay animated" id="nar_over"> 
					</div> 
					<div class="nar_modal1 animated" id="nar_mod1">
						<div class="nar_modal animated" id="nar_mod" style="        width:<?php echo $ays_nk_options['width'].'px'; ?>;
			height:<?php echo $ays_nk_options['height'].'px'; ?>;">
							<a id="ays_nk_close" class="ays_nk_cl" onclick="ays_nk_close_all()">X</a>
							<div id="ays_nk_head">
								<h4 id="user_desc"><b><i><?php echo $ays_nk_options['tbl']; ?></i></b></h4>
							</div>
		
							<div id="ays_nk_fb">
								<div class="fb-page" data-href="<?php echo $ays_nk_options['fb_url']; ?>" data-tabs="<?php echo $d_tabs_str; ?>" data-small-header="<?php if($ays_nk_options['ays_nk_fb_chgs1']=="sm"){echo true;} else{echo false;} ?>" data-adapt-container-width="true" data-hide-cover="<?php if($ays_nk_options['ays_nk_fb_chgs2']=="hcf"){echo true;} else{echo false;} ?>" data-show-facepile="<?php if($ays_nk_options['ays_nk_fb_chgs3']=="sff"){echo true;} else{echo false;} ?>" data-width="<?php echo ($ays_nk_options['width']-36); ?>" data-height="<?php echo ($ays_nk_options['height']-100); ?>">
									<div class="fb-xfbml-parse-ignore">
										<blockquote cite="<?php echo $ays_nk_options['fb_url']; ?>">
											<a href="<?php echo $ays_nk_options['fb_url']; ?>"></a>
										</blockquote>
									</div>
								</div>
							</div>
							<div class="ays_nk_timer" id="ays_nk_timer">
								<p id="ays_nk_p"><?php echo $ays_nk_options['tfaucl1']." ";?><label id="ays_nk_time_label"></label><?php echo " ".$ays_nk_options['tfaucl2'];?></p>
							</div>	
						</div>
		<script>
		var ev = "<?php echo $d_tabs_str; ?>";
		var dac = "<?php if(!empty($ays_nk_options['dac'])) echo "checked"; ?>";
		var showEffect = "<?php echo $ays_nk_options['showEffect'];?>";
		var hideEffect = "<?php echo $ays_nk_options['hideEffect'];?>";
		var ays_bounce = "<?php echo $ays_nk_options['ays_nk_fb_bounce'];?>";
		var ays_ov_click = "<?php echo $ays_nk_options['coo']; ?>";
		
		jQuery('#nar_mod1').click(function(){
			if(ays_ov_click == "true"){
				if(hideEffect != ""){
					jQuery("#nar_over").removeClass(showEffect);
					jQuery("#nar_over").addClass(hideEffect);
					jQuery("#nar_mod1").removeClass(showEffect);
					jQuery("#nar_mod1").addClass(hideEffect);
					jQuery("#nar_mod").removeClass(showEffect);
					jQuery("#nar_mod").addClass(hideEffect);
				}
				else{
					jQuery("#nar_over").css("display","none");
					jQuery("#nar_mod1").css("display","none");
					jQuery("#nar_mod").css("display","none");         
				}				
			}
		});
		
		if(dac=="checked"){
			document.getElementById("ays_nk_p").style.display = "none";
		}
		var close_on_overlay = "<?php echo $ays_nk_options['coo']; ?>";

		function ays_nk_close_all(){
			if(hideEffect != ""){
				jQuery("#nar_over").removeClass(showEffect);
				jQuery("#nar_over").addClass(hideEffect);
				jQuery("#nar_mod1").removeClass(showEffect);
				jQuery("#nar_mod1").addClass(hideEffect);
				jQuery("#nar_mod").removeClass(showEffect);
				jQuery("#nar_mod").addClass(hideEffect);
			}
			else{
				jQuery("#nar_over").css("display","none");
				jQuery("#nar_mod1").css("display","none");
				jQuery("#nar_mod").css("display","none");         
			}
		}
		</script>
		<script>
		var tim=<?php echo $ays_nk_options['aucl']; ?>;
		var st=setInterval(ays_nk_auto_close,1000);
		function ays_nk_auto_close(){
			document.getElementById("ays_nk_time_label").innerHTML = "<b>"+tim+"</b>";
			tim=tim-1;
			if(tim==0){
				if(hideEffect != ""){
					jQuery("#nar_over").removeClass(showEffect);
					jQuery("#nar_over").addClass(hideEffect);
					jQuery("#nar_mod1").removeClass(showEffect);
					jQuery("#nar_mod1").addClass(hideEffect);
					jQuery("#nar_mod").removeClass(showEffect);
					jQuery("#nar_mod").addClass(hideEffect);
				}
				else{
					jQuery("#nar_over").css("display","none");
					jQuery("#nar_mod1").css("display","none");
					jQuery("#nar_mod").css("display","none");         
				}
					clearInterval(st);						
			}
		}
		</script>
		<script>
		var chunch = "<?php if(!empty($ays_nk_options['ecb'])) echo "checked"; ?>";
		if(chunch == "checked"){
			document.getElementById("ays_nk_close").style.display = "none";
		}
		else{
			document.getElementById("ays_nk_close").style.display = "block";
		}
		</script>
		<script>
		var del = "<?php echo $ays_nk_options['delay']; ?>";
		var st;
		if(del>=2000){
			if(showEffect != ""){
				//jQuery("#nar_over").removeClass(showEffect);
				jQuery("#nar_over").addClass(showEffect);
				//jQuery("#nar_mod1").removeClass(showEffect);
				jQuery("#nar_mod1").addClass(showEffect);
				//jQuery("#nar_mod").removeClass(showEffect);
				jQuery("#nar_mod").addClass(showEffect);
			}
			else{
				jQuery("#nar_over").css("display","none");
				jQuery("#nar_mod1").css("display","none");
				jQuery("#nar_mod").css("display","none");         
			}
			st = setTimeout(ays_nk_delay_time,del);
		}
		else{
			if(showEffect != ""){
				jQuery("#nar_over").addClass(showEffect);
				jQuery("#nar_mod1").addClass(showEffect);
				jQuery("#nar_mod").addClass(showEffect);
				if(ays_bounce != ""){
					setTimeout(function(){
						jQuery("#nar_mod").addClass("swing");
					},2000);
				}
			}
			else{
				jQuery("#nar_over").css("display","block");
				jQuery("#nar_mod1").css("display","block");
				jQuery("#nar_mod").css("display","block");         
			}				
		}
		function ays_nk_delay_time(){
			if(showEffect != ""){
				jQuery("#nar_over").addClass(showEffect);
				jQuery("#nar_mod1").addClass(showEffect);
				jQuery("#nar_mod").addClass(showEffect);
				if(ays_bounce != ""){
					setTimeout(function(){
						jQuery("#nar_mod").addClass("swing");
					},2000);
				}
			}
			else{
				jQuery("#nar_over").css("display","block");
				jQuery("#nar_mod1").css("display","block");
				jQuery("#nar_mod").css("display","block");         
			}	
			clearTimeout(st);
		}
		</script>
					</div>
				<?php
		}    
		else if($ays_nk_options['soe1'] == "home")
		{
				if(is_front_page())
				{
					?>					
					<div id="fb-root"></div>
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
							js.src = "https://connect.facebook.net/<?php echo $ays_nk_options['lang']; ?>/all.js&appId=470384213171375";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));
					</script>
					<div class="nar_overlay animated" id="nar_over"> 
					</div> 
					<div class="nar_modal1 animated" id="nar_mod1">
						<div class="nar_modal animated" id="nar_mod" style="        width:<?php echo $ays_nk_options['width'].'px'; ?>;
			height:<?php echo $ays_nk_options['height'].'px'; ?>;">
							<a id="ays_nk_close" class="ays_nk_cl" onclick="ays_nk_close_all()">X</a>
							<div id="ays_nk_head">
								<h4 id="user_desc"><b><i><?php echo $ays_nk_options['tbl']; ?></i></b></h4>
							</div>
		
							<div id="ays_nk_fb">
								<div class="fb-page" data-href="<?php echo $ays_nk_options['fb_url']; ?>" data-tabs="<?php echo $d_tabs_str; ?>" data-small-header="<?php if($ays_nk_options['ays_nk_fb_chgs1']=="sm"){echo true;} else{echo false;} ?>" data-adapt-container-width="true" data-hide-cover="<?php if($ays_nk_options['ays_nk_fb_chgs2']=="hcf"){echo true;} else{echo false;} ?>" data-show-facepile="<?php if($ays_nk_options['ays_nk_fb_chgs3']=="sff"){echo true;} else{echo false;} ?>" data-width="<?php echo ($ays_nk_options['width']-36); ?>" data-height="<?php echo ($ays_nk_options['height']-100); ?>">
									<div class="fb-xfbml-parse-ignore">
										<blockquote cite="<?php echo $ays_nk_options['fb_url']; ?>">
											<a href="<?php echo $ays_nk_options['fb_url']; ?>"></a>
										</blockquote>
									</div>
								</div>
							</div>
							<div class="ays_nk_timer" id="ays_nk_timer">
								<p id="ays_nk_p"><?php echo $ays_nk_options['tfaucl1']." ";?><label id="ays_nk_time_label"></label><?php echo " ".$ays_nk_options['tfaucl2'];?></p>
							</div>	
						</div>
		<script>
		var ev = "<?php echo $d_tabs_str; ?>";
		var dac = "<?php if(!empty($ays_nk_options['dac'])) echo "checked"; ?>";
		var showEffect = "<?php echo $ays_nk_options['showEffect'];?>";
		var hideEffect = "<?php echo $ays_nk_options['hideEffect'];?>";
		var ays_bounce = "<?php echo $ays_nk_options['ays_nk_fb_bounce'];?>";
		var ays_ov_click = "<?php echo $ays_nk_options['coo']; ?>";
		jQuery('#nar_mod1').click(function(){
			if(ays_ov_click == "true"){
				if(hideEffect != ""){
					jQuery("#nar_over").removeClass(showEffect);
					jQuery("#nar_over").addClass(hideEffect);
					jQuery("#nar_mod1").removeClass(showEffect);
					jQuery("#nar_mod1").addClass(hideEffect);
					jQuery("#nar_mod").removeClass(showEffect);
					jQuery("#nar_mod").addClass(hideEffect);
				}
				else{
					jQuery("#nar_over").css("display","none");
					jQuery("#nar_mod1").css("display","none");
					jQuery("#nar_mod").css("display","none");         
				}				
			}
		});
		if(dac=="checked"){
			document.getElementById("ays_nk_p").style.display = "none";
		}
		function ays_nk_close_all(){
			if(hideEffect != ""){
				jQuery("#nar_over").removeClass(showEffect);
				jQuery("#nar_over").addClass(hideEffect);
				jQuery("#nar_mod1").removeClass(showEffect);
				jQuery("#nar_mod1").addClass(hideEffect);
				jQuery("#nar_mod").removeClass(showEffect);
				jQuery("#nar_mod").addClass(hideEffect);
			}
			else{
				jQuery("#nar_over").css("display","none");
				jQuery("#nar_mod1").css("display","none");
				jQuery("#nar_mod").css("display","none");         
			}
		}
		</script>
		<script>
		var tim=<?php echo $ays_nk_options['aucl']; ?>;
		var st=setInterval(ays_nk_auto_close,1000);
		function ays_nk_auto_close(){
			document.getElementById("ays_nk_time_label").innerHTML = "<b>"+tim+"</b>";
			tim=tim-1;
			if(tim==0){
				if(hideEffect != ""){
					jQuery("#nar_over").removeClass(showEffect);
					jQuery("#nar_over").addClass(hideEffect);
					jQuery("#nar_mod1").removeClass(showEffect);
					jQuery("#nar_mod1").addClass(hideEffect);
					jQuery("#nar_mod").removeClass(showEffect);
					jQuery("#nar_mod").addClass(hideEffect);
				}
				else{
					jQuery("#nar_over").css("display","none");
					jQuery("#nar_mod1").css("display","none");
					jQuery("#nar_mod").css("display","none");         
				}
					clearInterval(st);						
			}
		}
		</script>
		<script>
		var chunch = "<?php if(!empty($ays_nk_options['ecb'])) echo "checked"; ?>";
		if(chunch == "checked"){
			document.getElementById("ays_nk_close").style.display = "none";
		}
		else{
			document.getElementById("ays_nk_close").style.display = "block";
		}
		</script>
		<script>
		var del = "<?php echo $ays_nk_options['delay']; ?>";
		var st;
		if(del>=2000){
			if(hideEffect != ""){
				jQuery("#nar_over").removeClass(showEffect);
				jQuery("#nar_over").addClass(hideEffect);
				jQuery("#nar_mod1").removeClass(showEffect);
				jQuery("#nar_mod1").addClass(hideEffect);
				jQuery("#nar_mod").removeClass(showEffect);
				jQuery("#nar_mod").addClass(hideEffect);
			}
			else{
				jQuery("#nar_over").css("display","none");
				jQuery("#nar_mod1").css("display","none");
				jQuery("#nar_mod").css("display","none");         
			}
			st = setTimeout(ays_nk_delay_time,del);
		}
		else{
			if(showEffect != ""){
				jQuery("#nar_over").addClass(showEffect);
				jQuery("#nar_mod1").addClass(showEffect);
				jQuery("#nar_mod").addClass(showEffect);
				if(ays_bounce != ""){
					setTimeout(function(){
						jQuery("#nar_mod").addClass("swing");
					},2000);
				}
			}
			else{
				jQuery("#nar_over").css("display","block");
				jQuery("#nar_mod1").css("display","block");
				jQuery("#nar_mod").css("display","block");         
			}				
		}
		function ays_nk_delay_time(){
			if(showEffect != ""){
				jQuery("#nar_over").addClass(showEffect);
				jQuery("#nar_mod1").addClass(showEffect);
				jQuery("#nar_mod").addClass(showEffect);
				if(ays_bounce != ""){
					setTimeout(function(){
						jQuery("#nar_mod").addClass("swing");
					},2000);
				}
			}
			else{
				jQuery("#nar_over").css("display","block");
				jQuery("#nar_mod1").css("display","block");
				jQuery("#nar_mod").css("display","block");         
			}	
			clearTimeout(st);
		}
		</script>
					</div>
				<?php
			}
		}
		if($ays_nk_options['soe3'] == "pos"){
			if(is_singular())
				{
		?>					
					<div id="fb-root"></div>
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
							js.src = "https://connect.facebook.net/<?php echo $ays_nk_options['lang']; ?>/all.js&appId=470384213171375";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));
					</script>
		
					<div class="nar_overlay animated" id="nar_over"> 
					</div> 
					<div class="nar_modal1 animated" id="nar_mod1">
						<div class="nar_modal animated" id="nar_mod" style="        width:<?php echo $ays_nk_options['width'].'px'; ?>;
			height:<?php echo $ays_nk_options['height'].'px'; ?>;">
							<a id="ays_nk_close" class="ays_nk_cl" onclick="ays_nk_close_all()">X</a>
							<div id="ays_nk_head">
								<h4 id="user_desc"><b><i><?php echo $ays_nk_options['tbl']; ?></i></b></h4>
							</div>
		
							<div id="ays_nk_fb">
								<div class="fb-page" data-href="<?php echo $ays_nk_options['fb_url']; ?>" data-tabs="<?php echo $d_tabs_str; ?>" data-small-header="<?php if($ays_nk_options['ays_nk_fb_chgs1']=="sm"){echo true;} else{echo false;} ?>" data-adapt-container-width="true" data-hide-cover="<?php if($ays_nk_options['ays_nk_fb_chgs2']=="hcf"){echo true;} else{echo false;} ?>" data-show-facepile="<?php if($ays_nk_options['ays_nk_fb_chgs3']=="sff"){echo true;} else{echo false;} ?>" data-width="<?php echo ($ays_nk_options['width']-36); ?>" data-height="<?php echo ($ays_nk_options['height']-100); ?>">
									<div class="fb-xfbml-parse-ignore">
										<blockquote cite="<?php echo $ays_nk_options['fb_url']; ?>">
											<a href="<?php echo $ays_nk_options['fb_url']; ?>"></a>
										</blockquote>
									</div>
								</div>
							</div>
							<div class="ays_nk_timer" id="ays_nk_timer">
								<p id="ays_nk_p"><?php echo $ays_nk_options['tfaucl1']." ";?><label id="ays_nk_time_label"></label><?php echo " ".$ays_nk_options['tfaucl2'];?></p>
							</div>	
						</div>
		<script>
		var ev = "<?php echo $d_tabs_str; ?>";
		var dac = "<?php if(!empty($ays_nk_options['dac'])) echo "checked"; ?>";
		var showEffect = "<?php echo $ays_nk_options['showEffect'];?>";
		var hideEffect = "<?php echo $ays_nk_options['hideEffect'];?>";
		var ays_bounce = "<?php echo $ays_nk_options['ays_nk_fb_bounce'];?>";		
		var ays_ov_click = "<?php echo $ays_nk_options['coo']; ?>";
		jQuery('#nar_mod1').click(function(){
			if(ays_ov_click == "true"){
				if(hideEffect != ""){
					jQuery("#nar_over").removeClass(showEffect);
					jQuery("#nar_over").addClass(hideEffect);
					jQuery("#nar_mod1").removeClass(showEffect);
					jQuery("#nar_mod1").addClass(hideEffect);
					jQuery("#nar_mod").removeClass(showEffect);
					jQuery("#nar_mod").addClass(hideEffect);
				}
				else{
					jQuery("#nar_over").css("display","none");
					jQuery("#nar_mod1").css("display","none");
					jQuery("#nar_mod").css("display","none");         
				}				
			}
		});
		if(dac=="checked"){
			document.getElementById("ays_nk_p").style.display = "none";
		}
		function ays_nk_close_all(){
			if(hideEffect != ""){
				jQuery("#nar_over").removeClass(showEffect);
				jQuery("#nar_over").addClass(hideEffect);
				jQuery("#nar_mod1").removeClass(showEffect);
				jQuery("#nar_mod1").addClass(hideEffect);
				jQuery("#nar_mod").removeClass(showEffect);
				jQuery("#nar_mod").addClass(hideEffect);
			}
			else{
				jQuery("#nar_over").css("display","none");
				jQuery("#nar_mod1").css("display","none");
				jQuery("#nar_mod").css("display","none");         
			}
		}
		</script>
		<script>
		var tim=<?php echo $ays_nk_options['aucl']; ?>;
		var st=setInterval(ays_nk_auto_close,1000);
		function ays_nk_auto_close(){
			document.getElementById("ays_nk_time_label").innerHTML = "<b>"+tim+"</b>";
			tim=tim-1;
			if(tim==0){
				if(hideEffect != ""){
					jQuery("#nar_over").removeClass(showEffect);
					jQuery("#nar_over").addClass(hideEffect);
					jQuery("#nar_mod1").removeClass(showEffect);
					jQuery("#nar_mod1").addClass(hideEffect);
					jQuery("#nar_mod").removeClass(showEffect);
					jQuery("#nar_mod").addClass(hideEffect);
				}
				else{
					jQuery("#nar_over").css("display","none");
					jQuery("#nar_mod1").css("display","none");
					jQuery("#nar_mod").css("display","none");         
				}
					clearInterval(st);						
			}
		}
		</script>
		<script>
		var chunch = "<?php if(!empty($ays_nk_options['ecb'])) echo "checked"; ?>";
		if(chunch == "checked"){
			document.getElementById("ays_nk_close").style.display = "none";
		}
		else{
			document.getElementById("ays_nk_close").style.display = "block";
		}
		</script>
		<script>
		var del = "<?php echo $ays_nk_options['delay']; ?>";
		var st;
		if(del>=2000){
			if(hideEffect != ""){
				jQuery("#nar_over").removeClass(showEffect);
				jQuery("#nar_over").addClass(hideEffect);
				jQuery("#nar_mod1").removeClass(showEffect);
				jQuery("#nar_mod1").addClass(hideEffect);
				jQuery("#nar_mod").removeClass(showEffect);
				jQuery("#nar_mod").addClass(hideEffect);
			}
			else{
				jQuery("#nar_over").css("display","none");
				jQuery("#nar_mod1").css("display","none");
				jQuery("#nar_mod").css("display","none");         
			}
			st = setTimeout(ays_nk_delay_time,del);
		}
		else{
			if(showEffect != ""){
				jQuery("#nar_over").addClass(showEffect);
				jQuery("#nar_mod1").addClass(showEffect);
				jQuery("#nar_mod").addClass(showEffect);
				if(ays_bounce != ""){
					setTimeout(function(){
						jQuery("#nar_mod").addClass("swing");
					},2000);
				}
			}
			else{
				jQuery("#nar_over").css("display","block");
				jQuery("#nar_mod1").css("display","block");
				jQuery("#nar_mod").css("display","block");         
			}				
		}
		function ays_nk_delay_time(){
			if(showEffect != ""){
				jQuery("#nar_over").addClass(showEffect);
				jQuery("#nar_mod1").addClass(showEffect);
				jQuery("#nar_mod").addClass(showEffect);
				if(ays_bounce != ""){
					setTimeout(function(){
						jQuery("#nar_mod").addClass("swing");
					},2000);
				}
			}
			else{
				jQuery("#nar_over").css("display","block");
				jQuery("#nar_mod1").css("display","block");
				jQuery("#nar_mod").css("display","block");         
			}	
			clearTimeout(st);
		}
		</script>
					</div>
				<?php
			}
		}
		if($ays_nk_options['soe4'] == "archives"){
			if(is_archive())
				{
		?>					
					<div id="fb-root"></div>
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
							js.src = "https://connect.facebook.net/<?php echo $ays_nk_options['lang']; ?>/all.js&appId=470384213171375";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));
					</script>
		
					<div class="nar_overlay animated" id="nar_over"> 
					</div> 
					<div class="nar_modal1 animated" id="nar_mod1">
						<div class="nar_modal animated" id="nar_mod" style="        width:<?php echo $ays_nk_options['width'].'px'; ?>;
			height:<?php echo $ays_nk_options['height'].'px'; ?>;">
							<a id="ays_nk_close" class="ays_nk_cl" onclick="ays_nk_close_all()">X</a>
							<div id="ays_nk_head">
								<h4 id="user_desc"><b><i><?php echo $ays_nk_options['tbl']; ?></i></b></h4>
							</div>
		
							<div id="ays_nk_fb">
								<div class="fb-page" data-href="<?php echo $ays_nk_options['fb_url']; ?>" data-tabs="<?php echo $d_tabs_str; ?>" data-small-header="<?php if($ays_nk_options['ays_nk_fb_chgs1']=="sm"){echo true;} else{echo false;} ?>" data-adapt-container-width="true" data-hide-cover="<?php if($ays_nk_options['ays_nk_fb_chgs2']=="hcf"){echo true;} else{echo false;} ?>" data-show-facepile="<?php if($ays_nk_options['ays_nk_fb_chgs3']=="sff"){echo true;} else{echo false;} ?>" data-width="<?php echo ($ays_nk_options['width']-36); ?>" data-height="<?php echo ($ays_nk_options['height']-100); ?>">
									<div class="fb-xfbml-parse-ignore">
										<blockquote cite="<?php echo $ays_nk_options['fb_url']; ?>">
											<a href="<?php echo $ays_nk_options['fb_url']; ?>"></a>
										</blockquote>
									</div>
								</div>
							</div>
							<div class="ays_nk_timer" id="ays_nk_timer">
								<p id="ays_nk_p"><?php echo $ays_nk_options['tfaucl1']." ";?><label id="ays_nk_time_label"></label><?php echo " ".$ays_nk_options['tfaucl2'];?></p>
							</div>	
						</div>
		<script>
		var ev = "<?php echo $d_tabs_str; ?>";
		var dac = "<?php if(!empty($ays_nk_options['dac'])) echo "checked"; ?>";
		var showEffect = "<?php echo $ays_nk_options['showEffect'];?>";
		var hideEffect = "<?php echo $ays_nk_options['hideEffect'];?>";
		var ays_bounce = "<?php echo $ays_nk_options['ays_nk_fb_bounce'];?>";		
		var ays_ov_click = "<?php echo $ays_nk_options['coo']; ?>";
		jQuery('#nar_mod1').click(function(){
			if(ays_ov_click == "true"){
				if(hideEffect != ""){
					jQuery("#nar_over").removeClass(showEffect);
					jQuery("#nar_over").addClass(hideEffect);
					jQuery("#nar_mod1").removeClass(showEffect);
					jQuery("#nar_mod1").addClass(hideEffect);
					jQuery("#nar_mod").removeClass(showEffect);
					jQuery("#nar_mod").addClass(hideEffect);
				}
				else{
					jQuery("#nar_over").css("display","none");
					jQuery("#nar_mod1").css("display","none");
					jQuery("#nar_mod").css("display","none");         
				}				
			}
		});
		if(dac=="checked"){
			document.getElementById("ays_nk_p").style.display = "none";
		}
		function ays_nk_close_all(){
			if(hideEffect != ""){
				jQuery("#nar_over").removeClass(showEffect);
				jQuery("#nar_over").addClass(hideEffect);
				jQuery("#nar_mod1").removeClass(showEffect);
				jQuery("#nar_mod1").addClass(hideEffect);
				jQuery("#nar_mod").removeClass(showEffect);
				jQuery("#nar_mod").addClass(hideEffect);
			}
			else{
				jQuery("#nar_over").css("display","none");
				jQuery("#nar_mod1").css("display","none");
				jQuery("#nar_mod").css("display","none");         
			}
		}
		</script>
		<script>
		var tim=<?php echo $ays_nk_options['aucl']; ?>;
		var st=setInterval(ays_nk_auto_close,1000);
		function ays_nk_auto_close(){
			document.getElementById("ays_nk_time_label").innerHTML = "<b>"+tim+"</b>";
			tim=tim-1;
			if(tim==0){
				if(hideEffect != ""){
					jQuery("#nar_over").removeClass(showEffect);
					jQuery("#nar_over").addClass(hideEffect);
					jQuery("#nar_mod1").removeClass(showEffect);
					jQuery("#nar_mod1").addClass(hideEffect);
					jQuery("#nar_mod").removeClass(showEffect);
					jQuery("#nar_mod").addClass(hideEffect);
				}
				else{
					jQuery("#nar_over").css("display","none");
					jQuery("#nar_mod1").css("display","none");
					jQuery("#nar_mod").css("display","none");         
				}
					clearInterval(st);						
			}
		}
		</script>
		<script>
		var chunch = "<?php if(!empty($ays_nk_options['ecb'])) echo "checked"; ?>";
		if(chunch == "checked"){
			document.getElementById("ays_nk_close").style.display = "none";
		}
		else{
			document.getElementById("ays_nk_close").style.display = "block";
		}
		</script>
		<script>
		var del = "<?php echo $ays_nk_options['delay']; ?>";
		var st;
		if(del>=2000){
			if(hideEffect != ""){
				jQuery("#nar_over").removeClass(showEffect);
				jQuery("#nar_over").addClass(hideEffect);
				jQuery("#nar_mod1").removeClass(showEffect);
				jQuery("#nar_mod1").addClass(hideEffect);
				jQuery("#nar_mod").removeClass(showEffect);
				jQuery("#nar_mod").addClass(hideEffect);
			}
			else{
				jQuery("#nar_over").css("display","none");
				jQuery("#nar_mod1").css("display","none");
				jQuery("#nar_mod").css("display","none");         
			}
			st = setTimeout(ays_nk_delay_time,del);
		}
		else{
			if(showEffect != ""){
				jQuery("#nar_over").addClass(showEffect);
				jQuery("#nar_mod1").addClass(showEffect);
				jQuery("#nar_mod").addClass(showEffect);
				if(ays_bounce != ""){
					setTimeout(function(){
						jQuery("#nar_mod").addClass("swing");
					},2000);
				}
			}
			else{
				jQuery("#nar_over").css("display","block");
				jQuery("#nar_mod1").css("display","block");
				jQuery("#nar_mod").css("display","block");         
			}				
		}
		function ays_nk_delay_time(){
			if(showEffect != ""){
				jQuery("#nar_over").addClass(showEffect);
				jQuery("#nar_mod1").addClass(showEffect);
				jQuery("#nar_mod").addClass(showEffect);
				if(ays_bounce != ""){
					setTimeout(function(){
						jQuery("#nar_mod").addClass("swing");
					},2000);
				}
			}
			else{
				jQuery("#nar_over").css("display","block");
				jQuery("#nar_mod1").css("display","block");
				jQuery("#nar_mod").css("display","block");         
			}	
			clearTimeout(st);
		}
		</script>
					</div>
				<?php
			}
		}
	}
}	
add_action('wp_head','ays_nk_show_in_page');
?>