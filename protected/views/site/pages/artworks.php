<?php
$this->pageTitle=Yii::app()->name . ' - Art';
?>
<div class="main about">
  <div class="page-title-wrapper">
      <div class="page-title clearfix">
          <h1>
            <span class="art"> Art </span>
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
          array('label'=>'all', 'url'=>'#', 'itemOptions'=>array('class'=>'label')),
          array('label'=>'drawing', 'url'=>'#', 'itemOptions'=>array('class'=>'label')),
          array('label'=>'photgraphy', 'url'=>'#', 'itemOptions'=>array('class'=>'label')),
          array('label'=>'misc', 'url'=>'#', 'itemOptions'=>array('class'=>'label')),
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



</div>


