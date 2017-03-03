            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                    @yield('menu')
                        
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    @if (Request::segment(2) != 'settings')
                     <h3 class="page-title"> @yield('title')</h3> 
                    @endif
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
<br>