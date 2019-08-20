$(document).ready(function() {
  $('.delete-resto').on('click',function(){
    var id = $(this).data('id');
    var url = '/delete/'+id;
    if(confirm('Supprimer restaurant ?')) {
      $.ajax({
        url:url,
        type:'DELETE',
        success:function(result) {
          console.log('DELETING RESTO');
          window.location.href = '/';
        },
        error:function(err) {
          console.log(err);
        }
      });
    }
  });
  $('.edit-resto').on('click',function(){
    $("#edit-form-title").val($(this).data('title'));
    $("#edit-form-content").val($(this).data('content'));
    $("#edit-form-region").val($(this).data('region'));
    $("#edit-form-categorie").val($(this).data('categorie'));
    $("#edit-form-adresse").val($(this).data('adresse'));
    $("#edit-form-phone").val($(this).data('phone'));
    $("#edit-form-website").val($(this).data('website'));
    $("#edit-form-id").val($(this).data('id'));
  });
  $('.add-plat').on('click',function(){
    $("#add-plat-id").val($(this).data('id'));
    $("#add-new-plat-id").val($(this).data('id'));
  });
  $('.add-photo').on('click',function(){
    $("#photoRestoId").val($(this).data('id'));
  });
  $('.carousel-inner').find(".item:first-child").toggleClass("active");
});
