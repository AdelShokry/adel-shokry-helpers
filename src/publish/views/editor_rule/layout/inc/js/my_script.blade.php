<script>
$(document).on('click', '.print', function(event) {
  event.preventDefault();
  var target = $(this).attr('target');
  $(target).printThis();
});

$(document).on('change','#checkAll',function(event){
  event.stopPropagation();
  if(this.checked) {
      // Iterate each checkbox
      $('.checkbox').each(function() {
          this.checked = true;
          $(this).parent('span').addClass('checked');
          $(this).closest('tr').addClass('danger');
          
      });
  }
  else {
    $('.checkbox').each(function() {
          this.checked = false;
          $(this).parent('span').removeClass('checked');
          $(this).closest('tr').removeClass('danger');
      });
  }
});
$(document).on('change','.checkbox',function(event){
  event.stopPropagation();
    if ($(this).is(':checked')) 
    {
$(this).closest('tr').addClass('danger');
    }else{
        
$(this).closest('tr').removeClass('danger');
    }
});
        // Start delete
        $(document).on("click",".btn-delete",function(e){
                e.preventDefault();
                var url = $(this).attr("url");
                var msg = $(this).attr("msg");
                var For = $(this).attr("for");
                $('#modal_area').html('<div class="modal delete_modal fade" '+
                        'tabindex="-1" role="dialog">'+
  '<div class="modal-dialog">'+
    '<div class="modal-content">'+
      '<div class="modal-header">'+
      '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
        '<span aria-hidden="true">&times;</span></button>'+
        '<h4 class="modal-title text-danger">{{trans("lang.warning")}} !</h4>'+
      '</div>'+
      '<div class="modal-body">'+
'<p class=" text-danger">'+
msg +
'</p>'+
      '</div>'+
      '<div class="modal-footer">'+
'<button type="button" class="btn btn-default" data-dismiss="modal">'+
'{{trans("lang.close")}}</button>'+
'<button type="submit" form="delete_form" data-loading-text="{{trans("lang.loading")}}" class="btn btn-danger">'+
'{{trans("lang.confirm_delete")}}</button>'+
'{!! Form::open(["method"=>"delete","class"=>"hidden","id"=>"delete_form"]) !!}'+
'{!! Form::submit("") !!}'+
'{!! Form::close() !!}'+
       '</div>'+
    '</div><!-- /.modal-content -->'+
  '</div><!-- /.modal-dialog -->'+
'</div><!-- /.modal -->');
$('#delete_form').attr('action',url);
                $(".delete_modal").modal();
        });
// End delete

var slug = function(str) {
    var $slug = '-';
    var trimmed = $.trim(str);
    $slug = trimmed.replace(/[^a-z0-9-_]/gi, '-').
    replace(/-+/g, '-').
    replace(/^-|-$/g, '-');
    return $slug.toLowerCase();
}


    $(document).on('keyup', 'input[name="urlname"]', function(event) {
      event.preventDefault();
      if (event.keyCode == 111 || event.keyCode != 32 
        && event.keyCode != 17 && event.keyCode != 65
        && event.keyCode != 67&& event.keyCode != 88&& event.keyCode != 86) {
        $(this).val(slug($(this).val()));
      }
      var url = slug($(this).val());

      
      $('.url-name-preview').find('b').html(slug($(this).val()));
    });






</script>