<?php
$this->breadcrumbs=array(
	$model->title,
);
$this->pageTitle=$model->title;
?>

<div class="main blog-post">
  <div class="page-content">
    <?php $this->renderPartial('_viewSingle', array(
      'data'=>$model,
    )); ?>

  </div>
</div>
