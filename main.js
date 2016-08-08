  $(document).ready(function() {

    $('#stuff1').on('mouseover', function(){
      $('#stuff').toggle();
    });

    $('.drop-down').on('click', function(){
      $('.menu').toggle();
    })
  });
