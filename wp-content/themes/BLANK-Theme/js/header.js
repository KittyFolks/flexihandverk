$(function(){

  $('#cycle').addClass('flying_content')
  $('#cycle').cycle();
  
  
  var active_color = '#000'; // Colour of user provided text
  var inactive_color = '#efefef'; // Colour of default text

  $("input#s, input#input_name, input#input_mail").css("color", inactive_color);
  var default_values = new Array();
  $("input#s, input#input_name, input#input_mail").focus(function() {
    if (!default_values[this.id]) {
      default_values[this.id] = this.value;
    }
    if (this.value == default_values[this.id]) {
      this.value = '';
      this.style.color = active_color;
    }
    $(this).blur(function() {
      if (this.value == '') {
        this.style.color = inactive_color;
        this.value = default_values[this.id];
      }
    });
  });
  
  if ($('.box_link').find('a')) {
    $('.box_link').find('a').attr('rel', 'shadowbox;height=600;width=800"');
  };
  
});