<?PHP

	$url = $url . ".swf";

?>
<script type="text/javascript"> alert("<?PHP echo $url; ?>");var url = "<?PHP echo $url; ?>"; </script>


<script type="text/javascript" src="js/flash.js"></script>

	<div id="main">
		<h1 class="noflash"></h1>

		<div class="noflash">We've detected that you don't have the required Flash player to view our Web site.<br />

		<a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" target="_blank">Click here</a> to download the latest Flash player.
		
		</div>



		<script type="text/javascript">
			
			
			
		    var so = new SWFObject( url, "index", "900", "650", "7", "#ffffff");
		
		    so.addParam("quality", "high");
		    so.addParam("scale", "fit");
		    so.addParam("salign", "m");
		
		    so.addParam("menu", "false");
		
		    so.addParam("allowFullScreen", "true");
		
		    so.addParam("allowScriptAccess", "sameDomain");
		
		   /* so.addParam("flashvars", "url="); */
		
		    so.write("main");
	
	    </script>

		<noscript>
	
			Sorry But You Must Have Javascript Enabled To Use This Page
		
		</noscript>
	</div>
