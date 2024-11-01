<div id="div_wp_config" style="display:none; width:500px;">
    
	<h1>Configure WebsiteAlive</h1>
    <br />
	<p><strong>Logged in as: <span id="span_user_name"><?php echo get_option( 'wsa_username' ); ?></span></strong></p>
	
    <div class="div_features">
    	Please select the WebsiteAlive Website which you'd like to be attached to this Wordpress site. If you'd like a different Website set up for this Wordpress, please log into your WebsiteAlive account and create a new Website.
    </div>

	<br>
    
    <form name="form_websiteid" id="form_websiteid">
        
        <div align="center">
        
        <select id="websiteid" name="websiteid" style="font-size:24px">
        	<option>Loading...</option>
        </select>
        
        <br /><br />
        <input type="button" onclick="saveWebsite()" value="Save Changes"/>
        <input type="button" onclick="logOut()" value="Log Out"/>


        </div>
	
    </form>

</div>
