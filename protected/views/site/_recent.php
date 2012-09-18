<?php
  // $shortened_content = strip_tags ( $data->content , '<p><span>');
  // $shortened_content = abbreviate($shortened_content, 150);
?>
<li class="post-<?php echo $data->category?>" id="post-<?php echo date('mdy',$data->create_time)?>">

<a href="<?php echo $data->url;?>">
    <div class="date">
      <p><span class="M"><?php echo date('M',$data->create_time); ?></span>
      <span class="D"><?php echo date('j',$data->create_time); ?></span>
      </p>
    </div>
    <div class="content">
      <h2 class="title"> <?php echo $data->title ?></h2>
      <p class="shortened-desc">
      <?php
        $this->beginWidget('CMarkdown', array('purifyOutput'=>true));
        echo strip_tags ( $data->content , '<p><span>');
        $this->endWidget();
      ?>
    </div>
  </a>
</li> <!-- end post -->
