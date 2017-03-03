<script>
    var TableDatatablesFixedHeader = function () {

    var initTable2 = function () {
        var table = $('.datatable');
        
        var oTable = table.dataTable({

            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": "{{trans('table.sortAscending')}}",
                    "sortDescending": "{{trans('table.sortDescending')}}"
                },
                "emptyTable": "{{trans('table.emptyTable')}}",
                "info": "{{trans('table.info')}}",
                "infoEmpty": "{{trans('table.infoEmpty')}}",
                "infoFiltered": "{{trans('table.infoFiltered')}}",
                "lengthMenu": "{{trans('table.lengthMenu')}}",
                "search": "{{trans('table.search')}}",
                "zeroRecords": "{{trans('table.zeroRecords')}}"
            },

            ordering:false,
            
            "lengthMenu": [
                [5, 10, 15, 30, -1],
                [5, 10, 15, 30, "{{ trans('table.all') }}"] // change per page values here
            ],
            // set the initial value
            "pageLength": 30,
            "paging":true,
            
      });
    }

    return {

        //main function to initiate the module
        init: function () {

            if (!jQuery().dataTable) {
                return;
            }

            initTable2();
        }

    };

}();

jQuery(document).ready(function() {
    TableDatatablesFixedHeader.init();
});

</script>