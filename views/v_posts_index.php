
<?php $int = 0; ?>
<?php foreach($posts as $post): ?>
<?php $int++; ?>
    <li class="<?php echo fmod($int, 2) ? 'even' : 'odd' ?>"

    <h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>

    <?php if($user->user_id == $post['post_user_id']): ?>
    <a href=/posts/edit/<?=$post['post_id']?>>edit</a>
    |
    <a href=/posts/delete/<?=$post['post_id']?>>delete</a>
    <br/>

    <?php endif; ?>
   </li>

<?php endforeach; ?>
