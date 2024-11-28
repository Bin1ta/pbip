$(document).ready(function() {
    $('a.async-load').on('click', function (event) {
      event.preventDefault();
      if(!$('#myModal').length){ 
          // Create a modal element (id: gModal) if it doesn't exist
          var modal = '<div class="modal fade" id="myModal" tabindex="-1" role="dialog"><div class="modal-dialog"><div class="modal-content"></div></div></div>';
          $('body').append(modal);
      }
      
      
      $('#myModal .modal-content').html('<div class="loading">&nbsp;</div>');
      $('#myModal').modal({
          backdrop: 'static',
      });
      $.ajax({
          method: 'GET',
          url: $(this).attr("href"),
          async: true,
          success: function(response){
              $('#myModal .modal-content').html(response);
          },
          error: function(response){
              console.log('Error: ',response);
              $('#myModal').modal('hide');
          }
      });
    });
});
