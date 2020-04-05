<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <small class="post-date">Posted on: <b><?php echo $post['created_at']; ?></b></small>
    <h6><?php echo $post['body']; ?></h6>
    <p><a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
    <br>
<?php endforeach; ?>