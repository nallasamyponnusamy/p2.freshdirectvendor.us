<!DOCTYPE html>
<html>

<section id="mainContent" class="clear">
    <nav>

    </nav>
    <section id="mainRight">

        <div class="wrapper">

            <h1>Welcome <?php if($user) echo $user->first_name; ?></h1>

            <?php if($user): ?>
                <h2>What would you like to do:</h2>
                <div class="buttons">
                    <a href='/posts/add'>Add a Post</a>
                    <a href='/posts/index'> Check out Posts </a>
                    <a href='/posts/users'>List Users</a>
                </div>

            <?php else: ?>
                <h2>This is a members only site.</h2>
                <h4>New Users, please sign-up. It's free!</h4>

                <div class="buttons">
                    <a href='/users/signup'> SignUp</a>
                    <a href='/users/login'> Login </a>
                </div>
            <?php endif; ?>
        </div>

        <div><img src="images/home_img.png" width="560" height="242" alt="" title="" border="0" />
        </div>
        <br />
        <blockquoteWelcome to Farmers Blog, Tell us what is fresh today from your field?</blockquote>
        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit ame</p>


    </section>
    <!-- end mainRight -->
</section>
<!-- end mainContent -->




<footer>
    <ul>
        Project 2 - CSCIE15
    </ul>
</footer> /*