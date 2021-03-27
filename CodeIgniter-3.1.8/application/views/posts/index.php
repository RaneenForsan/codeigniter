<?php
foreach($posts as $post):{

}
?>

<div class="row mb-2">
<div class="col-md-3">
<img src="http://via.placeholder.com/200">
</div>
<div class="col-md-9">
	<h4><?= $post['title']?></h4>
	<small class="badge badge-secondary">
	<?= $post['created_at']?>	</small>
	<p><?= $post['body']?></p>
	<a class="btn btn-outline-secondary" href="<?=base_url().'posts/'.$post['id']?>">Read More...</a>
</div>

</div>
<?php
endforeach; {

}
?>
