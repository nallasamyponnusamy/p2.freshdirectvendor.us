
<form method='POST' action='/users/p_resetpwd'>
<input type="hidden" id="user_id" name="user_id" value="<?php echo $userid; ?>" />
    <script src="<?php echo "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"; ?>" > </script>

    <br> <br>
    Enter New Password
    <br>
    <input type='password' name='password'>
    <br><br>
    Confirm Password
    <br>
    <input type='password' name='confirmpassword'>
    <br><br>
    <input type='submit' value='Change Password'>

    <?php if(isset($error)): ?>
        <div class='error'>
            This Email is not Registered or Invalid Email ID.
        </div>
        <br>
    <?php endif; ?>


    <script>
    if(jQuery('password').val() != jQuery('confirmpassword').val())
    {
    // if passwords do not match
    alert("Password MisMatch! - Please Type Again!");
      }

    </script>
</form>
