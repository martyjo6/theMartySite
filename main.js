
$(document).ready(function(){
  $(".drop-down-btn").click(function(){
    $(".drop-down").toggle();
  });
  $(".drop-down").mouseleave(function(){
    $(".drop-down").hide();
  });
});
