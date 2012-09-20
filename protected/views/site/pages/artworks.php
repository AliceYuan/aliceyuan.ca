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
          array('label'=>'photography', 'url'=>'#', 'itemOptions'=>array('class'=>'label')),
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



<?php
  $filePath = Yii::app()->getBasePath().'/'.'../img/art';
  $dir = opendir($filePath);
  while ($file = readdir($dir)) {
     if (eregi("\.png",$file) || eregi("\.jpg",$file) || eregi("\.gif",$file) ) {
     $string[] = $file;
     }
  }
  while (sizeof($string) != 0){
    $img = array_pop($string);
    echo "<img src='/img/art/$img'  width='150px'/>";
  }
?>
</div>


