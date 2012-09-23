$(document).ready(function(){
  var default_button_size = '30px';
  var hover_button_size = '40px';
  resize();
  blogPage();
  artworksPage();
  $(window).resize(function() {
    resize();
  });
  windowLoad();
});

function windowLoad(){
  $(window).load( function() {
    resize();
  });
}


function resizeText(){
  $('h1, h2, .social.links').each( function(index) {
     while( $(this).outerWidth() > $('body .main-wrapper .main').outerWidth()*0.95) {
      $(this).css( 'font-size', (parseInt($(this).css('font-size')) - 2) + 'px');
     }
     while( $(this).outerWidth() < $('body .main-wrapper .main').outerWidth()*0.95) {
      $(this).css( 'font-size', (parseInt($(this).css('font-size')) + 2) + 'px');
     }
  });
}

// Resizes Page Title
function resizeTitle(){
  $('.main .slogan p').removeAttr('style');
  var $title = $('.main .page-title');
  var titleW = $title.width();
  var $slogan = $('.main .slogan');
  var sloganW = $slogan.width();
  var sloganMargin = parseInt($('.main .slogan p').css('margin-right'));
  $('.main .slogan p').width(((sloganW - sloganMargin)/2)*0.98);
  // equalHeightWidth($title);
}

//centers Main div inside wrapper. Accounts for menu on left side
function centerMain(){
  var mainW = $('.main-wrapper').width();
  var windowW = $(window).width();
  var mainH = $('.main-wrapper').height();
  var mainML = parseInt($('.main-wrapper').css('margin-left'));
  var mainMT = parseInt($('.main-wrapper').css('margin-top'));
  if (mainML > 0 && mainMT == 0){
      $('.main-wrapper').css({
      'width': (windowW - mainML)+'px',
    });
  }else{
    $('.main-wrapper').css({
      'width': '100%',
    });
  }
}

function resize(){
  centerMain();
  resizeTitle();
  centerHorizontal($('.filters .categories'), $('.filters'));
  equalHeight($('.recent-posts ul li'));
}


function indexPage(){
}

//javascript functions for blog page
function blogPage(){
  filter('.blog-posts','.filters','[id*="post-"]','slide');
}
//javascript functions for artworks page
function artworksPage(){
  filter('.art-gallery','.filters','[class*="img-"]','hide');

  $('.filters').find('button').click(function(){
    label = $(this).find('p').text();
    $('.art-gallery li a').each(function(){
      if (label == 'all'){
        $(this).attr('rel', 'gallery');
      } else if ($(this).hasClass(label)){
        $(this).attr('rel', 'gallery-'+label);
      }
    });
  });
}

//functions specifically for front page
function frontPage(){
  if ($('body').hasClass('front')){
  }
}
// =============================================================
// Filter Function
// =============================================================

function filter(toFilterParent, filtersDiv, toFilterName, effect){
  //get label of each filter
  var $toFilterParent = $(toFilterParent);
  var $filtersDiv = $(filtersDiv);
  var label;
  $filtersDiv.find('button').click(function(){
    $filtersDiv.find('li.label').each(function(){
      $(this).removeClass('active');
    });
    $(this).parent().addClass('active');
    label = $(this).find('p').text();

    if (effect == 'slide'){
      var delay = 100;
      var slideDownTime = 700;
      var slideUpTime = 500;
      if (label == 'all'){
        $toFilterParent.find(toFilterName).each(function(i){
          $(this).delay(i*delay).slideDown(slideDownTime);
        });
      }else{
        $toFilterParent.find(toFilterName).each(function(i){
          if ($(this).hasClass(label)){
            $(this).delay(i*delay).slideDown(slideDownTime);
          }else{
            $(this).delay(i*delay).slideUp(slideUpTime);
          }
        });
      }
    }//end slide effect
    else if(effect == 'hide'){
      var delay = 100;
      var fadeInTime = 100;
      var fadeOutTime = 100;
      if (label == 'all'){
        $toFilterParent.find(toFilterName).each(function(i){
          $(this).delay(i*delay).fadeIn(fadeInTime);
          delay = delay-1;
        });
      }else{
        $toFilterParent.find(toFilterName).each(function(i){
          if ($(this).hasClass(label)){
            $(this).delay(i*delay).fadeIn(fadeInTime);
          }else{
            $(this).delay(i*delay).fadeOut(fadeOutTime);
          }
          delay = delay-1;
        });
      }
    }//end hide effect
  });
}

// =============================================================
// Reuseable Functions
// ============================================================


//function makes height the same as the width of an object
function equalHeightWidth($object){
  $object.height($object.width());
}

//function centers the object vertically within the parent object
function centerVertical($object, $parentObject){
  var parentH = $parentObject.height();
  var objectH = $object.height();
  $object.css({
    'margin-top': ((parentH - objectH)/2)+'px',
  });
}

//function centers the object horizontally within the parent object
function centerHorizontal($object, $parentObject){
  var parentW = $parentObject.width();
  var objectW = $object.width();
  $object.css({
    'margin-left': ((parentW - objectW)/2)+'px',
  });
}

//function makes all objects the same height
function equalHeight($object){
  var maxHeight = 0;
  $object.removeAttr('style');
  $object.each(function(index){
    var currentHeight = $(this).height();
    if (currentHeight > maxHeight){
      maxHeight = currentHeight;
    }
  });
  $object.each(function(index){
    $(this).height(maxHeight);
  });
}
