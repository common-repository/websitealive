<div id="div_wp_register" style="display:none; width:500px">

  <h1>New User Registration</h1>

  <div class="div_features">Easily add your WebsiteAlive live chat and click-to-call window to your Wordpress site.</div>

  <p>To sign up a new account, please enter a Username and your Email.</p>
  <br />
    
    <table width="auto" border="0" cellpadding="4" cellspacing="4" align="center">
      <tr>
        <td class="aRight"><p>Username:</p></td>
        <td><input type="text" id="reg_username" value=""/></td>
      </tr>
      <tr>
        <td class="aRight"><p>Email:</p></td>
        <td><input type="text" id="reg_emailadmin" value=""/><br />
          
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="button" onclick="register();" value="Register"/>
            <br /><br />
            <p class="fs11"><a href="#" onclick="$('#div_wp_login, #div_wp_config').hide();$('#div_wp_register').hide();$('#user_name').focus();"><p class="fs11">Existing User?</a></p> 
        </td>
      </tr>
    </table>

</div>
