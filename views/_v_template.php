<!DOCTYPE html>
<html>

<div id='menu'>

    <a href='/'>Home</a>

    <!-- Menu for users who are logged in -->
    <?php if($user): ?>

        <a href='/users/logout'>Logout</a>
        <a href='/users/profile'>Profile</a>

        <!-- Menu options for users who are not logged in -->
    <?php else: ?>

        <a href='/users/signup'>Sign up</a>
        <a href='/users/login'>Log in</a>

    <?php endif; ?>

</div>

<br>

<?php if(isset($content)) echo $content; ?>

</body>
</html>



