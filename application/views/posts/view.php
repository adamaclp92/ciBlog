<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <b><?php echo $post['created_at']; ?></b></small>
<br>     
<img style="height: 100px; width: 100px;" class="rounded" src="<?php echo site_url(); ?>assets/<?php echo $post['post_image']; ?>">
<br><br>     
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
<hr>
<h3>Comments</h3>
<?php if($comments) : ?>
    <?php foreach($comments as $comment) : ?>  
    <div class="breadcrumb">  
        <p><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</p>
    </div>
    <?php endforeach; ?>
<?php else : ?>
    <p>No comments.</p>
<?php endif; ?>
<hr>
<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea type="text" name="body" class="form-control"></textarea>
    </div>
    <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
    <button class="btn btn-primary"  type="submit">Submit</button>
</form>