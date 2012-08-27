<div name="post-<?php echo date('mdy',$data->create_time)?>" class="<?php echo $data->category?>" id="post-<?php echo date('mdy',$data->create_time)?>">
  <div class="post-indicator">
    <div class="point"> </div>
  </div>
  <div class="date">
    <p><span class="M"><?php echo date('M',$data->create_time); ?></span>
    <span class="D"><?php echo date('j',$data->create_time); ?></span>
    <span class="Y"><?php echo date('Y',$data->create_time); ?></span>
    </p>
  </div>


  <div class="content">
  <?php if (isset($data->category)): ?>
    <div class="category <?php echo $data->category ?>">
      <a href="#">
        <span></span>
        <p><?php echo $data->category ?></p>
      </a>
    </div>
  <?php endif ?>
    <h2 class="title"> <?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?></h2>
    <div class="body">
		<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			echo $data->content;
			$this->endWidget();
		?>
    </div>
    <div class="nav">
      <?php echo CHtml::link('Permalink', $data->url); ?> |
      Last updated on <?php echo date('M j, Y',$data->update_time); ?>
    </div>
	</div>
</div>
