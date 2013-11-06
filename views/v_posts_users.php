<?php $int = 0; ?>
<?php foreach($users as $user): ?>
    <?php $int++; ?>
    <li class="<?php echo fmod($int, 2) ? 'even' : 'odd' ?>"
    <!-- Print this user's name -->
    <?=$user['first_name']?> <?=$user['last_name']?>

    <!-- If there exists a connection with this user, show a unfollow link -->
    <?php if(isset($connections[$user['user_id']])): ?>
        <a class='unfollow' href='/posts/unfollow/<?=$user['user_id']?>'><br>Unfollow</a>

    <!-- Otherwise, show the follow link -->
    <?php else: ?>
        <a class='follow' href='/posts/follow/<?=$user['user_id']?>'><br>Follow</a>
    <?php endif; ?>

    <br><br>
    </li>
<?php endforeach; ?>
