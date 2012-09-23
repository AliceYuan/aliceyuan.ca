<?php
$this->pageTitle=Yii::app()->name . ' - Art';
?>
<div id="page-artworks" class="main artworks clearfix">
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
          array('label'=>'all', 'itemOptions'=>array('class'=>'label active')),
          array('label'=>'drawing', 'itemOptions'=>array('class'=>'label')),
          array('label'=>'photography','itemOptions'=>array('class'=>'label')),
          array('label'=>'misc', 'itemOptions'=>array('class'=>'label')),
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


  <div class="art-gallery">
    <ul>
  <?php
    $filePath = Yii::app()->getBasePath().'/'.'../img/art/thumbs';
    $dir = opendir($filePath);
    while ($file = readdir($dir)) {
       if (eregi("\.png",$file) || eregi("\.jpg",$file) || eregi("\.gif",$file) ) {
       $string[] = $file;
       }
    }
    while (sizeof($string) != 0){
      $img = array_pop($string);
      $array_img_name = explode("-",$img);
      $order = $array_img_name[0];
      $year = $array_img_name[1];
      $art_type = explode(".",$array_img_name[2]);
      $art_type = $art_type[0];
      echo "
      <li class='img-".$order." ".$art_type." ".$year."'>
        <div class='crop'>
          <a href='/img/art/enlarged/$img' rel='gallery' alt='' class='fancybox ".$art_type." ".$year."' >
            <img src='/img/art/thumbs/$img' />
          </a>
        </div>
      </li>";
    }
  ?>
    </ul>
  </div>

</div>


