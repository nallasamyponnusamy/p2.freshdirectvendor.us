
<form method='POST' action='/users/p_resetpwd'>
<input type="hidden" id="user_id" name="user_id" value="<?php echo $userid; ?>" />
    <br> <br>
    Enter New Password
    <br>
    <input type='password' name='password'>
    <br><br>
    <input type='submit' value='Change Password'>
</form>
