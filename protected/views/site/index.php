<div class="main index">
  <div class="page-title-wrapper">
      <div class="page-title clearfix">
          <h1>
            <span class="alice">Alice</span>
            <span class="yuan"> Yuan </span>
          </h1>
      </div>


    <div class="slogan subtitle">
      <h2>
        <p class="line1">
          <span class="program">I program.</span>
          <span class="design">I design.</span>
        </p>
        <p class="line2">
          <span class="create">I create.</span>
          <span class="innovate">I innovate.</span>
        </p>
      </h2>
    </div>
  </div>

  <div class="page-content">
    <div class="recent-posts clearfix">
      <h1 class="recent-title">
        <a href="<?php echo Yii::app()->createUrl('post/index'); ?>"> Recent Posts</a>
      </h1>

      <ul class="posts">
        <?php $this->widget('zii.widgets.CListView', array(
          'dataProvider'=>$dataProvider,
          'itemView'=>'_recent',
          'template'=>"{items}\n{pager}",
        )); ?>
      </ul>
    </div> <!-- recent-posts end -->

  </div><!-- page-content end -->
</div><!-- main end -->
