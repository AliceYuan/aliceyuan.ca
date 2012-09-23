<div class="main blog">
  <div class="page-title-wrapper blog">
      <div class="page-title clearfix small">
          <h1>
            <span class="blog"> Blog </span>
          </h1>
      </div>


    <div class="subtitle">
      <h2>
      </h2>
    </div> <!-- end subtitle -->


  </div>

  <div class="filters">

      <?php $this->widget('application.components.FilterMenu',array(
        'items'=>array(
          array('label'=>'all', 'itemOptions'=>array('class'=>'label active')),
          array('label'=>'general', 'itemOptions'=>array('class'=>'label')),
          array('label'=>'tech', 'itemOptions'=>array('class'=>'label')),
          array('label'=>'design','itemOptions'=>array('class'=>'label')),
        ),
        'linkLabelWrapper'=>'p',
        'activeCssClass'=>'active',
        'htmlOptions'=>array('class'=>'categories clearfix',),
        'itemTemplate'=>'
          <button>
            <span> </span>
            {menu}
          </button>
          ',
      )); ?>
  </div>


<!--
  <?php if(!empty($_GET['tag'])): ?>
  <h1>Posts Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h1>
  <?php endif; ?>
-->




  <div class="page-content">
    <div class="timeline">
      <div class="blog-posts clearfix">

        <?php $this->widget('zii.widgets.CListView', array(
          'dataProvider'=>$dataProvider,
          'itemView'=>'_view',
          'template'=>"{items}\n{pager}",
        )); ?>

    </div>
  </div> <!-- page-content ends -->
</div>
