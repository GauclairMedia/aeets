    		<div id="footer">

    		</div>
    		<div id="cammed">
    			<div class="wrapper1700">
    				<div class="cammedWrapper table">
    					<div class="table_cell left">
    						<a href="#" title="Plan du site" class="plan">Plan du site</a>
    						<a href="#" title="Conditions d'utilisation" class="conditions">Conditions d'utilisation</a>
    					</div>
                        <div class="table_cell right alRight">
                            <a href="https://www.cameleonmedia.com/ville/mascouche/" target="_blank" title="Cameleon - Agence Web" class="cameleon noSwup">
                                <span class="txt_cameleon">
                                    <!-- Cameleon, séparé lettre/lettre -->
                                    <span>C</span><span>a</span><span>m</span><span>e</span><span>l</span><span>e</span><span>o</span><span>n</span><span>&nbsp;</span><span>-</span>
                                </span>
                                <span class="txt_agence">Agence Web</span>
                                <span class="txt_ville">Mascouche</span>
                            </a>
                        </div>
    				</div>
    			</div>
    		</div>
        </div>
		<!-- SCRIPTS -->
		<script>
			navigator.browserSpecs = (function(){
				var ua= navigator.userAgent, tem,
				M= ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
				if(/trident/i.test(M[1])){
					tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
					return {name:'IE',version:(tem[1] || '')};
				}
				if(M[1]=== 'Chrome'){
					tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
					if(tem!= null) return {name:tem[1].replace('OPR', 'Opera'),version:tem[2]};
				}
				M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
				if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
				return {name:M[0],version:M[1]};
			})();

			var browser = navigator.browserSpecs;
			if(
				(browser.name == 'MSIE' && browser.version <= 9) ||
				(browser.name == 'Safari' && browser.version <= 9)
			){
				if(document.getElementById('update_browser') != null){
					document.getElementById('update_browser').removeAttribute('class');
				}
			}
		</script>

		<script src="scripts/scripts.min.js" data-swup-ignore-script></script>
	</body>
</html>
