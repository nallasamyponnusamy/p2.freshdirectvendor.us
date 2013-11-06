<form method='POST' action='/users/p_signup'>

    First Name<br>
    <input type='text' name='first_name'>
    <br><br>

    Last Name<br>
    <input type='text' name='last_name'>
    <br><br>

    Email<br>
    <input type='text' name='email'>
    <br><br>

    Password<br>
    <input type='password' name='password'>
    <br><br>

    <?php if(isset($nameerror)): ?>
        <div class='error'>
            Login failed. Please double check your email and password.
        </div>
    <?php endif; ?>


    <?php if(isset($emailerror)): ?>
        <br>
    <?php endif; ?>

    <?php if(isset($emailerror)): ?>
    <?php endif; ?>


    <input type='submit' value='Sign up'>

</form>