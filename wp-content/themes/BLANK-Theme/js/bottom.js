$(function(){

if($('.post').attr('id') == 35) {
  $(this).find('p').css('margin-top','200px');
}

$('#searchform').appendTo('#menu-first-menu');
$('#searchform').wrap('<li class="menu-item search_form"><li>')
$('#searchform').find('label').remove();
$('#s').attr('value', 'søk');
$('#searchsubmit').attr('value', '');


if ($('.wp-pagenavi')){
    $('.wp-pagenavi:first').css({
    'font-size': '13px',
    'border-bottom': '1px solid #ccc',
    'margin-bottom': '10px'
    });
    $('.wp-pagenavi').not('.wp-pagenavi:first').css({
    'font-size': '11px',
    'border-top': '1px solid #ccc',
    'margin-bottom': '5px'
    });
  } 
  
$('.post_view').find('h3').css({
  'margin-bottom': '20px', 
  'font-size':'18px',
  'font-weight': 'bold',
  'padding':'5px',
  'width':'950px'
  });
  
if ($('.box_link').find('a')) {
  $('.box_link').find('a').attr('rel', 'shadowbox;height=600;width=800"');
};

if ($('.box_link').find('.newsletter')) {
  $('.entry').removeClass('box_link');
  $('.newsletter').find('a').attr('rel', '');
};

$("#menu-first-menu a").each(function() {
  var hreflink = $(this).attr("href");
  if (hreflink.toLowerCase()==location.href.toLowerCase()) {
	 $(this).parent("li").addClass("selected");
  }
});
    
});