<?php require_once 'label/header.php'; ?>
<?php require_once 'function.php' ?>
<div class="container">
    <div class="col-md-9">
        <div class="page-header">
        <h1>ПРивет !1</h1>
    </div>

<?php $posts = get_posts(); ?>
<?php foreach($posts as $post): ?>


    <div class="row">
  <div class="span8">
    <div class="row">
      <div class="span8">
        <h4><strong><a href="#"><?=$post['title']?></a></strong></h4>
      </div>
    </div>
    <div class="row">
      <div class="span2">
        <a href="#" class="thumbnail">
            <img src="<?=$post['image']?>" alt="">
        </a>
      </div>
      <div class="span6">      
        <p>
        <?=mb_substr($post['content'], 0, 128, 'utf-8').'...'?>
        </p>
        <p><a class="btn" href="../post/post.php?post_id=<?=$post['id']?>">Read more</a></p>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <p></p>
        <p>
          <i class="icon-user"></i> by <a href="#">John</a> 
          | <i class="icon-calendar"></i> Sept 16th, 2012
          | <i class="icon-tags"></i> Tags : <a href="#"><span class="label label-info">Snipp</span></a> 
        </p>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
    </div>
</div>

<?php require_once 'label/footer.php'; ?>