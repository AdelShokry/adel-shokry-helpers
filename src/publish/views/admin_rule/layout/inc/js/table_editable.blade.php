<script>
    var TableDatatablesFixedHeader = function () {

    var initTable2 = function () {
        var table = $('.datatable');
        // var url = table.attr('ajax');

        var fixedHeaderOffset = 0;
        if (App.getViewPort().width < App.getResponsiveBreakpoint('md')) {
            if ($('.page-header').hasClass('page-header-fixed-mobile')) {
                fixedHeaderOffset = $('.page-header').outerHeight(true);
            } 
        } else if ($('.page-header').hasClass('navbar-fixed-top')) {
            fixedHeaderOffset = $('.page-header').outerHeight(true);
        }

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

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},

            // setup rowreorder extension: http://datatables.net/extensions/fixedheader/
            fixedHeader: {
                header: true,
                footer: true,
                headerOffset: fixedHeaderOffset
            },

            ordering:false,
            
            "lengthMenu": [
                [5, 10, 15, 30, -1],
                [5, 10, 15, 30, "{{ trans('table.all') }}"] // change per page values here
            ],
            // set the initial value
            "pageLength": 30,
            "paging":true,
            
            // "ajax": url
            
            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
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


var TableDatatablesResponsive = function () {

    var initTable1 = function () {
        var table = $('#sample_1');

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

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},

            // setup buttons extentension: http://datatables.net/extensions/buttons/
            buttons: [
                { extend: 'print', className: 'btn dark btn-outline' },
                { extend: 'pdf', className: 'btn green btn-outline' },
                { extend: 'csv', className: 'btn purple btn-outline ' }
            ],

            // setup responsive extension: http://datatables.net/extensions/responsive/
            responsive: {
                details: {
                   
                }
            },

            ordering:false,
            
            "lengthMenu": [
                [5, 10, 15, 30, -1],
                [5, 10, 15, 30, "{{ trans('table.all') }}"] // change per page values here
            ],
            // set the initial value
            "pageLength": 30,
            "paging":true,

            "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
        });
    }

    var initTable2 = function () {
        var table = $('.sample_2');

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

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},

            // setup buttons extentension: http://datatables.net/extensions/buttons/
            buttons: [
                
            ],

            // setup responsive extension: http://datatables.net/extensions/responsive/
            responsive: {
                details: {
                    type: 'column',
                    target: 'tr'
                }
            },
            columnDefs: [ {
                className: 'control',
                orderable: false,
                targets:   0
            } ],

            ordering:false,
            
            "lengthMenu": [
                [5, 10, 15, 30, -1],
                [5, 10, 15, 30, "{{ trans('table.all') }}"] // change per page values here
            ],
            // set the initial value
            "pageLength": 30,
            "paging":true,

            // "pagingType": 'bootstrap_extended', // pagination type

            "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
        });
    }

    var initTable3 = function () {
        var table = $('#sample_3');

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

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},

            // setup buttons extentension: http://datatables.net/extensions/buttons/
            buttons: [
                { extend: 'print', className: 'btn default' },
                { extend: 'pdf', className: 'btn default' },
                { extend: 'csv', className: 'btn default' }
            ],

            // setup responsive extension: http://datatables.net/extensions/responsive/
            responsive: {
                details: {
                   
                }
            },

            "order": [
                [0, 'asc']
            ],
            
            "lengthMenu": [
                [5, 10, 15, 20, -1],
                [5, 10, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": 10,

            "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
        });
    }

    var initTable4 = function () {
        var table = $('.datatable-responsive');

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
                "zeroRecords": "{{trans('table.zeroRecords')}}",
                
            },

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},

            // setup buttons extentension: http://datatables.net/extensions/buttons/
            buttons: [
                { extend: 'print', className: 'btn default' },
                { extend: 'pdf', className: 'btn default' },
                { extend: 'csv', className: 'btn default' }
            ],

            // setup responsive extension: http://datatables.net/extensions/responsive/
            responsive: {
                details: {
                   
                }
            },

           ordering:false,
            
            "lengthMenu": [
                [5, 10, 15, 30, -1],
                [5, 10, 15, 30, "{{ trans('table.all') }}"] // change per page values here
            ],
            // set the initial value
            "pageLength": 30,
            "paging":true,

            "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
        });
    }
    

    return {

        //main function to initiate the module
        init: function () {

            if (!jQuery().dataTable) {
                return;
            }

            initTable1();
            initTable2();
            initTable3();
            initTable4();
        }

    };

}();

jQuery(document).ready(function() {
    TableDatatablesResponsive.init();
});
</script>