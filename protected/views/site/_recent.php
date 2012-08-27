<ul class="col-1">
  <li class="post-<?php echo $data->category?>" id="post-<?php echo date('mdy',$data->create_time)?>">
    <a href="#">
      <div class="date">
        <p><span class="M"><?php echo date('M',$data->create_time); ?></span>
        <span class="D"><?php echo date('j',$data->create_time); ?></span>
        </p>
      </div>
      <div class="content">
        <h2 class="title"> <?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?></h2>
        <p class="shortened-desc">
        <?php
          $this->beginWidget('CMarkdown', array('purifyOutput'=>true));
          echo $data->content;
          $this->endWidget();
        ?>
      </div>
    </a>
  </li> <!-- end post -->
</ul><!--end col-1-->
