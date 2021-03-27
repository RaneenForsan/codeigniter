
<div class="row mb-2">
<div class="col-md-12 mb-3">
<h4 class="dispaly-4"><?= $post['title']?></h4>
<small class="badge badge-secondary">
	<?= $post['created_at']?>	
</small>
</div>
<div class="col-md-12"> 
<img src="http://via.placeholder.com/600x300">
</div>
	<p><?= $post['body']?></p>
	<a class="btn btn-outline-secondary mr-4" href="<?=base_url().'posts/edit/'.$post['id']?>">Edit</a>

<?php echo form_open('posts/delete/'.$post['id'])?>
	<button type="submit" class="btn btn-outline-danger">Delete</button>
	</form>
</div>

