
<h2 class="title"> <?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?></h2>
  <div class="date">
    <p><span class="M"><?php echo date('M',$data->create_time); ?></span>
    <span class="D"><?php echo date('j',$data->create_time); ?></span>
    <span class="Y"><?php echo date('Y',$data->create_time); ?></span>
    </p>
  </div>

<div name="post-<?php echo date('mdy',$data->create_time)?>" class="post-<?php echo $data->category?>" id="post-<?php echo date('mdy',$data->create_time)?>">
  <div class="post-indicator">
    <div class="point"> </div>
  </div>


  <div class="content">
  <?php if (isset($data->category)): ?>
    <!-- <div class="category <?php echo $data->category ?>"> -->
    <!--   <a href="#"> -->
    <!--     <span></span> -->
    <!--     <p><?php echo $data->category ?></p> -->
    <!--   </a> -->
    <!-- </div> -->
  <?php endif ?>
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


  <div id="comments">
    <div id="disqus_thread"></div>
          <script type="text/javascript">
              /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
              var disqus_shortname = 'aliceyuan'; // required: replace example with your forum shortname

              /* * * DON'T EDIT BELOW THIS LINE * * */
              (function() {
                  var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                  dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
              })();
          </script>
          <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
          <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

  </div><!-- comments -->

</div>
