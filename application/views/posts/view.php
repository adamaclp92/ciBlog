<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <b><?php echo $post['created_at']; ?></b></small>
<div class="post-body">
<?php echo $post['body']; ?>
</div>

<hr>
<div class="row mx-md-n5">
<a class="btn btn-success px-md-3 ml-5" href="<?php echo site_url('/posts/edit/'.$post['slug']); ?>">Edit</a>
<?php echo form_open('posts/delete/'.$post['id']); ?>
<input class="px-md-3 btn btn-danger ml-2" type="submit" value="Delete">
</form>
</div>