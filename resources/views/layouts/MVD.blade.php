
		<style type="text/css">

			@-ms-viewport { width: device-width; }
			@media only screen and (min-device-width: 800px) { html { overflow:hidden; } }
			* { padding: 0; margin: 0; }
			html { height: 100%; }
			body { height: 100%; overflow:hidden; }
			div#container { height: 100%; width: 100%; margin: 0 auto; margin-top: 0px; padding-bottom: 0px; }
			div#tourDIV {
				height:100%;
				position:relative;
				overflow:hidden;
			}
			div#panoDIV {
				height:100%;
				position:relative;
				overflow:hidden;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-o-user-select: none;
				user-select: none;
			}		
			.site-footer{
				display: none
			}
			div.body{
				height: 100%;
			}
			.topbar {
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				z-index: 999;
			}
			.site-header-wrapper{
				position: absolute;
				top: 0px;
				width: 100%;
			}
			.site-footer-bottom{
				position: absolute;
				bottom: 0;
				width: 100%
				height: 50px;
				line-height: 50px;
				background-color: white;
				left: 0;
				right: 0;
				padding: 0;
			}			
			@media (max-width: 901px){
				.site-header-wrapper{
					top: 0px;
				}
				div#container { 
					margin-top: 0px; 
				}
			}			
			@media (max-width: 445px){
				.site-header-wrapper{
					top: 0px;
				}
				div#container { 
					margin-top: 0px; 
				}
				
			}			
			@media (max-width: 360px){
				.topbar > .container{
					padding: 0
				}
			}	
		</style>
		<div id="container">
			<div id="tourDIV">
				<div id="panoDIV" class="">
					<noscript>
						
						<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="100%" id="MVDdata/MVD">
							<param name="movie" value="MVDdata/MVD.swf"/>
							<param name="allowFullScreen" value="true"/>
							<!--[if !IE]>-->
							<object type="application/x-shockwave-flash" data="MVDdata/MVD.swf" width="100%" height="100%">
								<param name="movie" value="MVDdata/MVD.swf"/>
								<param name="allowFullScreen" value="true"/>
								<!--<![endif]-->
								<a href="http://www.adobe.com/go/getflash">
									<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
								</a>
							<!--[if !IE]>-->
							</object>
							<!--<![endif]-->
						</object>
						
					</noscript>
				</div>
				<script type="text/javascript">
				function readDeviceOrientation() {
					// window.innerHeight is not supported by IE
					var winH = window.innerHeight ? window.innerHeight : jQuery(window).height();
					var winW = window.innerWidth ? window.innerWidth : jQuery(window).width();
					//force height for iframe usage
					if(!winH || winH == 0){
						winH = '100%';
					}
					// set the height of the document
					jQuery('html').css('height', winH);
					// scroll to top
					window.scrollTo(0,0);
				}
				document.addEventListener("DOMContentLoaded", function(){
					if (/(iphone|ipod|ipad|android|iemobile|webos|fennec|blackberry|kindle|series60|playbook|opera\smini|opera\smobi|opera\stablet|symbianos|palmsource|palmos|blazer|windows\sce|windows\sphone|wp7|bolt|doris|dorothy|gobrowser|iris|maemo|minimo|netfront|semc-browser|skyfire|teashark|teleca|uzardweb|avantgo|docomo|kddi|ddipocket|polaris|eudoraweb|opwv|plink|plucker|pie|xiino|benq|playbook|bb|cricket|dell|bb10|nintendo|up.browser|playstation|tear|mib|obigo|midp|mobile|tablet)/.test(navigator.userAgent.toLowerCase())) {
						// add event listener on resize event (for orientation change)
						jQuery(window).resize(function() {
							readDeviceOrientation();
						});
						// initial execution
						readDeviceOrientation();
					}
				});
				</script>
				<script type="text/javascript" src="MVDdata/MVD.js"></script>
				<script type="text/javascript">
					embedpano({
					
					swf:"MVDdata/MVD.swf"
					
					,target:"panoDIV"
					,passQueryParameters:true
					
					
					});
				</script>
			</div>
		</div>