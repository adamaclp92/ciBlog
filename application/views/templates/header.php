<!DOCTYPE html>
    <head>
        <title>ciBlog</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
        <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
        <style>
        .post-date{
            background: #f4f4f4;
            padding: 4px;
            margin: 3px 0;
            display: block;
        }
    </style>
      </head> 
    
    <body>
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category </a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
<?php if($this->session->flashdata('user_registered')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('post_created')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('post_updated')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('category_created')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('post_deleted')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
<?php endif; ?>