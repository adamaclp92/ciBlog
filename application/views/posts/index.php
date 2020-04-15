<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <div class="row">
        <div class="col-md-3">
            <img style="height: 150px; width: 150px;" class="rounded" src="<?php echo site_url(); ?>assets/<?php echo $post['post_image']; ?>">
        </div>
        <div class="col-md-9">
            <small class="post-date">Posted on: <b><?php echo $post['created_at']; ?></b> in <strong><?php echo $post['name']; ?></strong></small>
            <h6><?php echo word_limiter($post['body'], 60); ?></h6>
            <p><a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
            <br>
        </div>
    </div>
    <br>
<?php endforeach; ?>