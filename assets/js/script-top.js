
let windowHeight = $(window).height();
let windowWidth = $(window).width();


//スマホトップ画面でヘッダーを上に移動
const headerPosition =() => {
  if (window.matchMedia( "(max-width: 770px)" ).matches) {
    if($(window).scrollTop() >= windowHeight){
      $('header').slideDown();
    }else{
      $('header').slideUp();
    };
  }else{
    $('header').css({
      'display':'',
      'top':'',
      'z-index':'',
  });
};
};

$(window).on('scroll', headerPosition);




//トップ画面読み込んだ時に画像をフワッと表示,ヘッダーを下部に表示(CSSで初期は非表示)
$(window).on("load", function() {
  $('.main-img').fadeIn(1000);
  if (window.matchMedia( "(max-width: 770px)" ).matches) {
    $('.sub-nav').css({
      'top':64,
    });
  };
});



//フワッと出てくる前の設定
$(window).on('load', function() {
  $('.news-wrapperj, .video-wrapper, .goods-wrapper, .blog-wrapper').css({
    'opacity':'0%',
    'top':'50px',
  });
});

//フワッとする内容
$(window).on('scroll',function() {
  const delayHeight = 80;
  var offNews = $('.news-wrapperj').offset().top - $(window).height() + delayHeight;
  var offVideo = $('.video-wrapper').offset().top - $(window).height() + delayHeight;
  var offGoods = $('.goods-wrapper').offset().top - $(window).height() + delayHeight;
  var offBlog = $('.blog-wrapper').offset().top - $(window).height() + delayHeight;

  const duration = 300;

  if($(window).scrollTop() >= offNews){
    $('.news-wrapperj').animate({
     'opacity':'100%',
     'top':'0px'
    },duration,);
  };
  if($(window).scrollTop() >= offVideo){
    $('.video-wrapper').animate({
     'opacity':'100%',
     'top':'0px'
    },duration,);
  };
  if($(window).scrollTop() >= offGoods){
    $('.goods-wrapper').animate({
     'opacity':'100%',
     'top':'0px'
    },duration,);
  };
  if($(window).scrollTop() >= offBlog){
    $('.blog-wrapper').animate({
     'opacity':'100%',
     'top':'0px'
    },duration,);
  };
});
