<html>
<form method='POST' action='/users/p_forgetpwd'>

    Email<br>
    <input type='text' name='email'>

    <br><br>
	  <?php if(isset($error)): ?>
        <div class='error'>
            The Email you have provided is not valid or you have not registered yet. If you have not registered, please singup.
        </div>
        <br>
    <?php endif; ?>
	
    <input type='submit' value='Reset Password'>

</form>
</html>