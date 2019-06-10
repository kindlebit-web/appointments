<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="{{ url('quickadmin/js') }}/bootstrap.min.js"></script>
<script src="{{ url('quickadmin/js') }}/select2.full.min.js"></script>
<script src="{{ url('quickadmin/js') }}/main.js"></script>
 <script src="{{ url('quickadmin/theme-assets/vendors/js') }}/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ url('quickadmin/theme-assets/vendors/js/charts') }}/chartist.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="{{ url('quickadmin/theme-assets/js/core') }}/app-menu-lite.js" type="text/javascript"></script>
    <script src="{{ url('quickadmin/theme-assets/js/core') }}/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ url('quickadmin/theme-assets/js/scripts/pages') }}/dashboard-lite.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        	
            var url = window.location.href; 
            if(url == "{{ url('/admin/home') }}"){
                $('.col-md-12').removeClass('card');
            }
        });
    </script>   
<script>
    window._token = '{{ csrf_token() }}';
</script>



@yield('javascript')