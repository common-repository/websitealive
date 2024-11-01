<div id="div_wp_login" style="display:none; width:500px">

  <h1>WebsiteAlive For Wordpress</h1>

  <div class="div_features">Easily add your WebsiteAlive live chat and click-to-call window to your Wordpress site.</div>

  <p>To start, please enter your WebsiteAlive Administrator login details.</p>
  <br />
    
    <table border="0" cellpadding="4" cellspacing="4" align="center">
      <tr>
        <td class="aRight"><p>Username:</p></td>
        <td><input type="text" id="user_name" value=""/></td>
      </tr>
      <tr>
        <td class="aRight"><p>Password:</p></td>
        <td><input type="password" id="password" value=""/><br />
          
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="button" onclick="validateLogin()" value="Log In"/>
            <br /><br />
            <a href="#" onclick="$('#div_wp_login, #div_wp_config').hide();$('#div_wp_register').show();$('#reg_username').focus();"><p class="fs11">New User? Sign Up Now</p></a>
        </td>
      </tr>
    </table>

</div>
