<?php
$post_id = $_GET['post_id'];
require_once '../admin/label/header.php';
require_once '../admin/function.php';
if(!is_numeric($post_id)) exit();
?>
<?php $post= get_post_by_id($post_id);?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="page-header">
                <h1><?=$post['title']?></h1>
            <div class="post-content">
                <?=$post['content']?>
            </div>
            <ul class="list-inline">
                    <li>Название категории</li>
                    <li>дата</li>
                </ul>
                </div>
        </div>
        <div class="col-md-3">
                
        </div>
    </div>
</div>

<?php
include_once '../admin/label/footer.php';
?>