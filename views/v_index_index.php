<!DOCTYPE html>
<section id="mainContent" class="clear">
    <nav>
        <h3>Welcome</h3>
        <?php if ($user): ?>
            <br/>
         <h3><?php echo $user->first_name; ?> !</h3>
        <?php else: ?>
          <h3>Guest!</h3>
        <?php
        endif; ?>
        <ul>
            <?php if ($user): ?>
<!--                <li><h4>Choose Your Options:</h4></li>-->
                <li><a href='/posts/add'>Add a Post</a></li>
                <li><a href='/posts/index'>BrowseBlog</a></li>
                <li><a href='/posts/users'>List Users</a></li>
                <li><a href='/posts/users'>Your Profile</a></li>
            <?php else: ?>
<!--                <h3>This is a members only site.</h3>
                <h2>New Users, please sign-up. It's free!</h2>-->
                <li><a href='/users/signup'> SignUp</a></li>
                <li><a href='/users/login'> Login </a></li>
            <?php endif; ?>
        </ul>
    </nav>
    <section id="mainRight">
<!--        <div><img src="images/home_img.png" width="560" height="242" alt="" title="" border="0" />-->
<!--        </div>-->
        <br />
        <blockquote>Testing</blockquote>
        <h2>Lorem Ipsum Dolor</h2>
        <p>Extra features are (1) Edit Profile (2) Upload Profile Picture</p>

    </section>
    <!-- end mainRight -->
</section>

<footer>
    <ul>
        Project 2 - CSCIE15
    </ul>
</footer>
</html>