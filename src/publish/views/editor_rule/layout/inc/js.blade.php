

        {!! Html::script($cpanel.'js/script.js') !!}

@unless (Request::segment(2) == 'settings')
        {!! Html::script(url('vendor/adel-shokry/helpers/ckeditor/ckeditor.js')) !!}
        {!! Html::script(url('vendor/adel-shokry/helpers/ckeditor/ckeditor.js')) !!}
        <script type="text/javascript">
$('.editor').each(function(i){
    $(this).attr('id','textareaEditor'+i);

        var editor = CKEDITOR.replace( 'textareaEditor'+i , {

        filebrowserBrowseUrl : '{{ url('vendor/adel-shokry/helpers') }}/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : '{{ url('vendor/adel-shokry/helpers') }}/ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl : '{{ url('vendor/adel-shokry/helpers') }}/ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl : '{{ url('vendor/adel-shokry/helpers') }}/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl : '{{ url('vendor/adel-shokry/helpers') }}/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : '{{ url('vendor/adel-shokry/helpers') }}/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

    });
CKEDITOR.config.language = '{{ app()->getLocale() }}';


});

</script>
@endunless
       
        <script type="text/javascript">
            $(function(){$('input[name="keywords"],textarea[name="keywords]').tagsInput({
                width:'auto',
                defaultText:'',
            });});
        </script>
        @if (Request::segment(2) != 'settings')
        @include(user('rule').'_rule.layout.inc.js.datatable')
        @include(user('rule').'_rule.layout.inc.js.my_script')
        @endif


        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57309cec81749efc"></script> -->

    </body>

</html>