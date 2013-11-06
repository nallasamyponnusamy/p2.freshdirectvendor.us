<form method='post' action='/posts/p_edit/<?=$post['post_id']?>'>

	<textarea rows="8" cols="75" name='content'><?=$post['content']?></textarea>
	
	<br><br>
	
	<input type='Submit' value='Edit Post'>

</form>