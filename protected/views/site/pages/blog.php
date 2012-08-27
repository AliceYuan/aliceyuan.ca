<?php
$this->pageTitle=Yii::app()->name . ' - Blog';
?>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/waypoints.min.js" ></script>
<script>
  $(document).ready(function() {
    // $('.filters').waypoint(function(event, direction) {
    //   $('.filters').toggleClass('fixed', direction === "down");
    // });
  });
</script>


<div class="main blog">
  <div class="page-title-wrapper blog">
    <a href="/" >
      <div class="page-title clearfix small">
          <h1>
            <span class="blog"> Blog </span>
          </h1>
      </div>
    </a>


    <div class="subtitle">
      <h2>
      </h2>
    </div> <!-- end subtitle -->


  </div>

  <div class="filters">

      <?php $this->widget('application.components.FilterMenu',array(
        'items'=>array(
          array('label'=>'all', 'itemOptions'=>array('class'=>'label')),
          array('label'=>'tutorials', 'itemOptions'=>array('class'=>'label')),
          array('label'=>'life', 'itemOptions'=>array('class'=>'label')),
          array('label'=>'discovery','itemOptions'=>array('class'=>'label')),
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





  <div class="page-content">
    <div class="timeline">
      <div class="blog-posts clearfix">

        <div id="post-08172012" class="post-1">
          <div class="post-indicator">
            <div class="point"> </div>
          </div>
          <div class="date">
            <p> <span class="M">Jun</span>
            <span class="D">27 </span>
            <span class="Y">2012</span>
            </p>
          </div>
          <div class="content">
            <h2 class="title"> Title Title Title Title Title </h2>
            <div class="body">
              <p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu sapien turpis. Integer fermentum, nibh at ullamcorper commodo, nisl augue ullamcorper lorem, id gravida mauris massa vitae urna. Morbi semper viverra orci, ut rhoncus risus vulputate vel. Ut nunc purus, ultricies vel faucibus ac, viverra ac tortor. Phasellus ornare consectetur ipsum, quis dictum nunc vehicula id. Etiam consequat scelerisque luctus. Aenean dictum enim sed ante cursus sit amet tincidunt dui pharetra. Mauris nec arcu in neque blandit adipiscing quis sit amet leo.
  </p>
  <p>
  In hac habitasse platea dictumst. Ut placerat orci in ipsum rhoncus sit amet sagittis ligula interdum. Pellentesque cursus, nisi sed molestie mattis, tellus mauris ultrices lectus, ut tincidunt est magna elementum nibh. Fusce sit amet nunc at diam hendrerit lacinia. Maecenas rutrum tempus lorem laoreet semper. Sed imperdiet, nunc in fringilla sollicitudin, ligula purus molestie leo, non commodo nibh sapien nec orci. Maecenas sit amet velit justo. Vivamus vehicula eros a turpis sagittis imperdiet elementum leo tempor. Quisque gravida convallis adipiscing.
  </p>
  <p>
  Suspendisse potenti. Duis consequat erat facilisis nunc bibendum faucibus. Cras vel iaculis nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. In nec purus purus. Quisque sit amet enim velit.
  </p>
  <img src="img/stock1.jpg"/>
  <p>
  Aliquam erat volutpat. Maecenas turpis velit, malesuada id laoreet dapibus, aliquet ornare mauris. Mauris in sem vel justo fringilla iaculis quis eget mi. Vestibulum aliquet ligula vel ipsum vestibulum lacinia. Ut nec justo et urna aliquet laoreet in ut mi. Aenean a nisi mollis justo vulputate posuere. Etiam ut scelerisque nunc. Etiam porttitor iaculis ipsum a semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin lobortis placerat. Vivamus rutrum odio vel enim congue imperdiet. Mauris nisi libero, auctor et pharetra ultricies, scelerisque id erat. Nulla suscipit dignissim tellus, et aliquet massa imperdiet et. Maecenas et nisi mauris.
              </p>
            </div>
          </div> <!-- content ends -->
          <div class="links">
            <!-- <div class="share"> -->
            <!--   <p>Share this on:</p> -->
            <!-- </div> -->
            <!-- <div class="comment"> -->
            <!--   <a href="comment"> <p> Comment >> </p> </a> -->
            <!-- </div> -->
          </div>


        </div> <!-- post ends -->




        <div id="post-08172012" class="post-1 discovery">
          <div class="post-indicator">
            <div class="point"> </div>
          </div>
          <div class="date">
            <p> <span class="M">Aug</span>
            <span class="D">17 </span>
            <span class="Y">2012</span>
            </p>
          </div>
          <div class="category">
            <div class="pointer"></div>
            <a href="#">
              <span></span>
              <p>discovery</p>
            </a>
          </div>
          <div class="content">
            <h2 class="title"> Title Title Title Title Title </h2>
            <div class="body">
              <p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu sapien turpis. Integer fermentum, nibh at ullamcorper commodo, nisl augue ullamcorper lorem, id gravida mauris massa vitae urna. Morbi semper viverra orci, ut rhoncus risus vulputate vel. Ut nunc purus, ultricies vel faucibus ac, viverra ac tortor. Phasellus ornare consectetur ipsum, quis dictum nunc vehicula id. Etiam consequat scelerisque luctus. Aenean dictum enim sed ante cursus sit amet tincidunt dui pharetra. Mauris nec arcu in neque blandit adipiscing quis sit amet leo.
  </p>
  <p>
  In hac habitasse platea dictumst. Ut placerat orci in ipsum rhoncus sit amet sagittis ligula interdum. Pellentesque cursus, nisi sed molestie mattis, tellus mauris ultrices lectus, ut tincidunt est magna elementum nibh. Fusce sit amet nunc at diam hendrerit lacinia. Maecenas rutrum tempus lorem laoreet semper. Sed imperdiet, nunc in fringilla sollicitudin, ligula purus molestie leo, non commodo nibh sapien nec orci. Maecenas sit amet velit justo. Vivamus vehicula eros a turpis sagittis imperdiet elementum leo tempor. Quisque gravida convallis adipiscing.
  </p>
  <p>
  Suspendisse potenti. Duis consequat erat facilisis nunc bibendum faucibus. Cras vel iaculis nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. In nec purus purus. Quisque sit amet enim velit.
  </p>
  <p>
  Aliquam erat volutpat. Maecenas turpis velit, malesuada id laoreet dapibus, aliquet ornare mauris. Mauris in sem vel justo fringilla iaculis quis eget mi. Vestibulum aliquet ligula vel ipsum vestibulum lacinia. Ut nec justo et urna aliquet laoreet in ut mi. Aenean a nisi mollis justo vulputate posuere. Etiam ut scelerisque nunc. Etiam porttitor iaculis ipsum a semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin lobortis placerat. Vivamus rutrum odio vel enim congue imperdiet. Mauris nisi libero, auctor et pharetra ultricies, scelerisque id erat. Nulla suscipit dignissim tellus, et aliquet massa imperdiet et. Maecenas et nisi mauris.
              </p>
            </div>
          </div> <!-- content ends -->
          <div class="">
          </div>
        </div> <!-- post ends -->




        <div id="post-08172012" class="post-1">
          <div class="post-indicator">
            <div class="point"> </div>
          </div>
          <div class="date">
            <p> <span class="M">Jun</span>
            <span class="D">27 </span>
            <span class="Y">2012</span>
            </p>
          </div>
          <div class="content">
            <h2 class="title"> Title Title Title Title Title </h2>
            <div class="body">
              <p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu sapien turpis. Integer fermentum, nibh at ullamcorper commodo, nisl augue ullamcorper lorem, id gravida mauris massa vitae urna. Morbi semper viverra orci, ut rhoncus risus vulputate vel. Ut nunc purus, ultricies vel faucibus ac, viverra ac tortor. Phasellus ornare consectetur ipsum, quis dictum nunc vehicula id. Etiam consequat scelerisque luctus. Aenean dictum enim sed ante cursus sit amet tincidunt dui pharetra. Mauris nec arcu in neque blandit adipiscing quis sit amet leo.
  </p>
  <p>
  In hac habitasse platea dictumst. Ut placerat orci in ipsum rhoncus sit amet sagittis ligula interdum. Pellentesque cursus, nisi sed molestie mattis, tellus mauris ultrices lectus, ut tincidunt est magna elementum nibh. Fusce sit amet nunc at diam hendrerit lacinia. Maecenas rutrum tempus lorem laoreet semper. Sed imperdiet, nunc in fringilla sollicitudin, ligula purus molestie leo, non commodo nibh sapien nec orci. Maecenas sit amet velit justo. Vivamus vehicula eros a turpis sagittis imperdiet elementum leo tempor. Quisque gravida convallis adipiscing.
  </p>
  <p>
  Suspendisse potenti. Duis consequat erat facilisis nunc bibendum faucibus. Cras vel iaculis nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. In nec purus purus. Quisque sit amet enim velit.
  </p>
  <img src="img/stock1.jpg"/>
  <p>
  Aliquam erat volutpat. Maecenas turpis velit, malesuada id laoreet dapibus, aliquet ornare mauris. Mauris in sem vel justo fringilla iaculis quis eget mi. Vestibulum aliquet ligula vel ipsum vestibulum lacinia. Ut nec justo et urna aliquet laoreet in ut mi. Aenean a nisi mollis justo vulputate posuere. Etiam ut scelerisque nunc. Etiam porttitor iaculis ipsum a semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin lobortis placerat. Vivamus rutrum odio vel enim congue imperdiet. Mauris nisi libero, auctor et pharetra ultricies, scelerisque id erat. Nulla suscipit dignissim tellus, et aliquet massa imperdiet et. Maecenas et nisi mauris.
              </p>
            </div>
          </div> <!-- content ends -->
          <div class="links">
            <!-- <div class="share"> -->
            <!--   <p>Share this on:</p> -->
            <!-- </div> -->
            <!-- <div class="comment"> -->
            <!--   <a href="comment"> <p> Comment >> </p> </a> -->
            <!-- </div> -->
          </div>


        </div> <!-- post ends -->


        <div id="post-08172012" class="post-1">
          <div class="post-indicator">
            <div class="point"> </div>
          </div>
          <div class="date">

          </div>
          <div class="content">
            <h2 class="title"> Title Title Title Title Title </h2>
            <div class="body">
              <p>
              <p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu sapien turpis. Integer fermentum, nibh at ullamcorper commodo, nisl augue ullamcorper lorem, id gravida mauris massa vitae urna. Morbi semper viverra orci, ut rhoncus risus vulputate vel. Ut nunc purus, ultricies vel faucibus ac, viverra ac tortor. Phasellus ornare consectetur ipsum, quis dictum nunc vehicula id. Etiam consequat scelerisque luctus. Aenean dictum enim sed ante cursus sit amet tincidunt dui pharetra. Mauris nec arcu in neque blandit adipiscing quis sit amet leo.
  </p>
  <p>
  In hac habitasse platea dictumst. Ut placerat orci in ipsum rhoncus sit amet sagittis ligula interdum. Pellentesque cursus, nisi sed molestie mattis, tellus mauris ultrices lectus, ut tincidunt est magna elementum nibh. Fusce sit amet nunc at diam hendrerit lacinia. Maecenas rutrum tempus lorem laoreet semper. Sed imperdiet, nunc in fringilla sollicitudin, ligula purus molestie leo, non commodo nibh sapien nec orci. Maecenas sit amet velit justo. Vivamus vehicula eros a turpis sagittis imperdiet elementum leo tempor. Quisque gravida convallis adipiscing.
  </p>
  <p>
  Suspendisse potenti. Duis consequat erat facilisis nunc bibendum faucibus. Cras vel iaculis nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. In nec purus purus. Quisque sit amet enim velit.
  </p>
  <p>
  Aliquam erat volutpat. Maecenas turpis velit, malesuada id laoreet dapibus, aliquet ornare mauris. Mauris in sem vel justo fringilla iaculis quis eget mi. Vestibulum aliquet ligula vel ipsum vestibulum lacinia. Ut nec justo et urna aliquet laoreet in ut mi. Aenean a nisi mollis justo vulputate posuere. Etiam ut scelerisque nunc. Etiam porttitor iaculis ipsum a semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin lobortis placerat. Vivamus rutrum odio vel enim congue imperdiet. Mauris nisi libero, auctor et pharetra ultricies, scelerisque id erat. Nulla suscipit dignissim tellus, et aliquet massa imperdiet et. Maecenas et nisi mauris.
              </p>
              </p>
            </div>
          </div> <!-- content ends -->
        </div> <!-- post ends -->


      </div>
    </div>
  </div> <!-- page-content ends -->
</div>
