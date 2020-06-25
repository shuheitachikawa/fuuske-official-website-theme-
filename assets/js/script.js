

//サブメニューの表示と非表示
const delaySubButton = 300;
$(document).on('click', '#more-button-js', (e) => {
  e.preventDefault();
  $('#sub-nav-js').slideDown(delaySubButton);
});

$(document).on('click', '#sub-nav-close-js', (e) => {
  e.preventDefault();
  $('#sub-nav-js').slideUp(delaySubButton);
});


