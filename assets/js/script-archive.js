
//初期状態で画面に入っていればopacity:1 入っていなければ0
$(window).on('load',function() {
  list = $('.content-archive-item')
  listHeight = list.height();
  $(list).each(function(){
    const imgHeight = $(this).offset().top;
    const winHeight = $(window).height();
    $(this).css({'top':listHeight / 2,});
    if(winHeight > imgHeight){
      $(this).animate({
        'opacity':'1',
        'top':'0',
      },500,)
    };
  });
});

//スクロールで画面に入ればopacity:1
$(window).on('scroll',function() {
  list = $('.content-archive-item')
  listHeight = list.height();
  $(list).each(function(){
    var height = $(this).offset().top - $(window).height() - listHeight / 2;
    var scroll = $(window).scrollTop();
    if(scroll >= height){
      $(this).animate({
        'opacity':'1',
        'top':'0',
      },500,)
    };
  });
});



