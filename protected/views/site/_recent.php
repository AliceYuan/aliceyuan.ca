<?php
  $shortened_content = strip_tags ( $data->content , '<p><span>');
  $input = $shortened_content;
  $length = 350;
  if (!(strlen($input) <= $length)) {
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);

    //add ellipses (...)
    $trimmed_text .= '...';
    $shortened_content = $trimmed_text;
  }
?>
<li class="post-<?php echo $data->category?>" id="post-<?php echo date('mdy',$data->create_time)?>">

<a href="<?php echo $data->url;?>" class="clearfix">
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
        echo $shortened_content;
        $this->endWidget();
      ?>
    </div>
  </a>
</li> <!-- end post -->
