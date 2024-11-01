<div id="wsa_user_settings">

<form name="dofollow" id="dofollow" action="options.php" method="post" style="display:none">
<?php settings_fields( 'websitealive' ); ?>
<input type="text" id="wsa_username" name="wsa_username" value="<?php echo get_option( 'wsa_username' ); ?>" /><br />
<input type="text" id="wsa_groupid" name="wsa_groupid" value="<?php echo get_option( 'wsa_groupid' ); ?>" /><br />
<input type="text" id="wsa_objectref" name="wsa_objectref" value="<?php echo get_option( 'wsa_objectref' ); ?>" /><br />
<input type="text" id="wsa_websiteid" name="wsa_websiteid" value="<?php echo get_option( 'wsa_websiteid' ); ?>" /><br />
<input type="text" id="wsa_password" name="wsa_password" value="" /><br />
</form>


</div>
